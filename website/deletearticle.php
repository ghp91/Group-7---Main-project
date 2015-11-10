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
            <form method="post" action="/phplogic/formdeletearticle.php"> 
                <br>
                <h1>Slette artikkel:</h1>
   <tr>
<table><td>Velg artikkel: <br></td>

<td>

	<select id="artikkelID" input name="artikkelID">
 <?php
 $sql = "SELECT artikkelID, tittel FROM artikkel";
 $stmt = sqlsrv_query( $conn, $sql );
 if( $stmt === false) {
     die( print_r( sqlsrv_errors(), true) );
 }

 while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
       echo '<option value="'.$row['artikkelID'].'">'."ID: ".$row['artikkelID']." - ".$row['tittel'].'</option>';
 }

 ?>
 </select></td>
 </tr>
</table>
<br />
<hr />        
<br /> 


</fieldset>

           
<input type="submit" name="formSubmit" value="Slett">  <input type="Reset"        name="formReset" value="Nullstill"> 
</form> 
<!------------------------------------------And ends here---------------------------------------->
 
<?php content();//Also contains a refference to the separate sidebar file ?>
</html>
