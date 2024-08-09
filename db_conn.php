<?php

$sname= "localhost";
$username= "root";
$password = "";

$database_name = "auction";

$conn = mysqli_connect($sname, $username, $password, $database_name);

if (!$conn) {
	echo "Connection failed!";
}