
<?php
include_once('/phplogic/connection.php');
function addComment(){
	echo ' 
	
	<br>
                <h1>Legg til en kommentar:</h1>
   <tr>
<table>
<br />
<hr />        
<br /> 
<br /> 
<table width="400" border="0">
<tr>
<td>Tittel:</td>
<td></td>
<td><input type="text" name="tittel" size="78"></td>
</tr>
<tr>
<td>Tekst:</td>
<td></td>
<td><textarea rows="10" cols="80" name="tekst" ></textarea></td>
</tr>
<tr>
</table>


<br /> 
<hr />

<br />            
<input type="submit" name="formSubmit" value="Legg inn">  <input type="Reset"        name="formReset" value="Nullstill"> 
</form> 
<br />
';}?>






