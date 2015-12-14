
<?php
session_start();

if ( !isset( $_SESSION[ 'userID' ] ) ){
    include('header.html');
}
else{
    include('logged_header.php');
}
?>
<style type="text/css">
#startDate, #endDate {
      background-color: white;
      cursor: pointer;
}
</style>
<body>

<H1>Thank you for your successful payment!</h1>
<h2>Your flight has been booked</h2>

</body>



</html>