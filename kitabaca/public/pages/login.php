<?php
session_start();
include('../database.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ecommerce Tailwind</title>

    <link rel="shortcut icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>

<body>
    <!-- header
    <header class="py-4 shadow-sm bg-white">
        <div class="container flex items-center justify-between">
            <a href="index.html">
                <img src="../assets/images/logo.svg" alt="Logo" class="w-32">
            </a> -->

    <!-- <div class="w-full max-w-xl relative flex">
                <span class="absolute left-4 top-3 text-lg text-gray-400">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <input type="text" name="search" id="search"
                    class="w-full border border-primary border-r-0 pl-12 py-3 pr-3 rounded-l-md focus:outline-none"
                    placeholder="search">
                <button
                    class="bg-primary border border-primary text-white px-8 rounded-r-md hover:bg-transparent hover:text-primary transition">Search</button>
            </div>

            <div class="flex items-center space-x-4">
                <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <div class="text-xs leading-3">Wishlist</div>
                    <div
                        class="absolute right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">
                        8</div>
                </a>
                <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <div class="text-xs leading-3">Cart</div>
                    <div
                        class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">
                        2</div>
                </a>
                <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="text-xs leading-3">Account</div>
                </a>
            </div> -->
    <!-- </div>
    </header> -->
    <!-- ./header -->

    <!-- navbar -->
    <nav class="bg-gray-800">
        <div class="container flex px-4 py-4">
            <!-- <div class="px-8 py-4 flex items-center cursor-pointer relative group"> -->
            <div class="kiri">
                <div class="space-x-6 capitalize mt-1">
                    <a href="../../public/index.php" class="text-gray-200 hover:text-white transition">Home</a>
                    <a href="books.html" class="text-gray-200 hover:text-white transition">Books</a>
                    <a href="#" class="text-gray-200 hover:text-white transition">About us</a>
                    <!-- <a href="#" class="text-gray-200 hover:text-white transition">Contact us</a> -->
                </div>
            </div>
            <div class="kanan flex space-x-6">
                <!-- <a href="" style="margin-top: 3px;"><img src="icons/search.svg"  alt=""></a> -->
                <!-- <div class="w-full relative flex">
                    <span class="absolute left-4 top-3 text-lg text-gray-400">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" name="search" id="search"
                        class="w-full border border-primary border-r-0 pl-9 py-1 pr-1 rounded-l-md focus:outline-none"
                        placeholder="search">
                    <button
                        class="bg-primary border border-primary text-white px-8 rounded-r-md hover:bg-transparent hover:text-primary transition">Search</button>
                </div> -->
                <a href="login.html" class="text-gray-200 hover:text-white transition mt-1">Login/Register</a>
            </div>
        </div>
    </nav>
    <!-- ./navbar -->

    <!-- login -->
    <div class="contain py-16">
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <h2 class="text-2xl uppercase font-medium mb-1">Login</h2>
            <p class="text-gray-600 mb-6 text-sm">
                welcome back customer
            </p>
            <form action="#" method="post" autocomplete="off">
                <div class="space-y-2">
                    <div>
                        <label for="email" class="text-gray-600 mb-2 block">Email address</label>
                        <input type="email" name="email" id="email" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400" placeholder="youremail.@domain.com">
                    </div>
                    <div>
                        <label for="password" class="text-gray-600 mb-2 block">Password</label>
                        <input type="password" name="password" id="password" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400" placeholder="*******">
                    </div>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                        <label for="remember" class="text-gray-600 ml-3 cursor-pointer">Remember me</label>
                    </div>
                    <a href="#" class="text-primary">Forgot password</a>
                </div>
                <div class="mt-4">
                    <input type="submit" name="submit" value="LOGIN" class="block w-full py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">
                </div>
            </form>

            <!-- ./login with -->

            <p class="mt-4 text-center text-gray-600">Don't have account? <a href="register.html" class="text-primary">Register
                    now</a></p>
        </div>
    </div>
    <!-- ./login -->
    <?php

    if (isset($_POST["submit"])) {
        $email = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
        $password = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));

        if ($username != "" && $password != "") {
            $ambil = $conn->query("SELECT * FROM pengguna WHERE email = '$email' AND password = '$password'");
            $ambiladmin = $conn->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
            $akunyangcocok = $ambil->num_rows;
            $akunyangcocok2 = $ambiladmin->num_rows;
            if ($akunyangcocok == 1) {
                $akun = $ambil->fetch_assoc();
                $_SESSION["pengguna"] = $akun;
                echo "<script>location='../index.php';</script>";
            } else if ($akunyangcocok2 == 1) {
                $akun1 = $ambiladmin->fetch_assoc();
                $_SESSION["admin"] = $akun1;
                $token = bin2hex(openssl_random_pseudo_bytes(16));
                $conn->query("UPDATE admin SET token='$token' WHERE email='$email'");
                echo "<script>location='http://localhost/kitabaca2/public/dashboard?token=" . $token . "';</script>";
            } else {
    ?>

                <div class="alert alert-danger alert-dismissible alert-atas">tidak dapat login, Email atau password salah
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>

    <?php
            }
        }
    }
    ?>

    <!-- copyright -->
    <div class="bg-gray-800 py-4">
        <div class="container flex items-center justify-between">
            <p class="text-white">&copy; KitaBaca - 2022</p>
            <div>
                <img src="../assets/images/methods.png" alt="methods" class="h-5">
            </div>
        </div>
    </div>
    <!-- ./copyright -->


</body>

</html>