<?php 
session_start();
include_once('/phplogic/connection.php');
include_once('/phplogic/listusersscript.php');
include_once('/structure/header.php');
include_once('/structure/content.php');
if(isAdmin())
{}
else{header('Location: index.php');}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<?php headTag();

//---------------------------------Content Item starts here--------------------------------------------//
listUsers();
//------------------------------------------And ends here--------------------------------------//
 content();//Also contains a refference to the separate sidebar file ?>
</html>
