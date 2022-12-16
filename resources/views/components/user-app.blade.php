<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>    
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <header class="z-50 fixed w-full bg-background-dark text-light py-3 px-4 flex justify-center">
            <div class="box flex items-center justify-between relative">
                <a href="#/" class="router-link-active router-link-exact-active link brand mr-8 text-white">Image</a>
                <nav class="nav">
                    <a href="#/" class="router-link-active router-link-exact-active link"></a>
                    <a href="#/products" class="link">Products</a>
                    <a href="#/cart" class="md:hidden">Shopping Cart</a>
                    <div class="separator md:hidden"></div>
                    <div class="profile">
                        <div class="flex flex-col gap-4">
                            <button class="btn--full btn--md btn--secondary btn flex rounded font-medium hover:shadow-md focus:ring-2">
                                <i class="eva-hover" style="display: none;">...</i>
                                "Log in"
                            </button>
                            <p>Don't have an account yet?</p>
                            <button class="btn--full btn--md btn--secondary btn--outline btn flex rounded font-medium hover:shadow-md focus:ring-2">
                                <i class="eva-hover" style="display:none">...</i>
                                "Register"
                            </button>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="nav-right">
                <button class="icon-button md:flex hidden">
                    <i class="eva-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#ffffff" class="eva eva-animation eva-icon-hover-undefined">
                            <g data-name="Layer 2">
                                <g date-name="person">
                                    <rect width="24" height="24" opacity="0"></rect>
                                    <path d="M12 11a4 4 0 1 0-4-4 4 4 0 0 0 4 4zm0-6a2 2 0 1 1-2 2 2 2 0 0 1 2-2z"></path>
                                    <path d="M12 13a7 7 0 0 0-7 7 1 1 0 0 0 2 0 5 5 0 0 1 10 0 1 1 0 0 0 2 0 7 7 0 0 0-7-7z"></path>
                                </g>
                            </g>
                        </svg>
                    </i>
                    <span class="sr-only">User Profile</span>
                </button>
                <a href="#/cart">
                    <button class="btn--md btn--secondary btn flex rounded font-medium hover:shadow-md focus:ring-2 md:flex hidden">
                        <i class="eva-hover">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="#ffffff" class="eva eva-animation eva-icon-hover-undefined">
                                <g data-name="Layer 2">
                                    <g data-name="shopping-cart">
                                        <rect width="24" height="24" opacity="0"></rect>
                                        <path d="M21.08 7a2 2 0 0 0-1.7-1H6.58L6 3.74A1 1 0 0 0 5 3H3a1 1 0 0 0 0 2h1.24L7 15.26A1 1 0 0 0 8 16h9a1 1 0 0 0 .89-.55l3.28-6.56A2 2 0 0 0 21.08 7zm-4.7 7H8.76L7.13 8h12.25z"></path>
                                        <circle cx="7.5" cy="19.5" r="1.5"></circle>
                                        <circle cx="17.5" cy="19.5" r="1.5"></circle>
                                    </g>
                                </g>
                            </svg>
                        </i>
                        <span class="sr-only">Shopping cart</span>
                    </button>
                </a>
                <button class="btn--md btn--secondary btn flex rounded font-medium hover:shadow-md focus:ring-2 flex md:hidden">
                    <i class="eva-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="#ffffff" class="eva eva-animation eva-icon-hover-undefined">
                            <g data-name="Layer 2">
                                <g data-name="menu">
                                    <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect>
                                    <rect x="3" y="11" width="18" height="2" rx=".95" ry=".95"></rect>
                                    <rect x="3" y="16" width="18" height="2" rx=".95" ry=".95"></rect>
                                    <rect x="3" y="6" width="18" height="2" rx=".95" ry=".95"></rect>
                                </g>
                            </g>
                        </svg>
                    </i>
                    <span class="sr-only">Menu</span>
                </button>
            </div>
    </div>
    </header>
    <div class="toastie__wrapper"></div>
    <main class="main mt-14">
        <header class="parent">
            <div class="box wrapper">
                <h1 class="text title">New book!</h1>
                <p class="text desc">Buku Legenda Malin Kundang</p>
                <a href="#/product/1">
                    <button class="btn--lg btn--primary btn flex rounded font-medium hover:shadow-md focus:ring-2 btn--slide">
                        <i class="eva-hover" style="display: none;">...</i>
                        "View product"
                    </button>
                </a>
            </div>
        </header>
        <div class="box">
            <h1 class="text-x1 py-8">Featured Products</h1>
            <main class="product-grid">
                <a href="#/product/2" isfavourite="false">
                    <div class="wrapper hover:text-dark-light">
                        <div class="header bg-light-light">
                            <div class="cursor-pointer inline-block m-2">
                                <i class="eva-hover">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#555555" class="eva eva-animation eva-icon-hover-undefined">
                                        <g data-name="Layer 2">
                                            <g data-name="heart">
                                                <rect width="24" height="24" opacity="0"></rect>
                                                <path d="M12 21a1 1 0 0 1-.71-.29l-7.77-7.78a5.26 5.26 0 0 1 0-7.4 5.24 5.24 0 0 1 7.4 0L12 6.61l1.08-1.08a5.24 5.24 0 0 1 7.4 0 5.26 5.26 0 0 1 0 7.4l-7.77 7.78A1 1 0 0 1 12 21zM7.22 6a3.2 3.2 0 0 0-2.28.94 3.24 3.24 0 0 0 0 4.57L12 18.58l7.06-7.07a3.24 3.24 0 0 0 0-4.57 3.32 3.32 0 0 0-4.56 0l-1.79 1.8a1 1 0 0 1-1.42 0L9.5 6.94A3.2 3.2 0 0 0 7.22 6z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="footer"></div>
                    </div>
                </a>
                <a href="#/product/5" isfavourite="false">
                    <div class="wrapper hover:text-dark-light">
                        <div class="header bg-light-light">
                            <div class="cursor-pointer inline-block m-2">
                                <i class="eva-hover">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#555555" class="eva eva-animation eva-icon-hover-undefined">
                                        <g data-name="Layer 2">
                                            <g data-name="heart">
                                                <rect width="24" height="24" opacity="0"></rect>
                                                <path d="M12 21a1 1 0 0 1-.71-.29l-7.77-7.78a5.26 5.26 0 0 1 0-7.4 5.24 5.24 0 0 1 7.4 0L12 6.61l1.08-1.08a5.24 5.24 0 0 1 7.4 0 5.26 5.26 0 0 1 0 7.4l-7.77 7.78A1 1 0 0 1 12 21zM7.22 6a3.2 3.2 0 0 0-2.28.94 3.24 3.24 0 0 0 0 4.57L12 18.58l7.06-7.07a3.24 3.24 0 0 0 0-4.57 3.32 3.32 0 0 0-4.56 0l-1.79 1.8a1 1 0 0 1-1.42 0L9.5 6.94A3.2 3.2 0 0 0 7.22 6z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="footer"></div>
                    </div>
                </a>
                <a href="#/product/7" isfavourite="false">
                    <div class="wrapper hover:text-dark-light">
                        <div class="header bg-light-light">
                            <div class="cursor-pointer inline-block m-2">
                                <i class="eva-hover">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#555555" class="eva eva-animation eva-icon-hover-undefined">
                                        <g data-name="Layer 2">
                                            <g data-name="heart">
                                                <rect width="24" height="24" opacity="0"></rect>
                                                <path d="M12 21a1 1 0 0 1-.71-.29l-7.77-7.78a5.26 5.26 0 0 1 0-7.4 5.24 5.24 0 0 1 7.4 0L12 6.61l1.08-1.08a5.24 5.24 0 0 1 7.4 0 5.26 5.26 0 0 1 0 7.4l-7.77 7.78A1 1 0 0 1 12 21zM7.22 6a3.2 3.2 0 0 0-2.28.94 3.24 3.24 0 0 0 0 4.57L12 18.58l7.06-7.07a3.24 3.24 0 0 0 0-4.57 3.32 3.32 0 0 0-4.56 0l-1.79 1.8a1 1 0 0 1-1.42 0L9.5 6.94A3.2 3.2 0 0 0 7.22 6z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="footer"></div>
                    </div>
                </a>
                <a href="#/product/9" isfavourite="false">
                    <div class="wrapper hover:text-dark-light">
                        <div class="header bg-light-light">
                            <div class="cursor-pointer inline-block m-2">
                                <i class="eva-hover">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#555555" class="eva eva-animation eva-icon-hover-undefined">
                                        <g data-name="Layer 2">
                                            <g data-name="heart">
                                                <rect width="24" height="24" opacity="0"></rect>
                                                <path d="M12 21a1 1 0 0 1-.71-.29l-7.77-7.78a5.26 5.26 0 0 1 0-7.4 5.24 5.24 0 0 1 7.4 0L12 6.61l1.08-1.08a5.24 5.24 0 0 1 7.4 0 5.26 5.26 0 0 1 0 7.4l-7.77 7.78A1 1 0 0 1 12 21zM7.22 6a3.2 3.2 0 0 0-2.28.94 3.24 3.24 0 0 0 0 4.57L12 18.58l7.06-7.07a3.24 3.24 0 0 0 0-4.57 3.32 3.32 0 0 0-4.56 0l-1.79 1.8a1 1 0 0 1-1.42 0L9.5 6.94A3.2 3.2 0 0 0 7.22 6z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="footer">
                            <h2 class="title">HERITAGE</h2>
                            <p class="brand">FILA</p>
                            <p class="price">$155</p>
                        </div>
                    </div>
                </a>
                <a href="#/products" class="link">
                    <div class="box">
                        "View more products"
                        <i class="eva-hover">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#555555" class="eva eva-animation eva-icon-hover-undefined">
                                <g data-name="Layer 2">
                                    <g data-name="arrow-forward">
                                        <rect width="24" height="24" transform="rotate(-90 12 12)" opacity="0"></rect>
                                        <path d="M5 13h11.86l-3.63 4.36a1 1 0 0 0 1.54 1.28l5-6a1.19 1.19 0 0 0 .09-.15c0-.05.05-.08.07-.13A1 1 0 0 0 20 12a1 1 0 0 0-.07-.36c0-.05-.05-.08-.07-.13a1.19 1.19 0 0 0-.09-.15l-5-6A1 1 0 0 0 14 5a1 1 0 0 0-.64.23 1 1 0 0 0-.13 1.41L16.86 11H5a1 1 0 0 0 0 2z"></path>
                                    </g>
                                </g>
                            </svg>
                        </i>
                    </div>
                </a>
            </main>
        </div>
    </main>
    <div class="box">
        <h1 class="text-xl py-8 ">Featured products</h1>
        <main class="product-grid">
            <a href="#/product/2" class="">
                <div class="wrapper hover:text-dark-light">
                    <div class="header bg-light-light" data-v-ae0d205e="" style="background-image: url(&quot;https://shuuz-backend.herokuapp.com/uploads/thumbnail_photo_1491553895911_0055eca6402d_eaf84a6eb4.jpeg&quot;);">
                        <div class="cursor-pointer inline-block m-2" data-v-ae0d205e="">
                            <i class="eva-hover" data-v-ae0d205e="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#555555" class="eva eva-animation eva-icon-hover-undefined">
                                    <g data-name="Layer 2">
                                        <g data-name="heart">
                                            <rect width="24" height="24" opacity="0"></rect>
                                            <path d="M12 21a1 1 0 0 1-.71-.29l-7.77-7.78a5.26 5.26 0 0 1 0-7.4 5.24 5.24 0 0 1 7.4 0L12 6.61l1.08-1.08a5.24 5.24 0 0 1 7.4 0 5.26 5.26 0 0 1 0 7.4l-7.77 7.78A1 1 0 0 1 12 21zM7.22 6a3.2 3.2 0 0 0-2.28.94 3.24 3.24 0 0 0 0 4.57L12 18.58l7.06-7.07a3.24 3.24 0 0 0 0-4.57 3.32 3.32 0 0 0-4.56 0l-1.79 1.8a1 1 0 0 1-1.42 0L9.5 6.94A3.2 3.2 0 0 0 7.22 6z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="footer">
                        <h2 class="title">Featured Product</h2>
                        <p class="brand">Nike</p>
                        <p class="price">$987.65</p>
                    </div>
                    <!---->
                </div>
            </a>
            <a href="#/product/5" class="">
                <div class="wrapper hover:text-dark-light">
                    <div class="header bg-light-light" data-v-ae0d205e="" style="background-image: url(&quot;https://img01.ztat.net/article/spp-media-p1/57da51b188bb32fbb9de6fbbb512201c/84b24939f1cb444a89e752ff657257c5.jpg?imwidth=1800&amp;filter=packshot&quot;);">
                        <div class="cursor-pointer inline-block m-2" data-v-ae0d205e="">
                            <i class="eva-hover" data-v-ae0d205e="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#555555" class="eva eva-animation eva-icon-hover-undefined">
                                    <g data-name="Layer 2">
                                        <g data-name="heart">
                                            <rect width="24" height="24" opacity="0"></rect>
                                            <path d="M12 21a1 1 0 0 1-.71-.29l-7.77-7.78a5.26 5.26 0 0 1 0-7.4 5.24 5.24 0 0 1 7.4 0L12 6.61l1.08-1.08a5.24 5.24 0 0 1 7.4 0 5.26 5.26 0 0 1 0 7.4l-7.77 7.78A1 1 0 0 1 12 21zM7.22 6a3.2 3.2 0 0 0-2.28.94 3.24 3.24 0 0 0 0 4.57L12 18.58l7.06-7.07a3.24 3.24 0 0 0 0-4.57 3.32 3.32 0 0 0-4.56 0l-1.79 1.8a1 1 0 0 1-1.42 0L9.5 6.94A3.2 3.2 0 0 0 7.22 6z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="footer">
                        <h2 class="title">CHARGE SLR</h2>
                        <p class="brand">Nike SB</p>
                        <p class="price">$15</p>
                    </div>
                    <!---->
                </div>
            </a>
            <a href="#/product/7" class="">
                <div class="wrapper hover:text-dark-light">
                    <div class="header bg-light-light" data-v-ae0d205e="" style="background-image: url(&quot;https://img01.ztat.net/article/spp-media-p1/99b3856aaf3a35ad8d4b95e7830cdb27/009b190b5ac54b328498f20792067cee.jpg?imwidth=1800&amp;filter=packshot&quot;);">
                        <div class="cursor-pointer inline-block m-2" data-v-ae0d205e="">
                            <i class="eva-hover" data-v-ae0d205e="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#555555" class="eva eva-animation eva-icon-hover-undefined">
                                    <g data-name="Layer 2">
                                        <g data-name="heart">
                                            <rect width="24" height="24" opacity="0"></rect>
                                            <path d="M12 21a1 1 0 0 1-.71-.29l-7.77-7.78a5.26 5.26 0 0 1 0-7.4 5.24 5.24 0 0 1 7.4 0L12 6.61l1.08-1.08a5.24 5.24 0 0 1 7.4 0 5.26 5.26 0 0 1 0 7.4l-7.77 7.78A1 1 0 0 1 12 21zM7.22 6a3.2 3.2 0 0 0-2.28.94 3.24 3.24 0 0 0 0 4.57L12 18.58l7.06-7.07a3.24 3.24 0 0 0 0-4.57 3.32 3.32 0 0 0-4.56 0l-1.79 1.8a1 1 0 0 1-1.42 0L9.5 6.94A3.2 3.2 0 0 0 7.22 6z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="footer">
                        <h2 class="title">X_PLR UNISEX</h2>
                        <p class="brand">adidas Originals</p>
                        <p class="price">$222</p>
                    </div>
                    <!---->
                </div>
            </a>
            <a href="#/product/9" class="">
                <div class="wrapper hover:text-dark-light">
                    <div class="header bg-light-light" data-v-ae0d205e="" style="background-image: url(&quot;https://img01.ztat.net/article/spp-media-p1/ab5150512c063753a22b2f4ac4240e87/3c0f9650b26c4277b3b8bd06da1ac155.jpg?imwidth=1800&amp;filter=packshot&quot;);">
                        <div class="cursor-pointer inline-block m-2" data-v-ae0d205e="">
                            <i class="eva-hover" data-v-ae0d205e="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#555555" class="eva eva-animation eva-icon-hover-undefined">
                                    <g data-name="Layer 2">
                                        <g data-name="heart">
                                            <rect width="24" height="24" opacity="0"></rect>
                                            <path d="M12 21a1 1 0 0 1-.71-.29l-7.77-7.78a5.26 5.26 0 0 1 0-7.4 5.24 5.24 0 0 1 7.4 0L12 6.61l1.08-1.08a5.24 5.24 0 0 1 7.4 0 5.26 5.26 0 0 1 0 7.4l-7.77 7.78A1 1 0 0 1 12 21zM7.22 6a3.2 3.2 0 0 0-2.28.94 3.24 3.24 0 0 0 0 4.57L12 18.58l7.06-7.07a3.24 3.24 0 0 0 0-4.57 3.32 3.32 0 0 0-4.56 0l-1.79 1.8a1 1 0 0 1-1.42 0L9.5 6.94A3.2 3.2 0 0 0 7.22 6z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="footer">
                        <h2 class="title">HERITAGE</h2>
                        <p class="brand">FILA</p>
                        <p class="price">$155</p>
                    </div>
                    <!---->
                </div>
            </a>
            <a href="#/products" class="link">
                <div class="box">View more products
                    <i class="eva-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#ffffff" class="eva eva-animation eva-icon-hover-undefined">
                            <g data-name="Layer 2">
                                <g data-name="arrow-forward">
                                    <rect width="24" height="24" transform="rotate(-90 12 12)" opacity="0"></rect>
                                    <path d="M5 13h11.86l-3.63 4.36a1 1 0 0 0 1.54 1.28l5-6a1.19 1.19 0 0 0 .09-.15c0-.05.05-.08.07-.13A1 1 0 0 0 20 12a1 1 0 0 0-.07-.36c0-.05-.05-.08-.07-.13a1.19 1.19 0 0 0-.09-.15l-5-6A1 1 0 0 0 14 5a1 1 0 0 0-.64.23 1 1 0 0 0-.13 1.41L16.86 11H5a1 1 0 0 0 0 2z"></path>
                                </g>
                            </g>
                        </svg>
                    </i>
                </div>
            </a>
        </main>
    </div>
    <footer class="wrapper">
        <div class="box grid">
            <ul>
                <li class="column-title">Company</li>
                <li>
                    <a href="#/about" class="link">About us</a>
                </li>
                <li>
                    <a href="#/about" class="link">Our team</a>
                </li>
                <li>
                    <a href="#/about" class="link">Career</a>
                </li>
                <li>
                    <a href="#/about" class="link">Media</a>
                </li>
            </ul>
            <ul>
                <li class="column-title">Shopping</li>
                <li>
                    <a href="#/about" class="link">Delivery</a>
                </li>
                <li>
                    <a href="#/about" class="link">Warranty</a>
                </li>
                <li>
                    <a href="#/about" class="link">Privacy policy</a>
                </li>
                <li>
                    <a href="#/about" class="link">Customer support</a>
                </li>
            </ul>
        </div>
    </footer>
    </div>
    <script src="js/chunk-vendors.d1e7aabf.js"></script>
    <script src="js/app.ee62a568.js"></script>
</body>
</html>