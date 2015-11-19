
<?php # HOME PAGE.
 session_start();
# display header section.
if ( !isset( $_SESSION[ 'userID' ] ) ){
    include('header.html');
}
else{
    include('logged_header.php');
}

echo '
</div>
    <div class="jumbotron">
	<h1>
	    Fly By Night
	</h1>
    </div>
</div>';
?>
<form id="serachFlighs" action="">
	<div id="searchFlight">
		<div class="col-xs-3">
			<span>From: <input class="form-control" type="text" name="from" id="from" required><span>
		</div>
		<div class="col-xs-3">
			<span>To: <input class="form-control" type="text" name="from" id="from" required><span>
		</div>
		<div class="clearfix"></div>
		<div class="row col-xs-3">
			<span>Depart Date: <input class="form-control" type="text" name="departDate" id="departDate" required><span>
		</div>
		<div class="col-xs-3">
			<span>Return Date: <input class="form-control" type="text" name="returnDate" id="returnDate" required><span>
		</div>
		<div class="col-xs-2">
			<br>
			<button type="submit" name="searchBtn" value"search" class="btn btn-success">Search Flights</button>
		</div>
	<div>
</form>		

