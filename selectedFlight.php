
<?php
session_start();

if ( !isset( $_SESSION[ 'userID' ] ) ){
    include('header.html');
}
else{
    include('logged_header.php');
}
?>
<script type="text/javascript">
function changePrice(){
    var defaultPrice = 150;
    var count = document.getElementById("bags").value;
    var finalPrice = defaultPrice + (parseInt(count)*50);
    document.getElementById("price").innerHTML = "Total Price: " + "$" + finalPrice + ",00";
    count +=1;
}

</script>
<style type="text/css">
#startDate, #endDate {
      background-color: white;
      cursor: pointer;
}
</style>
<body>

<?php

if (isset($_GET['flightNumber'])) {
    require('connect_db.php');

    $query = mssql_query('SELECT * FROM FLIGHT
                        WHERE Flight_number = '. '"' . $_GET['flightNumber'] .'"' );

    if (!mssql_num_rows($query)) {
        echo 'ERROR';
    }
    else
    {
        // Print a nice list of users in the format of:
        // * name (username)
        echo "<h1>Selected Flight</h1><br>";
        echo '<form name="flight_payment" action="sucPayment.php">';
        while ($row = mssql_fetch_assoc($query)) {
            $depDate = strtotime($row['Depature_time']);
            echo '<tr><td>Departure City: ' . $row['Depature_city'] . '</tr><br>
                <tr>Arrival City: ' . $row['Arrival_city'] . "</tr><br>
                <tr> Date: " . date('Y-m-d', $depDate) . "</tr><br>
                <tr> Departure Time: " . date('H:i:s', $depDate) . "</tr>";
            echo "</td>";
        }

        echo '</table>';
    }

    $query = mssql_query('SELECT Seat_number FROM SEAT');
    if (!mssql_num_rows($query)) {
        echo 'ERROR';
    }
    else
    {
        echo 'Seat number: <select name="seat">';
        while ($row = mssql_fetch_assoc($query)) {
            echo "<option value=" . $row['Seat_number'] . ">" . $row['Seat_number'] . "</option>" ;
        }
        echo "</select>";

    }
}
?>
<br>
<span>Number of Checked bags: <input type="number" id="bags" name="checkedBags" onchange="changePrice()">
<br>
<p id="price">Total Price: $150,00</p>

<br>
<button type="submit" name="pay" value"pay" class="btn btn-success" style="float: right">Pay Ticket</button>
</form>
</body>



</html>