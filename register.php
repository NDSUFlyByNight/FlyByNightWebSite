<?php # DISPLAY COMPLETE REGISTRATION PAGE.


include ( 'header.html' ) ;

# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('connect_db.php');

  # Initialize an error array.
  $errors = array();

  # Check for a first name.
  if ( empty( $_POST[ 'first_name' ] ) )
  { $errors[] = 'Enter your first name.' ; }
  else
  { $fn = mysqli_real_escape_string( $dbc, trim( $_POST[ 'first_name' ] ) ) ; }

  # Check for a last name.
  if (empty( $_POST[ 'last_name' ] ) )
  { $errors[] = 'Enter your last name.' ; }
  else
  { $ln = mysqli_real_escape_string( $dbc, trim( $_POST[ 'last_name' ] ) ) ; }

  # Check for an email address:
  if ( empty( $_POST[ 'email' ] ) )
  { $errors[] = 'Enter your email address.'; }
  else
  { $e = mysqli_real_escape_string( $dbc, trim( $_POST[ 'email' ] ) ) ; }
  
  # Check for a phone:
  if ( empty( $_POST[ 'phone' ] ) )
  { $errors[] = 'Enter your phone number.'; }
  else
  { $ph = mysqli_real_escape_string( $dbc, trim( $_POST[ 'phone' ] ) ) ; }
  

  # Check for a password and matching input passwords.
  if ( !empty($_POST[ 'pass1' ] ) )
  {
    if ( $_POST[ 'pass1' ] != $_POST[ 'pass2' ] )
    { $errors[] = 'Passwords do not match.' ; }
    else
    { $p = mysqli_real_escape_string( $dbc, trim( $_POST[ 'pass1' ] ) ) ; }
  }
  else { $errors[] = 'Enter your password.' ; }

  # Check if email address already registered.
  if ( empty( $errors ) )
  {
    $q = "SELECT userID FROM user_table WHERE email='$e'" ;
    $r = @mysqli_query ( $dbc, $q ) ;
    if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'Email address already registered. <a href="login.php">Login</a>' ;
  }

  # On success register user inserting into 'users' database table.
  if ( empty( $errors ) )
  {
    $q = "INSERT INTO user_table (first_name, last_name, phone, email, adress, zip_code, user_password) VALUES ('$fn', '$ln', '$ph', '$e', '$a', '$zip', SHA1('$p'))";
    $r = @mysqli_query ( $dbc, $q ) ;
    if ($r)
    { echo '<h1>Registered!</h1><p>You are now registered.</p><p><a href="login.php">Login</a></p>'; }

    # Close database connection.
    mysqli_close($dbc);

    # Display footer section and quit script:
    # include ('footer.html');
    exit();
  }
  # Or report errors.
  else
  {
    echo '<h1>Error!</h1><p id="err_msg">The following error(s) occurred:<br>' ;
    foreach ( $errors as $msg )
    { echo " - $msg<br>" ; }
    echo 'Please try again.</p>';
    # Close database connection.
    mysqli_close( $dbc );
  }
}
?>

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
					 <label for="inputFirstName3" class="col-sm-2 control-label" >First Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputFirstName3" placeholder="Enter your first name" name="first_name">
					</div>
				</div>
				<div class="form-group">
					 <label for="inputLastName3" class="col-sm-2 control-label" >Last Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputLastName3" placeholder="Enter your last name" name="last_name">
					</div>
				</div>
				<div class="form-group">
					 <label for="inputEmail3" class="col-sm-2 control-label" >Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Enter email" name="email">
					</div>
				</div>
                <div class="form-group">
					 <label for="inputPhone3" class="col-sm-2 control-label" >Phone</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputPhone3" placeholder="Enter your phone" name="phone">
					</div>
				</div>
				<div class="form-group">
					 <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass1">
					</div>
				</div>
				<div class="form-group">
					 <label for="inputPassword3" class="col-sm-2 control-label">Confirm your password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3_2" placeholder="Confirm as above" name="pass2">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 <button type="submit" class="btn btn-default">Register</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


