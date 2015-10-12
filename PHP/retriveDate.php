<!DOCTYPE html>

<html>
	<head>
		<title>PHP</title>
	</head>

	<body>
		<p>Hello World</p>
	
<?php

$serverName = "(local)"; // eller "(local)"
$connectionInfo = array( "Database"=>"musikkavis", "UID"=>"test", "PWD"=>"123");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}


$tsql = "SELECT registered FROM bruker";

$stmt = sqlsrv_query( $conn, $tsql);

if ( $stmt === false ) {
   echo "Error in statement preparation/execution.\n";
   die( print_r( sqlsrv_errors(), true));
}

sqlsrv_fetch( $stmt );

// retrieve date as string
$date = sqlsrv_get_field( $stmt, 0 );

if ( $date === false ) {
   die( print_r( sqlsrv_errors(), true ));
}

$date_string = date_format( $date, 'jS, F Y' );
echo "Date = $date_string\n";

sqlsrv_close( $conn);
?>
	
	</body>

</html>
