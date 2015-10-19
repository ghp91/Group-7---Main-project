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
          <li><a href="index_template.php">Nyheter</a></li>
          <li><a href="index_template.php">Plater</a></li>
          <li><a href="index_template.php">Konserter</a></li>
          <li><a href="index_template.php">Min side</a></li>
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
		
		
		<!-- Formstuffs -->
		<?php echo $_SESSION['epost'];?>
		<form method="post" action="loginScript.php"> 
		</table>
			<br />
			<hr />        
			<br /> 
			<br /> 
			<table width="400" border="0">
			<tr>
				<td>e_mail:</td>
				<td></td>
				<td><input type="text" name="e_mail"></td>
			</tr>
			<tr>
				<td> passord:</td>
			<td></td>
				<td><input type="password" name = "password"></td>
			</tr>
		</table>

		</fieldset>
		<br />
		<br /> 
		<hr />
		<br />
		<br />            
		<input type="submit" name="formSubmit" value="Submit">  <input type="Reset"name="formReset" value="Reset"> 
		<!-- End of formstuffs -->
		
		
		
		
          <h1>Tittel på artikkel</h1>
          <h4>This standards compliant, simple, fixed width website template is released as an 'open source' design
              (under the Creative Commons Attribution 3.0 Licence), which means that you are free to download and
              use it for anything you want (including modifying and amending it).</h4><br>
          <h3>Undertittel</h3>
          <p>This website template uses the fancybox jquery tool to enhance the website, click on the image to the right to see. </p>
          <p>Ut tincidunt, ante vel fermentum iaculis, turpis sem pulvinar diam, sit amet ullamcorper nibh dui ac nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos:</p>
          <p>Vestibulum tempus urna vitae neque vehicula sit amet tristique felis ultrices. Phasellus eu laoreet mauris. Integer sit amet ante nec ipsum euismod hendrerit et eget sapien. Duis velit ante, semper nec dapibus adipiscing, pellentesque vitae orci. Etiam adipiscing, justo ut faucibus placerat, neque libero accumsan ipsum, non pellentesque ligula nibh id justo. Aenean tellus nisl, bibendum vitae sollicitudin id, faucibus ut mi.</p>
          <p>Vestibulum tempus urna vitae neque vehicula sit amet tristique felis ultrices. Phasellus eu laoreet mauris. Integer sit amet ante nec ipsum euismod hendrerit et eget sapien. Duis velit ante, semper nec dapibus adipiscing, pellentesque vitae orci. Etiam adipiscing, justo ut faucibus placerat, neque libero accumsan ipsum, non pellentesque ligula nibh id justo. Aenean tellus nisl, bibendum vitae sollicitudin id, faucibus ut mi.</p>
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