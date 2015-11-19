
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
<script type="text/javascript" src="js/reserve.js"></script>

<body>
	<form class="form-inline" method="post">
        <br />
		<div class="input-group input-group-sm">
            <div id="searchFlight">
                <div class="col-xs-3">
                    <span>Flight Date: <input class="form-control" type="text" name="flightDate" id="flightDate" required><span>
                </div>
                <div class="col-xs-3">
                    <span>Flight Number: <input class="form-control" type="text" name="from" id="from" required><span>
                </div>
                <div class="col-xs-2">
                    <br>
                    <button type="submit" name="checkBtn" value"search" class="btn btn-success">View Status</button>
                </div>
            <div>
		</div>
	</form>

</html>
