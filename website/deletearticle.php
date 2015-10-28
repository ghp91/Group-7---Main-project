<?php
session_start();
include_once('connection.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
  <title>Tungrocken</title>
  <meta name="description" content="Musikkavisen Tungrocken" />
  <meta name="keywords" content="musikk, rock, tungrock, heavy, metal, gitar, konsert, anmeldelser, nyheter" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="icon" type="image/ico" href="images/favicon.ico"> 
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>

</head>

<body>
  <div id="main">
    <div id="header">
	  <div id="menubar">
        <ul class="lavaLampWithImage" id="lava_menu">
          <li class="current"><a href="index.php">Forsiden</a></li>
          <li><a href="nyheter.php">Nyheter</a></li>
          <li><a href="plater.php">Plater</a></li>
          <li><a href="konserter.php">Konserter</a></li>
          <li><a href="minside.php">Min side</a></li> 
        </ul>
			<?php
			if((isset($_SESSION['epost'])))
			{
				 echo '<font color = white>'.'logget inn som '.$_SESSION['epost']." ".'</font>'.'<a color =""white" href="/logout.php">Logg ut</a>';
			}
			else
			{
				 echo '<font>'.'<a href="/login.php">Logg inn</a>'.'/'.'<a href="/adduser.php">Register</a>'.'</font>';
			}
			?>
	  </div><!--close menubar-->
    </div><!--close header-->

    <div class="container_header"><p>&nbsp;</p></div>
      <div id="banner">
		<div id="banner_content">
		</div><!--close banner_content-->
      </div><!--close banner-->
    <div id="site_content">
      <div id="content">
        <div class="content_item">
            <form method="post" action="formdeletearticle.php"> 
                <br>
                <h1>Slette artikkel:</h1>
   <tr>
<table><td>Velg artikkel: <br></td>

<td>

	<select id="artikkelID" input name="artikkelID">
 <?php
 $sql = "SELECT artikkelID, tittel FROM artikkel";
 $stmt = sqlsrv_query( $conn, $sql );
 if( $stmt === false) {
     die( print_r( sqlsrv_errors(), true) );
 }

 while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
       echo '<option value="'.$row['artikkelID'].'">'."ID: ".$row['artikkelID']." - ".$row['tittel'].'</option>';
 }

 sqlsrv_close( $conn);
 ?>
 </select></td>
 </tr>
</table>
<br />
<hr />        
<br /> 


</fieldset>

           
<input type="submit" name="formSubmit" value="Slett">  <input type="Reset"        name="formReset" value="Nullstill"> 
</form> 

        </div><!--close content_item-->
	    
         <br style="clear:both;" />
      </div><!--close content-->
    </div><!--close site_content-->
    <div id="footer">
	  <div id="footer_content">
          Copyright Tungrocken 2015. Alle rettigheter. | <a href="contact.php">Kontakt oss</a> | <a href="admin.php">Administrator</a>
      </div><!--close footer_content-->
    </div><!--close footer-->
  </div><!--close main-->
  <div class="container_footer">&nbsp;</div>
  <p style="float: left;padding: 0;">&nbsp;</p>
</body>
</html>