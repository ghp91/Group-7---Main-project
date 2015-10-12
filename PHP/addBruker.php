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



$e_mail = "g@email.com";
$passord = "skriv123";
$fornavn = "Frank";
$etternavn = "Walander";
$registered =date('Y-m-d G:i:s');
$sub_expire = date('Y-m-d G:i:s');
$futureDate=date('Y-m-d', strtotime('+1 year'));



$query = "INSERT INTO bruker  (e_mail
		   ,passord
           ,fornavn
           ,etternavn
           ,registered
           ,sub_expire) VALUES   
           (?,?,?,?,?,?)";
		   
		   $params = array($e_mail,$passord,$fornavn,$etternavn,$registered,$futureDate);
$stmt = sqlsrv_query($conn,$query,$params);


$query = "INSERT INTO bruker  (e_mail
		   ,passord
           ,fornavn
           ,etternavn
           ,registered
           ,sub_expire) VALUES   
           (?,?,?,?,?,?)";
		   
		   $params = array($e_mail,$passord,$fornavn,$etternavn,$registered,$sub_expire);
$stmt = sqlsrv_query($conn,$query,$params);


if( $stmt )
{
     echo "Row successfully inserted.\n";
}
else
{
     echo "Row insertion failed.\n";
     die( print_r( sqlsrv_errors(), true));
}

/* Free statement and connection resources. */
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn);
?>
	
	</body>

</html>

