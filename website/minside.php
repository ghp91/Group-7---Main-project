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
    
    <p>fdsfosdfosd</p>
<?php content();//Also contains a refference to the separate sidebar file ?>
</html>
