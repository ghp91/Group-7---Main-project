<?php 
session_start();
include_once('/phplogic/connection.php');
include_once('/structure/header.php');
include_once('/structure/content.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<?php headTag();

//---------------------------------Content Item starts here--------------------------------------------//
		$qget = "SELECT TOP 10 * FROM artikkel order by artikkelID desc" ;
$fget = sqlsrv_query( $conn, $qget);
if ( $fget === false ) {
   echo "Error in statement preparation/execution.\n";
   die( print_r( sqlsrv_errors(), true));
}
$anumber = 0;
while( $row = sqlsrv_fetch_array( $fget, SQLSRV_FETCH_ASSOC)){
		
$articleID = $row['artikkelID'];//sqlsrv_get_field( $stmt, 0 );
$tittel = $row['tittel'];//sqlsrv_get_field( $stmt, 1 );
$tekst = $row['tekst'];//sqlsrv_get_field( $stmt, 2 );
$ingress = $row['ingress'];//sqlsrv_get_field( $stmt, 3 );
$bildeURL = $row['bildeurl'];//sqlsrv_get_field( $stmt, 4 );

if ( $tittel === false ) {
   die( print_r( sqlsrv_errors(), true ));
}
if($anumber === 0)
{
	echo '<div class = first>';
}
else
{
	echo '<div class = tablebody>';
}
echo '<h1>' .'<a href="article.php?id='.$articleID.'">'.$tittel.'</a>'.'</h1>'; 
if($anumber === 0)
{
	echo '<a href="article.php?id='.$articleID.'">'.'<img src="'.$bildeURL.'">'.'</a>';
}
else{
	echo'<a href="article.php?id='.$articleID.'">'.'<img src="'.$bildeURL.'"' . 'height = "164px" width = "300px"' . '>' . '</a>';
}
echo '<h4>' . $ingress . '</h4>';
echo '</div>';
$anumber++;
}
//------------------------------------------And ends here--------------------------------------//
 content();//Also contains a refference to the separate sidebar file ?>
</html>
