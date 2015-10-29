<?php
include_once('/phplogic/restrictAccess.php');
include_once('/phplogic/connection.php');
include_once('sidebar.php');
function content(){
	echo '
	</div><!--close content_item-->';
		
		sidebar();
		
         echo '<br style="clear:both;" />
      </div><!--close content-->
    </div><!--close site_content-->
    <div id="footer">
	  <div id="footer_content">
          Copyright Tungrocken 2015. Alle rettigheter. | <a href="contact.php">Kontakt oss</a>'; if(isAdmin() || isJournalist()){echo ' | <a href="admin.php">Administrator</a>
      </div><!--close footer_content-->
    </div><!--close footer-->
  </div><!--close main-->
  <div class="container_footer">&nbsp;</div>
		  <p style="float: left;padding: 0;">&nbsp;</p>
</body>';}}?>