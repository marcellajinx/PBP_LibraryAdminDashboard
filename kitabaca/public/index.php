<?php
session_start();
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kitabaca</title>

   <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">
   <link rel="stylesheet" href="assets/css/min.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/main.css">

   <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
   <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/abbba15d4c.js" crossorigin="anonymous"></script>
</head>

<body>

   <!-- navbar -->
   <nav class="bg-gray-800">
      <div class="container flex px-4 py-4">
         <!-- <div class="px-8 py-4 flex items-center cursor-pointer relative group"> -->
         <div class="kiri">
            <div class="space-x-6 capitalize mt-1">
               <a href="index.php" class="text-gray-200 hover:text-white transition">Home</a>
               <a href="pages/books.php" class="text-gray-200 hover:text-white transition">Books</a>
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
            <?php
            if (!isset($_SESSION['pengguna'])) {
            ?>
               <a href="pages/login.php" class="text-gray-200 hover:text-white transition mt-1">Login/Register</a>
            <?php
            } else {
            ?>
               <div class="user"><?php echo $_SESSION['pengguna']['nama']; ?></div>
               <a href="pages/logout.php" class="text-gray-200 hover:text-white transition">Logout</a>
            <?php

            }
            ?>
         </div>
      </div>
   </nav>
   <!-- ./navbar -->

   <!-- banner -->
   <div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url('assets/images/banner-bg.jpg');">
      <div class="container">
         <h1 class="text-6xl text-gray-800 font-medium mb-4 capitalize">
            Lots of Ebooks <br>100% Free
         </h1>
         <p>Welcome to your neighborhood library. We have more than <br>
            50,000 free ebooks waiting to e discoverd</p>
         <div class="mt-12">
            <a href="#" class="bg-primary border border-primary text-white px-8 py-3 font-medium 
                    rounded-md hover:bg-transparent hover:text-primary">Borrow</a>
         </div>
      </div>
   </div>
   <!-- ./banner -->

   <!-- categories -->
   <div class="container py-16">
      <?php
      $kategori = mysqli_query($conn, "SELECT * FROM kategori");
      ?>
      <h2 id="a" class="text-2xl font-medium text-gray-800 uppercase mb-6">borrow by category</h2>
      <div class="grid grid-cols-5 gap-8">
         <div class="relative rounded-sm group">
            <img src="assets/images/category/FiksiPop.jpg" alt="category 1" class="w-full">
            <a href="pages/kategori.php?id_kategori=KT001" class="absolute inset-0 bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Fiksi Populer</a>
         </div>
         <div class="relative rounded-sm group">
            <img src="assets/images/category/pengembangan.jpg" alt="category 1" class="w-full">
            <a href="pages/kategori.php?id_kategori=KT002" class="absolute inset-0 bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Pengembangan Diri</a>
         </div>
         <div class="relative rounded-sm group">
            <img src="assets/images/category/agama.jpg" alt="category 1" class="w-full">
            <a href="pages/kategori.php?id_kategori=KT003" class="absolute inset-0 bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Agama
            </a>
         </div>
         <div class="relative rounded-sm group">
            <img src="assets/images/category/finansial.jpg" alt="category 1" class="w-full">
            <a href="pages/kategori.php?id_kategori=KT004" class="absolute inset-0 bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Finansial</a>
         </div>
         <!-- <div class="relative rounded-sm group">
                <img src="assets/images/category/category-5.jpg" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Living
                    Room</a>
            </div> -->
         <div class="relative rounded-sm group">
            <img src="assets/images/category/sains.jpg" alt="category 1" class="w-full">
            <a href="pages/kategori.php?id_kategori=KT005" class="absolute inset-0 bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Sains</a>
         </div>
      </div>
   </div>
   <!-- ./categories -->

   <!-- new arrival -->
   <div class="container pb-16">
      <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">favorite books</h2>
      <div class="grid grid-cols-5 gap-6">
         <?php
         $kategori = mysqli_query($conn, "SELECT * FROM buku LIMIT 10");
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
                     <a href="pages/detail_book.php?id=<?php echo $row['id']; ?>">
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
                  <!-- <a href="pages/detail_book.php?id=<?php echo $row['id']; ?>" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Borrow</a> -->
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
                              <a href="pages/bacabuku.php" class="py-1 px-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary" name="submit" value="baca 1 menit" onclick="myFunction()">baca 1 menit</a>
                              <a href="pages/bacabuku.php" class="py-1 px-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary" name="submit" value="baca 7 hari" onclick="myFunction()">baca 7 hari</a>
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