<?php
// ToDo: Put your details here Dan
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cards";

$conn = new mysqli($servername, $username, $password, $dbname);
/*
if ($conn->connect_error) {
 	die("Connect Failed: ".$conn->connect_error);

 }
 else{
 	echo "Connected Sucessfully";
 }
 */