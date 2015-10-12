<!DOCTYPE html>

<html>
	<head>
		<title>PHP</title>
	</head>

	<body>
		<p>Hello World</p>
	
<?php

$serverName = "(local)";
$connectionInfo = array( "Database"=>"musikkavis", "UID"=>"sa", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn )
{
     echo "Connection established.\n";
}
else
{
     echo "Connection could not be established.\n";
     die( print_r( sqlsrv_errors(), true));
}

sqlsrv_close( $conn);
?>


	
	</body>

</html>

