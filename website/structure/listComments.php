
<?php
include_once('/phplogic/connection.php');
include_once('/phplogic/restrictAccess.php');
function listComments(){
	global $conn;
	

$aid = $_GET["id"];
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
if($userMail === $_SESSION['epost']){
	echo'<form method="post" action="deleteOwnComment.php?kid='.$comentID2.'&pid='.$aid.'">'; 
	echo '<input type="submit" name="formSubmit" value="Slett kommentar">';
}
else if(isAdmin()){
	echo'<form method="post" action="deleteOwnComment.php?kid='.$comentID2.'&pid='.$aid.'">'; 
	echo '<input type="submit" name="formSubmit" value="Slett kommentar">';
}
echo '</div>';
}
}?>





