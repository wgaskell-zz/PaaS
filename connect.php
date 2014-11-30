<?php
$connection = mysql_connect('localhost', '1020198', 'wayne2013');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('db1020198');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
