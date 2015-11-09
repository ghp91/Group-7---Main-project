<?php 
session_start();
include_once('/phplogic/connection.php');
include_once('/structure/header.php');
include_once('/structure/content.php');

include_once('/phplogic/restrictAccess.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<?php headTag();?>

<!---------------------------------Content Item starts here-------------------------------------------->
            <form method="post" action="formadduser.php"> 
                <br>
                <h1>Registrering av ny bruker:</h1>
    <table width="100%" border="0">
	<?php if(isAdmin()){ echo '<td>Velg Brukertype: </td>
<td>
	<select id="utype" input name="utype">';
 $sql = "SELECT DISTINCT utype FROM bruker";
 $stmt = sqlsrv_query( $conn, $sql );
 if( $stmt === false) {
     die( print_r( sqlsrv_errors(), true) );
 }

 while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
       echo '<option value="'.$row['utype'].'">';
	   if($row['utype'] === 0)
	   {
		   echo 'ikke betalende bruker';
	   }
	   else if($row['utype'] === 1)
	   {
		   echo 'admin';
	   }
	   else if($row['utype'] === 2)
	   {
		   echo 'journalist';
	   }
	   else if($row['utype'] === 3)
	   {
		   echo 'subscriber';
	   }
	   echo '</option>';
	}
}
?>
	
 </select></td>
<tr>
<td>Brukernavn (epost-adresse):</td>
<td></td>
<td><input type="email" name="e_mail"></td>
</tr>
<tr>
<td>Passord:</td>
<td></td>
<td><input type="password" name = "passord"></td>
</tr>
<tr>
<td>Bekreft passord:</td>
<td></td>
<td><input type="password" name = "passord2"></td>
</tr>
<tr>
<td>Fornavn:</td>
<td></td>
<td><input type="text" name = "fornavn"></td>
</tr>
<tr>
<td>Etternavn:</td>
<td></td>
<td><input type="text" name = "etternavn"></td>
</tr>
</table>
<?php
if(isset($_GET['error']))
{	echo "<strong></br><font color = red>Pass på at passordene er like! </font></strong>";	}


?>	
    <br><br><br>
    <input type="submit" name="formSubmit" value="Registrere">  <input type="Reset"        name="formReset" value="Nullstill"> 

</form>

<!------------------------------------------And ends here---------------------------------------->
 
<?php content();//Also contains a refference to the separate sidebar file ?>
</html>
