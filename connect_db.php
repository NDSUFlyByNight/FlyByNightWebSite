<?php # CONNECT TO MSSQL DATABASE.

$server = 'msdb.cs.ndsu.nodak.edu';

// Connect to MSSQL
$link = mssql_connect($server, 'csci413f15_1', 'TzcDdWc567drKA');


if (!$link) {
    die('Something went wrong while connecting to MSSQL');
}
mssql_select_db('csci413f15_1', $link);

?>