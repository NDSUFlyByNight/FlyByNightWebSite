<?php
session_start();

if ( !isset( $_SESSION[ 'userID' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

include('logged_header.php');
    
?>
