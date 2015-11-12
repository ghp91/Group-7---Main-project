
<?php
session_start();
include_once('/connection.php'); 
?>
	
<?php
$empty = "";
$missmatch = false;
$aid = $_GET["id"];
if(($_POST['tittel'] != $empty) && ($_POST['tekst'] != $empty)){

$datePosted =date('Y-m-d G:i:s');
$query = "INSERT INTO kommentar
           (tittel
           ,tekst
           ,artikkelID
		   ,dateComented)
     VALUES
           (?,?,?,?); SELECT SCOPE_IDENTITY()";		  
		   
		   $params = array($_POST['tittel'],$_POST['tekst'],$aid,$datePosted);
$stmt = sqlsrv_query($conn,$query,$params);



//---------------------------artikkelRelasjon-----------------------------//
$epost = $_SESSION['epost'];
$author = true;
$like = false;
sqlsrv_next_result($stmt); 
sqlsrv_fetch($stmt); 
$kommentarID = sqlsrv_get_field($stmt, 0);
$query2 = "INSERT INTO kommentar_bruker
           (e_mail
		   ,kommentarID
           ,kommentar_forfatter
           ,kommentar_liker)
     VALUES
           (?,?,?,?)";
		  
		   $params2 = array($epost,$kommentarID,$author,$like);
$stmt2 = sqlsrv_query($conn,$query2,$params2);
//---------------------------end of artikkelRelasjon---------------------//


	$location = "Location: /article.php?id=".$aid;
        header($location);


} else{
$location = "Location: /article.php?id=".$aid."&missmatch=true";
        header($location);
}
?>