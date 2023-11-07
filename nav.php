<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frouts Store</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <!-- slick slider start-->
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <!-- slick slider end -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <!--header section starts-->
    <header class="header w-full flex justify-between md:px-[186px] bg-white shadow-xl fixed p-4">
        <a href="./admin/home1.php" class="logo text-green-600 font-bold text-4xl"><i class="text-3xl font-bold text-red-600 ri-apple-fill"></i>Fresh Zilla</a>
        <div class="menu md:flex">
            <ul class="navbar md:flex md:ml-[150px] gap-5 text-center text-green-600 mt-2">
                <li class="hover:text-red-600 hover:scale-105 duration-300 active"><a href="index.php">home</a></li>
                <li class="hover:text-red-600 hover:scale-105 duration-300"><a href="about.php">about</a></li>
                <li class="hover:text-red-600 hover:scale-105 duration-300"><a href="services.php">services</a></li>
                <li class="hover:text-red-600 hover:scale-105 duration-300"><a href="blog.php">blogs</a></li>
                <!-- <li class="hover:text-red-600 hover:scale-105 duration-300"><a href="gallery.php">gallery</a></li> -->
                <li class="hover:text-red-600 hover:scale-105 duration-300"><a href="contact.php">contact</a></li>
            </ul>
            <div class="user">
                <div class="user1 flex justify-between">
                    <form action="" class="search-form pl-3 pr-3 flex bg-white rounded shadow">
                        <input type="search" placeholder="search here..." id="search-box" class=" pr-3 bg-none outline-none w-[250px] p-2">
                        <button class="search" onclick="ok();"><i class="ri-search-line text-black text-xl"></i></button>
                    </form>
                    <a href="login.php" class="bg-green-600 mx-1 text-white text-center p-2 rounded">User</a>
                    <a href="shoping-cart.php" class="bg-red-600 mx-1 text-white text-center p-2 rounded">Card</a>
                </div>
            </div>
        </div>
        <div class="main md:hidden">
            <i class="ri-menu-line font-bold text-3xl"></i>
        </div>
    </header>

   






























    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <script src="./script.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js "></script>
    <!-- slick -->
    <script type="text/javascript " src="//code.jquery.com/jquery-1.11.0.min.js "></script>
    <script type="text/javascript " src="//code.jquery.com/jquery-migrate-1.2.1.min.js "></script>
    <script type="text/javascript " src="slick/slick.min.js "></script>
    <!-- slick end -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".main i").click(function() {
                $(".menu").toggleClass("main");
            });
        });
    </script>
</body>

</php>

</php>