<?php
include_once('/phplogic/connection.php');
function articleContent(){
	global $conn;
$aid = $_GET["id"];

        $tsql = "SELECT * FROM artikkel where artikkelID = ".$aid;


$stmt = sqlsrv_query( $conn, $tsql);


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

echo '<h1>' . $tittel . '</h1>'; 
echo '<img src="'.$bildeURL.'">';
echo '<h4>' . $ingress . '</h4>';
echo '<p>' . $tekst . '</p>'; 
}?>


