<?php 
session_start();
include_once('/phplogic/connection.php');
include_once('/structure/header.php');
include_once('/structure/content.php');

include_once('/phplogic/restrictAccess.php');
if(isAny()){}
else{header('Location: login.php');}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<?php headTag();?>

<h1> Min side </h1>
<p>Her kan du til enhver tid sjekke informasjon om din bruker på Tungrocken</p>
<p>Du kan også endre på informasjonen du har lagt inn</p>

<h3> Din bruker: </h3>
<?php 
	$qsl = "select * FROM bruker where e_mail = '".$_SESSION['epost']."'" ;
	$query = sqlsrv_query($conn, $qsl);
	
	sqlsrv_fetch( $query );
$e_mail= sqlsrv_get_field( $query, 0 );
$passord= sqlsrv_get_field( $query, 1 );
$fornavn= sqlsrv_get_field( $query, 2 );
$etternavn= sqlsrv_get_field( $query, 3 );
$registered= sqlsrv_get_field( $query, 4 );
$sub_expire= sqlsrv_get_field( $query, 5 );

if ( $e_mail === false ) {
die( print_r( sqlsrv_errors(), true ));
}
if ( $e_mail === false ) {
   die( print_r( sqlsrv_errors(), true ));
}

echo '<p>' .("E-post :") . $e_mail . '</p>'; 
echo '<p>' .("Passord :"). $passord . '</p>'; 
echo '<p>' .("Fornavn :"). $fornavn . '</p>'; 
echo '<p>' .("Etternavn :"). $etternavn . '</p>'; 
$registeredtime = $registered->format('d.m.Y'); 
echo '<p>' .("Registrert dato :"). $registeredtime . '</p>';
$subexpire = $sub_expire->format('d.m.Y'); 
echo '<p>'.("Abonnement utgår :") . $subexpire . '</p>';

?>

			<form method="post" action="formupdateuser.php?epost=<?php echo $_SESSION['epost']; ?>">
			<br>
                <h3>Oppdatering av passord:</h3>
<?php 
$sql = "SELECT utype FROM bruker";
$stmt = sqlsrv_query( $conn, $sql );
 if( $stmt === false) {
     die( print_r( sqlsrv_errors(), true) );
 }
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
     
	}

if(isset($_GET['error']))
{	echo "Pass på at passordene er like </br>";	}	?>
<tr>
<td>Nytt Passord:</td>
<td></td>
<td><input type="password" name = "passord"></td>
</tr>
<td></td>
</br>
<td>Bekreft Passord:</td>
<td></td>
<td><input type="password" name = "passord2"></td>
</tr>
<td></td>
</br>

<td><input type="submit" name = "somebutton" value = "Registrer endring"></td>
</tr>
</form>





<!------------------------------------------And ends here---------------------------------------->
 
<?php content();//Also contains a refference to the separate sidebar file ?>
</html>
