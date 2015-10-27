<?php session_start();
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
          <h1>Trenger du å kontakte oss?</h1>
          <h4>Om du skulle ha et spørsmål eller to, ikke vær redd for å kontakte oss.<br />
            Vi ønsker tilbakemeldinger, ros og ris fra dere brukere! </h4>
          <br>
          <p><strong>Vi kan treffes på vår besøksadresse:</strong><br />
            Tungrocken<br />
            Besøksveien 666<br />
            6969 Besøksbygd<br />
            <br />
            <strong>Vår postadresse:</strong><br />
            Tungrocken<br />
            Postboks 666<br />
            6969 Besøksbygd<br />
            <br />
            <strong>Vi kan også nås på telefon:</strong><br />
            Tlf. 666 666 66<br />
            <br />
            <strong>Eller om du heller vil sende oss en epost:</strong><br />
            post@tungrocken.no</p>
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
