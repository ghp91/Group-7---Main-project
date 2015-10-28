
<?php
session_start();
include_once('connection.php'); 
?>
	
<?php
//print_r($_POST);
$query = "delete artikkel where artikkelID =". $_POST['artikkelID']."";
		  
$stmt = sqlsrv_query($conn,$query,$params);

if ( $stmt === false ) {
   echo "Error in statement preparation/execution.\n";
   die( print_r( sqlsrv_errors(), true));
} else{
	
        header("Location: deletearticle.php");
}

sqlsrv_fetch( $stmt );

sqlsrv_close( $conn);
?>
	