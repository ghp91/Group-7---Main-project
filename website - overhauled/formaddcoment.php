
<?php
session_start();
include_once('/phplogic/connection.php'); 
?>
	
<?php
//print_r($_POST);
$datePosted =date('Y-m-d G:i:s');
$query = "INSERT INTO kommentar
           (tittel
           ,tekst
           ,artikkelID
		   ,dateComented)
     VALUES
           (?,?,?,?); SELECT SCOPE_IDENTITY()";
		  
		   
		   $params = array($_POST['tittel'],$_POST['tekst'],$_POST['aid'],$datePosted);
$stmt = sqlsrv_query($conn,$query,$params);
echo $_POST['aid'];

if ( $stmt === false ) {
   echo "Error in statement preparation/execution.\n";
   die( print_r( sqlsrv_errors(), true));
} else{
echo "Rows affected: ".sqlsrv_rows_affected( $stmt )."\n";}
//---------------------------artikkelRelasjon-----------------------------//
$epost = $_SESSION['epost'];
$author = true;
$like = false;
sqlsrv_next_result($stmt); 
sqlsrv_fetch($stmt); 
$kommentarID = sqlsrv_get_field($stmt, 0);
echo $kommentarID;
//$kommentarID = intval(sqlsrv_query($conn,"SELECT TOP 1 kommentarID FROM kommentar ORDER BY convert(datetime, dateComented, 103) DESC"));
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



if ( $stmt2 === false ) {
   echo "Error in statement preparation/execution.\n";
   die( print_r( sqlsrv_errors(), true));
} else{
	echo "Rows affected: ".sqlsrv_rows_affected( $stmt )."\n";
	$location = "Location: article.php?id=".$_POST['aid'];
        header($location);
    
}

sqlsrv_fetch( $stmt );
?>