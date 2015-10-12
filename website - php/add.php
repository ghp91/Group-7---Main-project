<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
  <title>Tungrocken</title>
  <meta name="description" content="Musikkavisen Tungrocken" />
  <meta name="keywords" content="musikk, rock, tungrock, heavy, metal, gitar, konsert, anmeldelser, nyheter" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
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
	    <div id="contact">
	      <a href="#"><img src="images/icons/twitter.png" alt="Twitter" /></a>
          <a href="#"><img src="images/icons/facebook.png" alt="Facebook" /></a>
	    </div><!--close contact-->
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
            <form>
                <br>
                <h1>Legge til artikkel:</h1>
    <b>Tittel:</b><br><br>
    <input type="text" name="tittel" size="82">
    <br><br>
    <b>Ingress:</b><br><br>
    <textarea rows="5" cols="80" name="ingress" ></textarea>
    <br><br>
    <b>Tekst:</b><br><br>
    <textarea rows="20" cols="80" name="tekst" ></textarea>
    <br><br><br>
    <input type="submit" value="Submit - knappen har ingen funksjon ennå">
</form>

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
          Copyright Tungrocken 2015. Alle rettigheter. | <a href="index.html">Kontakt oss</a> | <a href="index.html">Administrator</a>
      </div><!--close footer_content-->
    </div><!--close footer-->
  </div><!--close main-->
  <div class="container_footer">&nbsp;</div>
  <p style="float: left;padding: 0;">&nbsp;</p>
</body>
</html>