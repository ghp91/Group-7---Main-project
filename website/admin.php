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
    
    <?php
        $sideqget  = "SELECT TOP 4 * FROM artikkel order by artikkelID desc";
        $sidefget = sqlsrv_query( $conn, $sideqget);
    ?>
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
				 echo '<font color = white>'.'<a href="/login.php">Logg inn</a>'.'/'.'<a href="/adduser.php">Register</a>'.'</font>';
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
          <h1>Kontrollpanel</h1>
          <p></p>
          <p><a href="adduser.php"><img src="images/adduser.jpg" width="400" height="150" alt=""/></a>
          <p><br>
          <p><a href="addarticle.php"><img src="images/addarticle.jpg" width="400" height="150" alt=""/></a>
          <p><br>
          <p><a href="deletearticle.php"><img src="images/deletearticle.jpg" width="400" height="150" alt=""/></a>
          <p><br>
</div><!--close content_item-->
	    <div class="sidebar_container">
                
		  <div class="sidebar">
            <div class="sidebar_item">
              <h2>Siste saker:</h2>
              <?php 
              while( $row = sqlsrv_fetch_array( $sidefget, SQLSRV_FETCH_ASSOC)){

                $articleID2 = $row['artikkelID'];//sqlsrv_get_field( $stmt, 0 );
                $tittel2 = $row['tittel'];//sqlsrv_get_field( $stmt, 1 );
                $ingress2 = $row['ingress'];//sqlsrv_get_field( $stmt, 3 );


                echo '<br>'.'<h3>'.'<font color = white>'.$tittel2.'</font>'.'</h3>'; 
                echo '<p>'.'<font color = white>'.$ingress2.'</font>'.'</p>'; 
                echo '<p>'.'<a href="article.php?id='.$articleID2.'">'.'Les mer'.'</a>'.'</p>';
                echo '<hr>';
                }
                sqlsrv_close( $conn);
              ?>
            </div><!--close sidebar_item-->
          </div><!--close sidebar-->

         </div><!--close sidebar_container-->
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
