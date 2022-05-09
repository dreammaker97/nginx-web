<?php
error_reporting(0);
ini_set('display_errors', 0);
$ip = $_SERVER["SERVER_ADDR"];
$servername = substr($ip,0,strlen($ip)-1)."2:3306";
$username = "root";
$password = "1";
$conn = new mysqli($servername, $username, $password);

if ($conn) {
 echo "MYSQLi installed.";
}
else {
 echo "MYSQLi not found.";
}
?>
