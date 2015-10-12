

	
<?php

$serverName = "(local)"; // eller "(local)"
$connectionInfo = array( "Database"=>"musikkavis", "UID"=>"test", "PWD"=>"123");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}




$e_mail = "q@email.com";
$passord = "skriv123";
$fornavn = "Frank";
$etternavn = "Walander";
$registered =date('Y-m-d G:i:s');
$futureDate=date('Y-m-d', strtotime('+1 year'));



$query = "INSERT INTO bruker  (e_mail
		   ,passord
           ,fornavn
           ,etternavn
           ,registered
           ,sub_expire) VALUES   
           (?,?,?,?,?,?)";
		   
		   $params = array("e_mail","passord","fornavn","etternavn",$registered,$futureDate);
$stmt = sqlsrv_query($conn,$query,$params);





if ( $stmt === false ) {
   echo "Error in statement preparation/execution.\n";
   die( print_r( sqlsrv_errors(), true));
} else{
	echo "Rows affected: ".sqlsrv_rows_affected( $stmt )."\n";
}

sqlsrv_fetch( $stmt );



sqlsrv_close( $conn);
?>
	