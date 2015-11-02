<?php 
session_start();
include_once('/phplogic/connection.php');
include_once('/structure/header.php');
include_once('/structure/content.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<?php headTag();?>

<!---------------------------------Content Item starts here-------------------------------------------->
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
<!------------------------------------------And ends here---------------------------------------->
 
<?php content();//Also contains a refference to the separate sidebar file ?>
</html>
