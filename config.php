<?php
$ASYRV_WEBROOT = "";
$host = "localhost";
$dbname = 'asyrvdb';
$user = "asyrv";
$pass = "asyrv";
$conn = new mysqli($host,$user,$pass,$dbname);
try {
	$conn1 = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo 'Connection failed'.$e->getMessage();
}
?>
