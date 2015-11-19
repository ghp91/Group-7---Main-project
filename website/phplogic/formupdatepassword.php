<?php
session_start();
include_once('/connection.php'); 
include_once('/restrictAccess.php');
include_once('/passwordScripts.php');
if(checkPass($_POST['gpassord']))
	{
	if(comparePasswords($_POST['passord'],$_POST['passord2'])&&($_POST['passord']!=""))
	{
	$query = "UPDATE bruker
	SET passord = '".$_POST['passord']."'
	WHERE e_mail = '".$_GET['epost']."'";

	$stmt = sqlsrv_query($conn,$query);

	if ( $stmt === false ) {
	   echo "Error in statement preparation/execution.\n";
	   die( print_r( sqlsrv_errors(), true));
	} else{
			header("Location: /minside.php?ok");    
	}
	sqlsrv_fetch( $stmt );
	}
	else
	{
		header("Location: /minside.php?missmatch");
	}
}
else
{	
	header("Location: /minside.php?wrongpass");
}
?>