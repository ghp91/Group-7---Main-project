
<?php
session_start();
include_once('/phplogic/connection.php'); 
?>
	
<?php
$qget1 = "SELECT kommentarID FROM kommentar WHERE artikkelID = ".$_POST['artikkelID'];
$fget1 = sqlsrv_query( $conn, $qget1);
if ( $fget1=== false ) {
   echo "Error in statement preparation/execution.\n";
   die( print_r( sqlsrv_errors(), true));
}


while( $row1 = sqlsrv_fetch_array( $fget1, SQLSRV_FETCH_ASSOC)){
		
$comentID1 = $row1['kommentarID'];
//---------------------------------------------------------------------------------
$qget2 = "SELECT KommentarID FROM kommentar_bruker" ;
$fget2 = sqlsrv_query( $conn, $qget2);

if ( $fget2 === false ) {
   echo "Error in statement preparation/execution.\n";
   die( print_r( sqlsrv_errors(), true));
}

while( $row2 = sqlsrv_fetch_array( $fget2, SQLSRV_FETCH_ASSOC)){
		
$comentID2 = $row2['kommentarID'];//sqlsrv_get_field( $stmt, 0 );
	if ($commentID2 === $commentID1)
	{
		$deleteComment = "DELETE FROM kommentar_bruker WHERE kommentarID = ".$comentID1.
		" DELETE FROM kommentar WHERE kommentarID = ".$comentID1;
	
		$stmt3 = sqlsrv_query($conn, $deleteComment);
		if ( $stmt3 === false ) {
			echo "Error in statement preparation/execution.\n in stmt3";
			die( print_r( sqlsrv_errors(), true));
		}
	}
}

}
//----------------------------------------------------------------------------------
$query = "delete artikkel where artikkelID =". $_POST['artikkelID'];
$deleteArtikkel_bruker = "DELETE FROM artikkel_bruker WHERE artikkelID = " .$_POST['artikkelID'];

 $stmt2 = sqlsrv_query($conn, $findComments);

if ( $stmt2 === false ) {
   echo "Error in statement preparation/execution.\n in stmt2";
   die( print_r( sqlsrv_errors(), true));
}

 $stmt1_5 = sqlsrv_query($conn, $deleteArtikkel_bruker);
 
 if ( $stmt1_5 === false ) {
   echo "Error in statement preparation/execution.\n in stmt1_5";
   die( print_r( sqlsrv_errors(), true));
}

$stmt = sqlsrv_query($conn,$query);

if ( $stmt === false ) {
   echo "Error in statement preparation/execution.\n in stmt";
   die( print_r( sqlsrv_errors(), true));
} 
	
        header("Location: deletearticle.php");

?>