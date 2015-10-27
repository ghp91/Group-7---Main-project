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
            <form method="post" action="formaddarticle.php"> 
                <br>
                <h1>Legge til ny artikkel:</h1>
   <tr>
<table><td>Velg artikkeltype: </td>
<td>

 



	<select id="a_typeID" input name="a_typeID">
 <?php
 $sql = "SELECT a_typeID FROM artikkel_type";
 $stmt = sqlsrv_query( $conn, $sql );
 if( $stmt === false) {
     die( print_r( sqlsrv_errors(), true) );
 }

 while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
       echo '<option value="'.$row['a_typeID'].'">'.$row['a_typeID'].'</option>';
 }

 sqlsrv_close( $conn);
 ?>
 </select></td>



<!-- <select id="a_typeID" input name="a_typeID">                  
                <option value="konserter">konserter</option>
                <option value="nyheter">nyheter</option>
                <option value="plater">plater</option>                 
    </select></td> -->
 </tr>

</table>
<br />
<hr />        
<br /> 
<br /> 
<table width="400" border="0">
<tr>
<td>Tittel:</td>
<td></td>
<td><input type="text" name="tittel" size="82"></td>
</tr>
<tr>
<td>Ingress:</td>
<td></td>
<td><textarea rows="5" cols="80" name="ingress" ></textarea></td>
</tr>
<tr>
<td>Tekst:</td>
<td></td>
<td><textarea rows="20" cols="80" name="tekst" ></textarea></td>
</tr>
<tr>
<td>Bilde-URL:</td>
<td></td>
<td><input type="text"  size="82" name ="bildeurl"></td>
</tr>
<tr>
</table>

</fieldset>
<br />
<br /> 
<hr />
<br />
<br />            
<input type="submit" name="formSubmit" value="Legg inn">  <input type="Reset"        name="formReset" value="Nullstill"> 
</form> 

        </div><!--close content_item-->
	    
         <br style="clear:both;" />
      </div><!--close content-->
    </div><!--close site_content-->
    <div id="footer">
	  <div id="footer_content">
          Copyright Tungrocken 2015. Alle rettigheter. | <a href="contact.php">Kontakt oss</a> | <a href="index.php">Administrator</a>
      </div><!--close footer_content-->
    </div><!--close footer-->
  </div><!--close main-->
  <div class="container_footer">&nbsp;</div>
  <p style="float: left;padding: 0;">&nbsp;</p>
</body>
</html>
