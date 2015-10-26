<?php
session_start();
include_once('connection.php');
if (isset($_SESSION['epost'])) {
$_SESSION = array();
}
session_destroy();
echo 'du har blitt logget ut';

?>