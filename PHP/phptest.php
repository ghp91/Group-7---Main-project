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

$sql = "SELECT registered FROM bruker";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
      echo $row[0]."<br />";
}

sqlsrv_free_stmt( $stmt);








// $serverName = "(local)";
// $connectionInfo = array( "Database"=>"musikkavis", "UID"=>"test", "PWD"=>"123");
// $conn = sqlsrv_connect( $serverName, $connectionInfo);

// if( $conn )
// {
     // echo "Connection established.\n";

// }
// else
// {
     // echo "Connection could not be established.\n";
     // die( print_r( sqlsrv_errors(), true));
// }

// sqlsrv_close( $conn);
?>


	
	</body>

</html>

