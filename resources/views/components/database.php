<?php
$hostname = 'localhost';
$username = 'root';
$password = '123456';
$database = 'kitakita';

$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
   //session_destroy();
}
