<?php 
include_once('connection.php');
	if(isset($_SESSION['epost']))
	{$epost = $_SESSION['epost'];
	$params = array($epost);
	$tsql = "SELECT * FROM bruker WHERE e_mail ='".$epost."'";
	$stmt = sqlsrv_query( $conn, $tsql);
	if ( $stmt === false ) {

	}
	if(sqlsrv_fetch($stmt) === false)
	{
		echo'not working';
		die(print_r(sqlsrv_errors(),true));
	}
	
	if(isset($_SESSION['epost'])){$_SESSION['utype'] = sqlsrv_get_field( $stmt, 6 );}
		
	}
	
	function isAny()
	{
		if(isAdmin())
			return true;
		else if(isJournalist())
			return true;
		else if(isSubscribed())
			return true;
		else
			return false;
		
	}
	
	function isAdmin()
	{
		
		if(isset($_SESSION['epost']))
		{
			if($_SESSION['utype'] === 1)
			{return true;}
			else{return false;}
		}
		else{return false;}
	}
	function isJournalist()
	{
		if(isset($_SESSION['epost']))
		{
			if($_SESSION['utype'] === 2)
			{return true;}
			else{return false;}
		}
		else{return false;}
	}
	function isSubscribed()
	{
	if(isset($_SESSION['epost']))
		{
			if($_SESSION['utype'] === 3)
			{return true;}
			else{return false;}
		}
		else{return false;}
	}
?>