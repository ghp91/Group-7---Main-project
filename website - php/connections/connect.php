<?php

$serverName = "MYSTICVOICE\MYSERVER"; // eller "(local)"
$connectionInfo = array( "Database"=>"musikkavis", "UID"=>"user", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT e_mail FROM bruker";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
      echo $row[0]."<br />";
}

sqlsrv_free_stmt( $stmt);
?>
