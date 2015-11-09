<?php 
session_start();
include_once('/phplogic/connection.php');
include_once('/structure/header.php');
include_once('/structure/content.php');
include_once('/structure/articlecontent.php');
include_once('/structure/listComments.php');
include_once('/structure/addComment.php');
include_once('/phplogic/restrictAccess.php');
if(isAny()){}
else if(isNoob())
{
	header('Location: minside.php');
}
else
{
	header('Location: login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<?php headTag();?>

<!---------------------------------Content Item starts here-------------------------------------------->

<?php articleContent();?>

<form method="post" action="formaddcoment.php<?php $aid = $_GET["id"]; echo '?id='.$aid;?>"> 
               
<?php addComment();?>

<!------------------------------------------Comment section-------------------------------------->

<?php listComments();?>

<!------------------------------------------End of Comment section------------------------------->
<!------------------------------------------And ends here---------------------------------------->
 
<?php content();//Also contains a refference to the separate sidebar file ?>
</html>
