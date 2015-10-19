<?php

$serverName = "MYSTICVOICE\MYSERVER"; // eller "(local)"
$connectionInfo = array( "Database"=>"musikkavis", "UID"=>"user", "PWD"=>"password", "CharacterSet"=>"UTF-8" );
$conn = sqlsrv_connect( $serverName, $connectionInfo );	
if( $conn === false ) {
	die( print_r( sqlsrv_errors(), true));
}
?>
