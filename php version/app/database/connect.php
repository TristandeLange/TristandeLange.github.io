<?php

$host = 'localhost';
$user = 'root';
$pass = 'BernardusGerardusLange19';
$db_name = 'blog';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
	die('Database connection error: ' . $conn->connect_error);
}else
{
	echo "DB Connection Success";
}
