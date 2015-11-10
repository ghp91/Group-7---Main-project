<?php
include_once('/phplogic/connection.php');
include_once('/phplogic/restrictAccess.php');
function listUsers()
{
	global $conn;
$qget = "SELECT e_mail,fornavn,etternavn FROM bruker order by e_mail DESC" ;
$fget = sqlsrv_query( $conn, $qget);
if ( $fget === false ) {
   echo "Error in statement preparation/execution.\n";
   die( print_r( sqlsrv_errors(), true));
}
echo '<div class = commentfield><table>';
while( $row = sqlsrv_fetch_array( $fget, SQLSRV_FETCH_ASSOC))
{
			
	$e_mail = $row['e_mail'];//sqlsrv_get_field( $stmt, 0 );
	$fornavn = $row['fornavn'];//sqlsrv_get_field( $stmt, 1 );
	$etternavn = $row['etternavn'];//sqlsrv_get_field( $stmt, 2 );

	if ( $e_mail === false ) {
	   die( print_r( sqlsrv_errors(), true ));
	}
	echo '<tr><td>';
	echo '<a href="edituser.php?id='.$e_mail.'">'.$e_mail.''.'</a></td></div>	
	<td>'.$fornavn.'</td>
	<td>'.$etternavn.'</td>'; 
	echo '</tr>';
	}
	echo '</table></div>';
}
?>