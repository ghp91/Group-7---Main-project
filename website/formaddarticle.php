

	
<?php
$serverName = "(local)"; // eller "(local)"
$connectionInfo = array( "Database"=>"musikkavis", "UID"=>"user", "PWD"=>"password", "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

print_r($_POST);

$query = "INSERT INTO artikkel
           (tittel
           ,tekst
           ,ingress
           ,bildeurl
           ,a_typeID)
     VALUES
           (?,?,?,?,?)";
		  
		   
		   $params = array($_POST['tittel'],$_POST['tekst'],$_POST['ingress'],$_POST['bildeurl'],$_POST['a_typeID']);
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
	