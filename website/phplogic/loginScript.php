<?php
session_start();
include_once('/connection.php');
$e_mail = $_POST['e_mail'];
$password = $_POST['password'];

if($e_mail&&$password)
{
	$cursorType = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
	$sqlString = "SELECT e_mail, passord FROM bruker WHERE e_mail=(?) AND passord=(?) AND utype!=(?)";
	$params = array($e_mail,$password,4);
	$query = sqlsrv_query($conn,$sqlString,$params,$cursorType);
	$numRows = sqlsrv_num_rows($query);
	
	if($numRows != 0)
	{
		$_SESSION['epost'] = $e_mail;
		echo $_SESSION['epost'];
		header('Location: /index.php');
	}
	else
	{
		$missmatch = "missmatch";
	header("Location: /login.php?error=".$missmatch);
	}
	
}
else
{
	$missmatch = "missmatch";
	header("Location: /login.php?error=".$missmatch);
}
?>