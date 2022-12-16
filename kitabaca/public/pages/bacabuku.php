<?php
session_start();
include("../database.php");
if (!isset($_SESSION['pengguna'])) {
   echo "<script>location='login.php'</script>";
}
$id = $_GET['id'];
$judul = $_GET['judul'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <script src="https://cdn.tailwindcss.com"></script>
   <title>Baca Buku</title>
</head>

<body class="w-4/5 mx-auto mt-24 mb-8">
   <h1 class="text-2xl font-medium text-gray-800 uppercase mb-6"><?php echo $_GET['judul']; ?></h1>
   <?php

   echo "<iframe src='" . "../assets/pdf/" . 'pdf' . ".pdf'" . " width=\"100%\" style=\"height:100vh\"></iframe>";

   ?>
</body>

</html>