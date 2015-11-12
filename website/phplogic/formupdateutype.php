<?php
session_start();
include_once('/connection.php'); 
include_once('/restrictAccess.php');
include_once('/passwordScripts.php');
if($_GET['bol'] === true)
{$utype = 4;}
else
{$utype = $_POST['utype'];}
	$query = "UPDATE bruker
	SET utype = '".$utype."'
	WHERE e_mail = '".$_GET['epost']."'";

	$stmt = sqlsrv_query($conn,$query);
	sqlsrv_fetch( $stmt );

	if ( $stmt === false ) {
	   echo "Error in statement preparation/execution.\n";
	   die( print_r( sqlsrv_errors(), true));
	} else{
			header("Location: /edituser.php?epost=".$_GET['epost']);    
	}

?>