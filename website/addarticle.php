<?php 
session_start();
include_once('/phplogic/connection.php');
include_once('/structure/header.php');
include_once('/structure/content.php');

include_once('/phplogic/restrictAccess.php');
if(isAdmin()){}
else if(isJournalist()){}
else{header('Location: login.php');}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<?php headTag();?>

<!---------------------------------Content Item starts here-------------------------------------------->
 <form method="post" action="/phplogic/formaddarticle.php"> 
                <br>
                <h1>Legge til ny artikkel:</h1>
   <tr>
<table><td>Velg artikkeltype: </td>
<td>

 



	<select id="a_typeID" input name="a_typeID">
 <?php
 $sql = "SELECT a_typeID FROM artikkel_type";
 $stmt = sqlsrv_query( $conn, $sql );
 if( $stmt === false) {
     die( print_r( sqlsrv_errors(), true) );
 }

 while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
       echo '<option value="'.$row['a_typeID'].'">'.$row['a_typeID'].'</option>';
 }

 ?>
 </select></td>

 </tr>

</table>
<br />
<hr />        
<br /> 
<br /> 
<table width="400" border="0">
<tr>
<td>Tittel:</td>
<td></td>
<td><input type="text" name="tittel" size="82"></td>
</tr>
<tr>
<td>Ingress:</td>
<td></td>
<td><textarea rows="5" cols="80" name="ingress" ></textarea></td>
</tr>
<tr>
<td>Tekst:</td>
<td></td>
<td><textarea rows="20" cols="80" name="tekst" ></textarea></td>
</tr>
<tr>
<td>Bilde-URL:</td>
<td></td>
<td><input type="text"  size="82" name ="bildeurl"></td>
</tr>
<tr>
</table>

</fieldset>
<br />
<br /> 
<hr />
<br />
<br />            
<input type="submit" name="formSubmit" value="Legg inn">  <input type="Reset"        name="formReset" value="Nullstill"> 
</form> 

<!------------------------------------------And ends here---------------------------------------->
 
<?php content();//Also contains a refference to the separate sidebar file ?>
</html>
