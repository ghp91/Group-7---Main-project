<?php
session_start();
include_once('/phplogic/connection.php'); 
include_once('/phplogic/restrictAccess.php');
include_once('/phplogic/passwordScripts.php'); 
?>

	
<?php
if(comparePasswords($_POST['passord'],$_POST['passord2'])){
$registered =date('Y-m-d G:i:s');
$futureDate=date('Y-m-d', strtotime('+1 year'));
$utype = 0;
$query = "INSERT INTO bruker  (e_mail
		   ,passord
           ,fornavn
           ,etternavn
           ,registered
           ,sub_expire
		   ,utype) VALUES   
           (?,?,?,?,?,?,?)";
		   if(isAdmin())
		   {
				$params = array($_POST['e_mail'],$_POST['passord'],$_POST['fornavn'],$_POST['etternavn'],$registered,$futureDate,$_POST['utype']);
		   }
		   else{
				$params = array($_POST['e_mail'],$_POST['passord'],$_POST['fornavn'],$_POST['etternavn'],$registered,$futureDate,$utype);
			}
				$stmt = sqlsrv_query($conn,$query,$params);

if ( $stmt === false ) {
   echo "Error in statement preparation/execution.\n";
   die( print_r( sqlsrv_errors(), true));
} else{
	//echo "Rows affected: ".sqlsrv_rows_affected( $stmt )."\n";
        header("Location: thankyou.html");    
}

sqlsrv_fetch( $stmt );
}
else
{
	$missmatch = "missmatch";
	header("Location: adduser.php?error=".$missmatch);
}
?>
	