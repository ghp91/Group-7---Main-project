<?php
include_once('/phplogic/connection.php');
function userContent($aid){
	global $conn;
	$tsql = "SELECT * FROM bruker where e_mail = '".$aid."'";
	$stmt = sqlsrv_query( $conn, $tsql);


	if ( $stmt === false ) {
	   echo "Error in statement preparation/execution.\n";
	   die( print_r( sqlsrv_errors(), true));
	}

	sqlsrv_fetch( $stmt );
	$epost = sqlsrv_get_field( $stmt, 0 );
	$passord = sqlsrv_get_field( $stmt, 1 );
	$fornavn = sqlsrv_get_field( $stmt, 2 );
	$etternavn = sqlsrv_get_field( $stmt, 3 );
	$registrert = sqlsrv_get_field( $stmt, 4 );
	$subscriptiondato = sqlsrv_get_field( $stmt, 5 );
	$utype = sqlsrv_get_field( $stmt, 6 );
	if($utype === 1)
	{$brukertype = "Admin";}
	if($utype === 2)
	{$brukertype = "Journalist";}
	if($utype === 3)
	{$brukertype = "Abonent";}
	if($utype === 0)
	{$brukertype = "Gjest";}
	if($utype === 4)
	{$brukertype = "Deaktivert";}
	
	
	if ( $epost === false ) {
	die( print_r( sqlsrv_errors(), true ));
	}
	echo '<h1> E-post: ' . $epost . '</h1>'; 
	echo '<h4> Fornavn: '.$fornavn.'</h4>';
	echo '<h4> Etternavn: ' . $etternavn . '</h4>';
	echo '<h4> Bruker type: ' . $brukertype . "<form method=post action=/phplogic/formupdateutype.php?epost=".$epost.">
	<select id=utype input name=utype>";
 $sql = "SELECT DISTINCT utype FROM bruker";
 $stmt = sqlsrv_query( $conn, $sql );
 if( $stmt === false) {
     die( print_r( sqlsrv_errors(), true) );
 }

 while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	 if($row['utype'] != 4)
	 {
       echo '<option value="'.$row['utype'].'">';
	   if($row['utype'] === 0)
	   {
		   echo 'Gjest';
	   }
	   else if($row['utype'] === 1)
	   {
		   echo 'Admin';
	   }
	   else if($row['utype'] === 2)
	   {
		   echo 'Journalist';
	   }
	   else if($row['utype'] === 3)
	   {
		   echo 'Abonent';
	   }
	   echo '</option>';
	 }
	}
	$value = "value";
	echo '<input type="submit" name="formSubmit" value="Endre"></form></h4>'.
	
	'<form method=post action=/phplogic/formupdateutype.php?epost='.$epost.'&bol='.$value.'>
	<input type="submit" name="formSubmit" value="Slett bruker"></form>';
	
}?>


