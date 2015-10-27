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
          <li><a href="index.php">Nyheter</a></li>
          <li><a href="index.php">Plater</a></li>
          <li><a href="index.php">Konserter</a></li>
          <li><a href="index.php">Min side</a></li>
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
            <form method="post" action="formadduser.php"> 
                <br>
                <h1>Registrering av ny bruker:</h1>
    <table width="100%" border="0">
<tr>
<td>Brukernavn (epost-adresse):</td>
<td></td>
<td><input type="email" name="e_mail"></td>
</tr>
<tr>
<td>Passord:</td>
<td></td>
<td><input type="password" name = "passord"></td>
</tr>
<tr>
<td>Fornavn:</td>
<td></td>
<td><input type="text" name = "fornavn"></td>
</tr>
<tr>
<td>Etternavn:</td>
<td></td>
<td><input type="text" name = "etternavn"></td>
</tr>


</table>
    <br><br><br>
    <input type="submit" name="formSubmit" value="Registrere">  <input type="Reset"        name="formReset" value="Nullstill"> 

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
