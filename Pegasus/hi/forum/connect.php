<?php 
// Do not change the following two lines.
$teamURL = dirname($_SERVER['PHP_SELF']) . DIRECTORY_SEPARATOR;
$server_root = dirname($_SERVER['PHP_SELF']);

// You will need to require this file in EVERY php file that uses the database.
// Be sure to use $db->close(); at the end of each php file that includes this!

$dbhost = "localhost"; // Most likely will not need to be changed
$dbname = "ssamaro4"; // needs to be changed to your designated table name
$dbuser = "ssamaro4"; // needs to be changed to reflect LAMP server credentials
$dbpass = "suyoTDXMFSo6x"; // needs to be changed to reflect LAMP server credentials

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if(!mysql_connect($dbhost,$dbuser,$dbpass))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db($dbname))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>