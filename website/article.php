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

<!---------------------------------Content Item starts here-------------------------------------------->
<?php

//$serverName = "(local)"; // eller "(local)"
//$connectionInfo = array( "Database"=>"musikkavis", "UID"=>"user", "PWD"=>"password", "CharacterSet"=>"UTF-8" );
//$conn = sqlsrv_connect( $serverName, $connectionInfo );
//if( $conn === false ) {
//    die( print_r( sqlsrv_errors(), true));
//}

$aid = $_GET["id"];

        $tsql = "SELECT * FROM artikkel where artikkelID = $aid";
        $sideqget  = "SELECT TOP 4 * FROM artikkel order by artikkelID desc";

$stmt = sqlsrv_query( $conn, $tsql);
$sidefget = sqlsrv_query( $conn, $sideqget);

if ( $stmt === false ) {
   echo "Error in statement preparation/execution.\n";
   die( print_r( sqlsrv_errors(), true));
}

sqlsrv_fetch( $stmt );
$articleID = sqlsrv_get_field( $stmt, 0 );
$tittel = sqlsrv_get_field( $stmt, 1 );
$tekst = sqlsrv_get_field( $stmt, 2 );
$ingress = sqlsrv_get_field( $stmt, 3 );
$bildeURL = sqlsrv_get_field( $stmt, 4 );


if ( $tittel === false ) {
die( print_r( sqlsrv_errors(), true ));
}


if ( $tittel === false ) {
   die( print_r( sqlsrv_errors(), true ));
}
echo '<h1>' . $tittel . '</h1>'; 
echo '<img src="'.$bildeURL.'">';
echo '<h4>' . $ingress . '</h4>';
echo '<p>' . $tekst . '</p>'; 


?>

<form method="post" action="formaddcoment.php<?php echo '?id='.$aid;?>"> 
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


<!------------------------------------------Comment section-------------------------------------->
<?php
$qget2 = "SELECT TOP 10 * FROM kommentar WHERE artikkelID = ".$aid."order by kommentarID desc" ;
$fget2 = sqlsrv_query( $conn, $qget2);
if ( $fget2 === false ) {
   echo "Error in statement preparation/execution.\n";
   die( print_r( sqlsrv_errors(), true));
}
while( $row2 = sqlsrv_fetch_array( $fget2, SQLSRV_FETCH_ASSOC)){
		
$comentID2 = $row2['kommentarID'];//sqlsrv_get_field( $stmt, 0 );
$tittel2 = $row2['tittel'];//sqlsrv_get_field( $stmt, 1 );
$tekst2 = $row2['tekst'];//sqlsrv_get_field( $stmt, 2 );

$commenterGet = sqlsrv_query($conn,"SELECT e_mail FROM kommentar_bruker WHERE kommentarID = ".$comentID2." AND kommentar_forfatter = 'true'");
if ( $commenterGet === false ) {
   echo "Error in statement preparation/execution.\n";
   die( print_r( sqlsrv_errors(), true));
}

sqlsrv_fetch( $commenterGet );
$userMail = sqlsrv_get_field( $commenterGet, 0);

if ( $tittel2 === false ) {
   die( print_r( sqlsrv_errors(), true ));
}
	echo '<div class = commentfield>';

echo '<h2>'.$tittel2.'</h1>'; 
echo '<h4>'.$tekst2.'</h4>';
echo '<p> Skrevet av '.$userMail. '</p>';
echo '</div>';
}
?>
<!------------------------------------------End of Comment section------------------------------->
<!------------------------------------------And ends here---------------------------------------->
 
<?php content();//Also contains a refference to the separate sidebar file ?>
</html>
