<?php

$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "gym-ya";
$koneksi = new mysqli($host, $db_user, $db_pass, $db_name);
if ($koneksi->connect_error){
	die("error");
}
?>
