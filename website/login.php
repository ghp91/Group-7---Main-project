<?php 
session_start();
include_once('/phplogic/connection.php');
include_once('/structure/header.php');
include_once('/structure/content.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<?php headTag();?>

<!---------------------------------Content Item starts here-------------------------------------------->
		<h1> Logg inn </h1>
		
		<form method="post" action="/phplogic/loginScript.php"> 
		</table>
			<br />
			<hr />        
			<br /> 
			<br /> 
			<table width="400" border="0">
			<tr>
				<td>Epost/Brukernavn:</td>
				<td></td>
				<td><input type="text" name="e_mail"></td>
			</tr>
			<tr>
				<td> Passord:</td>
			<td></td>
				<td><input type="password" name = "password"></td>
			</tr>
		</table>

		</fieldset>
		<br />
		<?php
if(isset($_GET['error']))
{	echo "<strong></br><font color = red>Feil Brukernavn eller passord!</font></strong></br>";	}

?>	
		<br /> 
		<hr />
		<br />
		<br />  

		<input type="submit" name="formSubmit" value="Logg inn">  <input type="Reset"name="formReset" value="Nullstill"> 

<!------------------------------------------And ends here---------------------------------------->
 
<?php content();//Also contains a refference to the separate sidebar file ?>
</html>
