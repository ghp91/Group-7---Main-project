<?php 
include_once('/phplogic/connection.php');
function comparePasswords($password1, $password2)
{
	$result = false;
	if($password1 === $password2)
	{$result = true;}
	return $result;
}

function checkPass($input)
{
	GLOBAL $conn;
	$result = false;
	$cursorType = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
	$sqlString = "SELECT e_mail, passord FROM bruker WHERE e_mail=(?) AND passord=(?)";
	$params = array($_SESSION['epost'],$input);
	$query = sqlsrv_query($conn,$sqlString,$params,$cursorType);
	$numRows = sqlsrv_num_rows($query);
	
	echo $result;
	if($numRows != 0)
	{
		$result = true;
	}
	else
	{
		$result = false;
	}
	return $result;
	
}
 ?>