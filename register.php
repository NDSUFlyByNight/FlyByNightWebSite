
<?php
//missing anything to do with a password in the stored procedure
//function CreateCustomer($first_name, $middle_name, $last_name, $phone, $email, $birth_date, $address, $city, $state, $country, $zipcode) {
session_start();

if ( !isset( $_SESSION[ 'userID' ] ) ){
    include('header.html');
}
else{
    include('logged_header.php');
}

//Check DB connection
//requires('connect_db.php');
//Dont know what to do for this part
?>

<body>
<!-- Display body section with sticky form. -->
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
            <div class="alert alert-success alert-dismissable">
				<h4>
					Registration Form
				</h4> <strong>IMPORTANT</strong> Fill out all fields to register an account and make your reserves.
			</div>
			<form class="form-horizontal" role="form" action="register.php" method="post">
                <div class="form-group">
					 <label for="first_name" class="col-sm-2 control-label" >First Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="first_name" placeholder="Enter your first name" name="first_name">
					</div>
				</div>
				<div class="form-group">
					 <label for="middle_name" class="col-sm-2 control-label" >Middle Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="middle_name" placeholder="Enter your middle name" name="middle_name">
					</div>
				</div>
				<div class="form-group">
					 <label for="last_name" class="col-sm-2 control-label" >Last Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="last_name" placeholder="Enter your last name" name="last_name">
					</div>
				</div>
				<div class="form-group">
					 <label for="birth_date" class="col-sm-2 control-label" >Birth Date</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="birth_date" placeholder="Enter your birth date" name="birth_date">
					</div>
				</div>
				
				<div class="form-group">
					 <label for="email" class="col-sm-2 control-label" >Email</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email" placeholder="Enter your email" name="email">
					</div>
				</div>
                <div class="form-group">
					 <label for="phone" class="col-sm-2 control-label" >Phone</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="phone" placeholder="Enter your phone" name="phone">
					</div>
				</div>
				 <div class="form-group">
					 <label for="address" class="col-sm-2 control-label" >Address</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="address" placeholder="Enter your address" name="address">
					</div>
				</div> 
				<div class="form-group">
					 <label for="city" class="col-sm-2 control-label" >City</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="city" placeholder="What city do you live in?" name="city">
					</div>
				</div> 
				<div class="form-group">
					 <label for="city" class="col-sm-2 control-label" >State</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="city" placeholder="What state do you live in?" name="city">
					</div>
				</div> 
				<div class="form-group">
					 <label for="country" class="col-sm-2 control-label" >Country</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="country" placeholder="What country do you live in?" name="country">
					</div>
				</div> 
				<div class="form-group">
					 <label for="zipcode" class="col-sm-2 control-label" >Zipcode</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="zipcode" placeholder="Enter your zipcode" name="zipcode">
					</div>
				</div>
				<div class="form-group">
					 <label for="pass1" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="pass1" placeholder="Password" name="pass1">
					</div>
				</div>
				<div class="form-group">
					 <label for="pass2" class="col-sm-2 control-label">Confirm your password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="pass2" placeholder="Confirm as above" name="pass2">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 <button type="submit" class="btn btn-default" value="Register">Register</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>

