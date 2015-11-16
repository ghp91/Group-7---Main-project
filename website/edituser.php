<?php 
session_start();
include_once('/phplogic/connection.php');
include_once('/structure/userContent.php');
include_once('/structure/header.php');
include_once('/structure/content.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<?php headTag();?>

<!---------------------------------Content Item starts here-------------------------------------------->
<a href="index.php">Hjem </a> -> <a href="admin.php">Admin </a> -> <a>edit user</a>
<?php userContent($_GET['epost']); ?>
<!------------------------------------------And ends here---------------------------------------->
 
<?php content();//Also contains a refference to the separate sidebar file ?>
</html>
