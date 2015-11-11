<?php
session_start();
include_once('/connection.php');
include_once('/restrictAccess.php');
include_once('/passwordScripts.php');
?>


<?php
if(comparePasswords($_POST['passord'],$_POST['passord2'])){
$registered =date('Y-m-d G:i:s');
$futureDate=date('Y-m-d', strtotime('+1 year'));
$utype = 0;
$no = "";
$stmt = false;
$query = "INSERT INTO bruker  (e_mail
		   ,passord
           ,fornavn
           ,etternavn
           ,registered
           ,sub_expire
		   ,utype) VALUES
           (?,?,?,?,?,?,?)";
		   if(isAdmin()&&($_POST['e_mail'] !=$no) &&($_POST['passord'] !=$no) &&($_POST['fornavn'] !=$no) &&($_POST['etternavn'] !=$no))
		   {
				$params = array($_POST['e_mail'],$_POST['passord'],$_POST['fornavn'],$_POST['etternavn'],$registered,$futureDate,$_POST['utype']);
		   $stmt = sqlsrv_query($conn,$query,$params);
		   }
		   else if(($_POST['e_mail'] !=$no) &&($_POST['passord'] !=$no) &&($_POST['fornavn'] !=$no) &&($_POST['etternavn'] !=$no)){
				$params = array($_POST['e_mail'],$_POST['passord'],$_POST['fornavn'],$_POST['etternavn'],$registered,$futureDate,$utype);
		   $stmt = sqlsrv_query($conn,$query,$params);
		   }
				

if ( $stmt === false ) {
	if(($_POST['e_mail'] !=$no) &&($_POST['passord'] !=$no) &&($_POST['fornavn'] !=$no) &&($_POST['etternavn'] !=$no))
	{
		$exist= "exist";
		header("Location: /adduser.php?exist=".$exist);
	} else {
   $empty = "empty";
	header("Location: /adduser.php?empty=".$empty);
	}
} else if(isAdmin()){
	$added = "added";
	header("Location: /adduser.php?added=".$added."&e_mail=".$_POST['e_mail']);
} else{
        header("Location: /thankyou.php");
}
sqlsrv_fetch( $stmt );
}
else
{
	$missmatch = "missmatch";
	header("Location: /adduser.php?error=".$missmatch);
}
?>
