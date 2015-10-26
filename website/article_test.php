<?php session_start();
include_once('connection.php'); ?>
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
          <li class="current"><a href="index.html">Forsiden</a></li>
          <li><a href="index.html">Nyheter</a></li>
          <li><a href="index.html">Plater</a></li>
          <li><a href="index.html">Konserter</a></li>
          <li><a href="index.html">Min side</a></li>
        </ul>
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
        
            <?php

//$serverName = "(local)"; // eller "(local)"
//$connectionInfo = array( "Database"=>"musikkavis", "UID"=>"user", "PWD"=>"password", "CharacterSet"=>"UTF-8" );
//$conn = sqlsrv_connect( $serverName, $connectionInfo );
//if( $conn === false ) {
//    die( print_r( sqlsrv_errors(), true));
//}

$id = 49;

        $tsql = "SELECT * FROM artikkel where artikkelID = $id";

$stmt = sqlsrv_query( $conn, $tsql);

if ( $stmt === false ) {
   echo "Error in statement preparation/execution.\n";
   die( print_r( sqlsrv_errors(), true));
}

sqlsrv_fetch( $stmt );

$articleID = sqlsrv_get_field( $stmt, 0 );
$tittel = sqlsrv_get_field( $stmt, 1 );
$tekst = sqlsrv_get_field( $stmt, 2 );
$ingress = sqlsrv_get_field( $stmt, 3 );
$bildeURL = sqlsrv_get_field( $stmt, 4 );

if ( $tittel === false ) {
   die( print_r( sqlsrv_errors(), true ));
}
echo '<h1>' . $tittel . '</h1>'; 
echo '<img src="'.$bildeURL.'">';
echo '<h4>' . $ingress . '</h4>';
echo '<p>' . $tekst . '</p>'; 

sqlsrv_close( $conn);
?>
        
        
        
        </div><!--close content_item-->
	    <div class="sidebar_container">
		  <div class="sidebar">
            <div class="sidebar_item">
              <h2>Latest Blog</h2>
			  <h4>March 2012</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
		  	  <div class="button_small">
		        <a href="#">Read more</a>
		      </div><!--close button_small-->
            </div><!--close sidebar_item-->
          </div><!--close sidebar-->
		  <div class="sidebar">
            <div class="sidebar_item">
              <h2>Latest Blog</h2>
			  <h4>March 2012</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
		  	  <div class="button_small">
		        <a href="#">Read more</a>
		      </div><!--close button_small-->
            </div><!--close sidebar_item-->
          </div><!--close sidebar-->
		  <div class="sidebar">
            <div class="sidebar_item">
              <h2>Latest Blog</h2>
			  <h4>March 2012</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
		  	  <div class="button_small">
		        <a href="#">Read more</a>
		      </div><!--close button_small-->
            </div><!--close sidebar_item-->
          </div><!--close sidebar-->
         </div><!--close sidebar_container-->
         <br style="clear:both;" />
      </div><!--close content-->
    </div><!--close site_content-->
    <div id="footer">
	  <div id="footer_content">
          Copyright Tungrocken 2015. Alle rettigheter. | <a href="contact.html">Kontakt oss</a> | <a href="index.html">Administrator</a>
      </div><!--close footer_content-->
    </div><!--close footer-->
  </div><!--close main-->
  <div class="container_footer">&nbsp;</div>
  <p style="float: left;padding: 0;">&nbsp;</p>
</body>
</html>
