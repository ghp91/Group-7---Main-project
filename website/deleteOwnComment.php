

<?php
include_once('/phplogic/connection.php');
global $conn;
$kID = $_GET["kid"];
$pID = $_GET["pid"];

        $deleteKommentar = "delete FROM kommentar where kommentarID = ".$kID;
		
		$deleteKommentar_bruker = "DELETE FROM kommentar_bruker WHERE kommentarID = " .$kID;
		$dtmt = sqlsrv_query( $conn, $deleteKommentar_bruker);
$stmt = sqlsrv_query( $conn, $deleteKommentar);
if ( $stmt === false ) {
   die( print_r( sqlsrv_errors(), true ));

}
$location = "Location: article.php?id=".$pID;
        header($location);
?>