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
$registeredtime = $registered->format('Y-m-d'); 
echo '<p>' .("Registrert dato :"). $registeredtime . '</p>';
$subexpire = $sub_expire->format('Y-m-d'); 
echo '<p>'.("Abonnement utgår :") . $subexpire . '</p>';

?>




<!---------------------------------Content Item starts here-------------------------------------------->
            <form method="post" action="formupdateuser.php"> 
                <br>
                <h1>Oppdatering av bruker</h1>
    <table width="100%" border="0">
	<?php if(isAdmin()){ echo '<td>Velg artikkeltype: </td>
<td>
	<select id="utype" input name="utype">';
 $sql = "select utype FROM bruker";
 $stmt = sqlsrv_query( $conn, $sql );
 if( $stmt === false) {
     die( print_r( sqlsrv_errors(), true) );
 }

 while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
       echo '<option value="'.$row['utype'].'">'.$row['utype'].'</option>';
	}
}
?>
	
 </select></td>
<tr>
<td>Nytt brukernavn(epost-adresse):</td>
<td></td>
<td><input type="email" name="e_mail"></td>
</tr>
<tr>
<td>Nytt Passord:</td>
<td></td>
<td><input type="password" name = "passord"></td>
</tr>
<tr>
<td>Endre fornavn:</td>
<td></td>
<td><input type="text" name = "fornavn"></td>
</tr>
<tr>
<td>Endre etternavn:</td>
<td></td>
<td><input type="text" name = "etternavn"></td>
</tr>


</table>
    <br><br><br>
    <input type="submit" name="formSubmit" value="Oppdater">  <input type="Reset"        name="formReset" value="Nullstill"> 

</form>

<!------------------------------------------And ends here---------------------------------------->
 
<?php content();//Also contains a refference to the separate sidebar file ?>
</html>