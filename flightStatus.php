
<?php
session_start();

if ( !isset( $_SESSION[ 'userID' ] ) ){
    include('header.html');
}
else{
    include('logged_header.php');
}
?>

To find one on time: look up FBN053
<br>To find one delayed: look up FBN314
<style type="text/css">
#startDate, #endDate {
      background-color: white;
      cursor: pointer;
}
</style>
<script type="text/javascript" src="js/reserve.js"></script>

<body>
	<form class="form-inline" method="post">
        <br />
		<div class="input-group input-group-sm">
            <div id="searchFlight">
				<div class ="col=xs=3">
					<span>Flight Number: <input class="form=control" type="text" name ="from" id="from" required></span>
</div>
                <div class="col-xs-2">
                    <button type="submit" name="checkBtn" value"search" class="btn btn-success">View Status</button>
                </div>
            <div>
		</div>
	</form>


<?php
function findFlights ($flight)
{
	//Connects to database
	require('connect_db.php');

	$query = mssql_query('SELECT * FROM FLIGHT');

	if (!mssql_num_rows($query)) {
    	echo 'No records found';
	}
else
{
//Creates tables and fills it with flight numbers and their delays
	echo '<br><br><br><br><table border = 1>';
	echo '<th>Flight Number</th><th>Delayed</th><th>Depature Time</th>';
	while ($row = mssql_fetch_assoc($query)){
	$i =0;
//Check if flight is what is looking for

if (strcmp ($row['Flight_number'],$flight) == 0)
{
		$i = $i + 1;
		echo '<tr><td>'. $row['Flight_number']. '</td>';
if(strcmp($row['Delayed'], '1') != 0)
{
		echo '<td>'. 'On Time'. '</td>';
}
else
{
		echo '<td>'. 'Delayed'. '</td>';
}
echo '<td>'. $row['Depature_time'].'</td></tr>';
//^End else
}
}
//^ends while
echo '</table>';
}
}
//Gets info from user on flight wantings to look up

if (isset($_POST['from'])) {
		$date = print_r ($_POST['from'],true);
    FindFlights($date);

}

?>
