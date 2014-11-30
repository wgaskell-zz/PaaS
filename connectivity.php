<?php
$mysql_hostname = "localhost";
$mysql_user = "1020198";
$mysql_password = "wayne2013";
$mysql_database = "db1020198";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>
