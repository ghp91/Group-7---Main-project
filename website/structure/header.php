<?php
function headTag(){
	include_once('/phplogic/restrictAccess.php');
	echo 
	'<head>
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
          <li><a href="konserter.php">Konserter</a></li>';
		  if((isAdmin())||(isJournalist()))
		  {
			echo '<li>'.'<a href="admin.php">Administrator</a>'.'</li>';
			}
          else
		  { 
				echo '<li>'.'<a href="minside.php">Min side</a>'.'</li>';} 
        echo '</ul>';
			
			if((isset($_SESSION['epost'])))
			{
				 echo '<font color = white>'.'Logget inn som '.$_SESSION['epost']." ".'</font>'.'<br>'.'<a color =""white" href="/phplogic/logout.php">Logg ut</a>';
			}
			else
			{
				 echo '<font color = white>'.'<a href="/login.php">Logg inn</a>'.'   &nbsp; &nbsp;  '.'<a href="/adduser.php">Registrere</a>'.'</font>';
			}
			
	  echo '</div><!--close menubar-->
    </div><!--close header-->
	<div class="container_header"><p>&nbsp;</p></div>
      <div id="banner">
		<div id="banner_content">
		</div><!--close banner_content-->
      </div><!--close banner-->
    <div id="site_content">
      <div id="content">
        <div class="content_item">';}?>