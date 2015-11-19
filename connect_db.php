<?php # CONNECT TO MySQL DATABASE.

# Connect  on 'localhost' for user 'mike' with password 'easysteps' to database 'site_db'.
$dbc = @mysqli_connect ( 'msdb.cs.ndsu.nodak.edu', 'csci413f15_1', 'TzcDdWc567drKA', 'csci413f15_1' )

# Otherwise fail gracefully and explain the error. 
OR die ( mysqli_connect_error() ) ;

# Set encoding to match PHP script encoding.
mysqli_set_charset( $dbc, 'utf8' ) ;
?>