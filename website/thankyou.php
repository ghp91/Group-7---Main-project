<?php
session_start();
include_once('/phplogic/connection.php');
include_once('/structure/header.php');
include_once('/structure/content.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<?php headTag();?>

<!---------------------------------Content Item starts here-------------------------------------------->
<div id="site_content">
  <div id="content">
    <div class="content_item">
      <br><img src="images/gratulerer.jpg" width="300" height="50" alt=""/><br>
      <p>
      <h4>Du har nå tatt steget og entret det gode selskap hos oss her i Tungrocken!
      <br>Vi ønsker deg hjertelig velkommen!</h4><br></p>
      Vi håper og tror at du kommer til å bli fornøyd med valget du nå har gjort.
      <p><br><br><img src="images/hand.jpg" width="248" height="400" alt=""/></p>
</div><!--close content_item-->
    <br style="clear:both;" />
  </div><!--close content-->
</div><!--close site_content-->
<!------------------------------------------And ends here---------------------------------------->

<?php content();//Also contains a refference to the separate sidebar file ?>
</html>
