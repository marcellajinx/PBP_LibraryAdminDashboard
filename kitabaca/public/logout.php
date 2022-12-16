<?php
function url()
{
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}

include('database.php');
// if (isset($_SESSION['admin'])) {
//   $mail = $_SESSION['admin']['email'];
//   mysqli_query($conn, "UPDATE admin SET token=null WHERE email='$mail'");
// }
mysqli_query($conn, 'UPDATE admin SET token=NULL WHERE email="hil@gmail.com" OR email="hit@gmail.com"');

unset($_SESSION['admin']); // hanya delete variable "name" saja
unset($_SESSION['user']); // hanya delete variable "name" saja
session_destroy(); // delete SEMUA variable data user tersebut
header('Location: http://localhost/kitabaca/public/pages/login.php');
