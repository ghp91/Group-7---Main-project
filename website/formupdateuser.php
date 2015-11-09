<?php
session_start();
include_once('/phplogic/connection.php'); 
include_once('/phplogic/restrictAccess.php');
include_once('/phplogic/compare.php'); 

if(comparePasswords($_POST['passord'],$_POST['passord2']))
{
$query = "UPDATE bruker
SET passord = '".$_POST['passord']."'
WHERE e_mail = '".$_GET['epost']."'";

$stmt = sqlsrv_query($conn,$query);

if ( $stmt === false ) {
   echo "Error in statement preparation/execution.\n";
   die( print_r( sqlsrv_errors(), true));
} else{
	//echo "Rows affected: ".sqlsrv_rows_affected( $stmt )."\n";
        header("Location: minside.php");    
}

sqlsrv_fetch( $stmt );
}
else
{
	$missmatch = "missmatch";
	header("Location: minside.php?error=".$missmatch);
}
?>