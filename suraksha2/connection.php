<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "suraksha";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}/*
else{
	echo "connected";
}*/
?>