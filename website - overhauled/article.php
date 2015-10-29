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
<!------------------------------------------And ends here---------------------------------------->
 
<?php content();//Also contains a refference to the separate sidebar file ?>
</html>
