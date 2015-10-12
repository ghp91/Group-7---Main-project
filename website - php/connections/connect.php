<?php
$myServer = "MYSTICVOICE\MYSERVER";
$myUser = "user";
$myPass = "password";
$myDB = "musikkavis";

//connect to database
$dbhandle = mssql_connect($myServer, $myUser, $myPass)
	or die("Couldn't connect to MSSQL");
echo "Connected to MSSQL";

//select a database
$selected = mssql_select_db($myDB, $dbhandle)
	or die("Couldn't select the specified database");
?>
