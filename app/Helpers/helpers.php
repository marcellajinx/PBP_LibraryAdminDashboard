<?php
function out()
{
  unset($_SESSION['admin']); // hanya delete variable "name" saja
  unset($_SESSION['user']); // hanya delete variable "name" saja
  session_destroy(); // delete SEMUA variable data user tersebut
  // header('location: http://localhost/kitabaca/public/logout.php');
  // echo "<script>window.location.href='http://localhost/kitabaca/public/logout.php';</script>";
  // exit;
}
