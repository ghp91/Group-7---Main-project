<?php
include_once('/phplogic/connection.php');
function sidebar(){
	echo '<div class="sidebar_container">
	<div class="sidebar">
            <div class="sidebar_item">
              <h2>Siste saker:</h2>';
			      global $conn;
        $sideqget  = "SELECT TOP 4 * FROM artikkel order by artikkelID desc";
        $sidefget = sqlsrv_query($conn, $sideqget);

              while( $row = sqlsrv_fetch_array( $sidefget, SQLSRV_FETCH_ASSOC)){

                $articleID2 = $row['artikkelID'];//sqlsrv_get_field( $stmt, 0 );
                $tittel2 = $row['tittel'];//sqlsrv_get_field( $stmt, 1 );
                $ingress2 = $row['ingress'];//sqlsrv_get_field( $stmt, 3 );


                echo '<br>'.'<h3>'.'<font color = white>'.$tittel2.'</font>'.'</h3>'; 
                echo '<p>'.'<font color = white>'.$ingress2.'</font>'.'</p>'; 
                echo '<p>'.'<a href="article.php?id='.$articleID2.'">'.'Les mer'.'</a>'.'</p>';
                echo '<hr>';
                }
              
           echo' </div><!--close sidebar_item-->
</div><!--close sidebar-->
</div><!--close sidebar_container-->
';}?>