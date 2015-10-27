
<?php
session_start();
include_once('connection.php'); 
?>
	
<?php
//print_r($_POST);

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
	//echo "Rows affected: ".sqlsrv_rows_affected( $stmt )."\n";
        header("Location: index.php");
    
}

sqlsrv_fetch( $stmt );



sqlsrv_close( $conn);
?>
	