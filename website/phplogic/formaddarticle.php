
<?php
session_start();
include_once('/connection.php'); 
?>
	
<?php
//print_r($_POST);
$datePosted =date('Y-m-d G:i:s');
$query = "INSERT INTO artikkel
           (tittel
           ,tekst
           ,ingress
           ,bildeurl
           ,a_typeID
		   ,datePosted)
     VALUES
           (?,?,?,?,?,?); SELECT SCOPE_IDENTITY()";
		  
		   
		   $params = array($_POST['tittel'],$_POST['tekst'],$_POST['ingress'],$_POST['bildeurl'],$_POST['a_typeID'],$datePosted);
$stmt = sqlsrv_query($conn,$query,$params);
//---------------------------artikkelRelasjon-----------------------------//
$epost = $_SESSION['epost'];
$author = true;
$like = false;

sqlsrv_next_result($stmt); 
sqlsrv_fetch($stmt); 
$artikkelID = sqlsrv_get_field($stmt, 0);

//$artikkelID = intval(sqlsrv_query($conn,"SELECT IDENT_CURRENT('artikkel')"));//
echo $artikkelID;
$query2 = "INSERT INTO artikkel_bruker
           (e_mail
		   ,artikkelID
           ,artikkel_forfatter
           ,artikkel_liker)
     VALUES
           (?,?,?,?)";
		  
		   $params2 = array($epost,$artikkelID,$author,$like);
$stmt2 = sqlsrv_query($conn,$query2,$params2);
//---------------------------end of artikkelRelasjon---------------------//

if ( $stmt2 === false ) {
   echo "Error in statement preparation/execution.\n";
   die(); //print_r( sqlsrv_errors(), true));
} else{
	echo "Rows affected: ".sqlsrv_rows_affected( $stmt )."\n";
        header("Location: /index.php");
    
}

sqlsrv_fetch( $stmt );
?>
	