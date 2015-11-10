<?php
session_start();
include_once('/phplogic/connection.php');
include_once('/structure/header.php');
include_once('/structure/content.php');

include_once('/phplogic/restrictAccess.php');
if(isAdmin()){}
else if(isJournalist()){}
else{header('Location: login.php');}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<?php headTag();?>

<!---------------------------------Content Item starts here-------------------------------------------->
<h1>Kontrollpanel</h1>
<p></p>
<?php if(isAdmin()){echo'
          <p><a href="adduser.php"><img src="images/adduser.jpg" width="400" height="150" alt=""/></a>
          <p><br>';
          <p><a href="edituser.php"><img src="images/edituser.jpg" width="400" height="150" alt=""/></a>
          <p><br>';
}?>
          <p><a href="addarticle.php"><img src="images/addarticle.jpg" width="400" height="150" alt=""/></a>
          <p><br>
          <p><a href="deletearticle.php"><img src="images/deletearticle.jpg" width="400" height="150" alt=""/></a>
          <p><br>
<!------------------------------------------And ends here---------------------------------------->

<?php content();//Also contains a refference to the separate sidebar file ?>
</html>
