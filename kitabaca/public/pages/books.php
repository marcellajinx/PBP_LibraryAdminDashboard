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
    <title>Books Page</title>

    <link rel="shortcut icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>

<body>
    <!-- header -->
    <!-- <header class="py-4 shadow-sm bg-white">
        <div class="container flex items-center justify-between">
            <a href="index.html">
                <img src="../assets/images/logo.svg" alt="Logo" class="w-32">
            </a>

            <div class="w-full max-w-xl relative flex">
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
            </div>
        </div>
    </header> -->
    <!-- ./header -->

    <!-- navbar -->
    <nav class="bg-gray-800">
        <div class="container flex px-4 py-4">
            <!-- <div class="px-8 py-4 flex items-center cursor-pointer relative group"> -->
            <div class="kiri">
                <div class="space-x-6 capitalize mt-1">
                    <a href="../../public/index.php" class="text-gray-200 hover:text-white transition">Home</a>
                    <a href="books.php" class="text-gray-200 hover:text-white transition">Books</a>
                    <a href="#" class="text-gray-200 hover:text-white transition">About us</a>
                    <!-- <a href="#" class="text-gray-200 hover:text-white transition">Contact us</a> -->
                </div>
            </div>
            <div class="kanan flex space-x-6">
                <?php
                if (!isset($_SESSION['pengguna'])) {
                ?>
                    <a href="login.php" class="text-gray-200 hover:text-white transition mt-1">Login/Register</a>
                <?php
                } else {
                ?>
                    <div class="user"><?php echo $_SESSION['pengguna']['nama']; ?></div>
                    <a href="logout.php" class="text-gray-200 hover:text-white transition">Logout</a>
                <?php

                }
                ?>
            </div>
        </div>
    </nav>
    <!-- ./navbar -->

    <!-- breadcrumb -->
    <div class="container py-4 flex items-center gap-1">
        <a href="../index.html" class="text-primary text-base">
            <i class="fa-solid fa-house"></i>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
        <p class="text-gray-600 font-medium">Books</p>
        <div class="kanan flex space-x-6"></div>
        <div class="w-full relative flex">
            <span class="absolute left-4 top-3 text-lg text-gray-400">
                <i class="fa-solid fa-magnifying-glass"></i>
            </span>
            <input type="text" name="search" id="search" class="w-full border border-primary border-r-0 pl-9 py-1 pr-1 rounded-l-md focus:outline-none" placeholder="search">
            <button class="bg-primary border border-primary text-white px-8 rounded-r-md hover:bg-transparent hover:text-primary transition">Search</button>
        </div>
    </div>
    </div>
    <!-- ./breadcrumb -->

    <!-- shop wrapper -->
    <div class="container grid grid-cols-3 gap-6 pt-4 pb-16 items-start">

        <!-- products -->
        <div class="col-span-3">
            <!-- <div class="flex items-center mb-4">
                <select name="sort" id="sort"
                    class="w-44 text-sm text-gray-600 py-3 px-4 border-gray-300 shadow-sm rounded focus:ring-primary focus:border-primary">
                    <option value="">Default sorting</option>
                    <option value="price-low-to-high">Price low to high</option>
                    <option value="price-high-to-low">Price high to low</option>
                    <option value="latest">Latest product</option>
                </select>

                <div class="flex gap-2 ml-auto">
                    <div
                        class="border border-primary w-10 h-9 flex items-center justify-center text-white bg-primary rounded cursor-pointer">
                        <i class="fa-solid fa-grip-vertical"></i>
                    </div>
                    <div
                        class="border border-gray-300 w-10 h-9 flex items-center justify-center text-gray-600 rounded cursor-pointer">
                        <i class="fa-solid fa-list"></i>
                    </div>
                </div>
            </div> -->
            <div class="grid grid-cols-5 gap-6">
                <?php
                $kategori = mysqli_query($conn, "SELECT * FROM buku");
                if (mysqli_num_rows($kategori) > 0) {
                    while ($row = mysqli_fetch_array($kategori)) {
                ?>
                        <div class="bg-white shadow rounded group">
                            <div class="relative">
                                <img src="<?= $row['cover']; ?>" alt="product 1" class="w-full foto-height">
                                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                        justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition" title="view product">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                    <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-4 pb-3 px-4 deskripsi">
                                <a href="detail_book.php?id=<?php echo $row['id']; ?>&nama=<?php echo $row['judul']; ?>">
                                    <h4 class="font-medium text-md mb-2 text-gray-800 hover:text-primary transition"><?php echo $row['judul'] ?></h4>
                                </a>
                                <div class="flex items-baseline mb-1 space-x-2">
                                    <!-- <p class="text-xl text-primary font-semibold">$45.00</p> -->
                                    <p class="text-sm text-gray-400"><?php echo $row['penulis'] ?></p>
                                </div>
                                <div class="flex">
                                    <!-- <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div> -->

                                    <div class="text-xs text-gray-500">2</div><br>
                                    <div class="text-xs text-gray-500 ml-3">(<?php echo $row['stok'] ?>)</div>
                                </div>
                            </div>
                            <button type="button" class="block w-full py-2 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary" data-bs-toggle="modal" data-bs-target="#borrow">Borrow
                            </button>
                            <div class="modal fade" id="borrow" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="borrowLabel" aria-hidden="true">
                                <div class="modal-dialog dialog-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5>borrow</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Baca Buku</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="py-1 px-1 text-center text-white bg-secondary border border-primary rounded-b hover:bg-transparent hover:text-white" data-bs-dismiss="modal">Kembali</button>
                                            <a href="<?= 'bacabuku.php?id=' . $row['id'] . '&judul=' . $row['judul'] . '"'; ?> class=" py-1 px-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary" name="submit" value="baca 1 menit" onclick="myFunction()">baca 1 menit</a>
                                            <a href="<?= 'bacabuku.php?id=' . $row['id'] . '&judul=' . $row['judul'] . '"'; ?> class=" py-1 px-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary" name="submit" value="baca 7 hari" onclick="myFunction()">baca 7 hari</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                <?php
                    }
                } ?>
            </div>

        </div>
        <nav aria-label="Page navigation example">
            <ul class="flex">
                <li>
                    <a href="#" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
        <!-- ./products -->
    </div>
    <div>

    </div>



    <!-- ./shop wrapper -->

    <!-- footer -->
    <!-- <footer class="bg-white pt-16 pb-12 border-t border-gray-100">
        <div class="container grid grid-cols-3">
            <div class="col-span-1 space-y-8 mr-2">
                <img src="../assets/images/logo.svg" alt="logo" class="w-30">
                <div class="mr-2">
                    <p class="text-gray-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, hic?
                    </p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-gray-500"><i
                            class="fa-brands fa-facebook-square"></i></a>
                    <a href="#" class="text-gray-400 hover:text-gray-500"><i
                            class="fa-brands fa-instagram-square"></i></a>
                    <a href="#" class="text-gray-400 hover:text-gray-500"><i
                            class="fa-brands fa-twitter-square"></i></a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fa-brands fa-github-square"></i>
                    </a>
                </div>
            </div>

            <div class="col-span-2 grid grid-cols-2 gap-8">
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Solutions</h3>
                        <div class="mt-4 space-y-4">
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Analitycs</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Commerce</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Insights</a>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Support</h3>
                        <div class="mt-4 space-y-4">
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Pricing</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Documentation</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Guides</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">API Status</a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Solutions</h3>
                        <div class="mt-4 space-y-4">
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Analitycs</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Commerce</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Insights</a>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Support</h3>
                        <div class="mt-4 space-y-4">
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Pricing</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Documentation</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Guides</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">API Status</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- ./footer -->

    <!-- copyright -->
    <div class="bg-gray-800 py-4">
        <div class="text-white text-center">&copy; KitaBaca - 2022
            <!-- <div>
                <img src="assets/images/methods.png" alt="methods" class="h-5">
            </div> -->
        </div>
    </div>
    <!-- ./copyright -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="assets/js/datatables-simple-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
</body>

</html>