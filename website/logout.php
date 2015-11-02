<?php
session_start();
include_once('/phplogic/connection.php');
if (isset($_SESSION['epost'])) {
$_SESSION = array();
}
session_destroy();
header('Location: login.php');

?>