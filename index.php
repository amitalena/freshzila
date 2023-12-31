<!DOCTYPE html>
<html lang="en">

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
    <style>
        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-family: swiper-icons;
            font-size: var(--swiper-navigation-size);
            text-transform: none!important;
            letter-spacing: 0;
            color: greenyellow;
            font-variant: initial;
            line-height: 1;
            font-size: 30px;
        }
        
        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            border-radius: 50%;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
        }
        
        .swiper-pagination-clickable .swiper-pagination-bullet {
            background-color: rgb(255, 255, 255);
            cursor: pointer;
            height: 10px;
            width: 10px;
            border: 1px solid #fff;
            margin-top: 25px;
        }
        
        .swiper-pagination-clickable .swiper-pagination-bullet-active {
            cursor: pointer;
            background-color: greenyellow;
            height: 13px;
            width: 13px;
        }
    </style>
</head>

<body>
    <!--header section starts-->
    <?php include 'nav.php'; ?>
    <div class="fixed h-[50px] mt-[690px] shadow-2xl animate-bounce w-[50px] ml-[93%]">
        <a href="./index.php"><i class="ri-arrow-up-s-line text-3xl font-bold text-white  bg-green-800 text-center rounded-full p-3"></i></a>
    </div>
    <!-- section start -->
    <section class="section1 w-full h-full">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide" id="section1">
                    <div class="md:pl-[190px] md:pt-[150px] bg-black h-full opacity-80 px-4 py-[30px]">
                        <h4 class="text-2xl text-white">
                            <i class="ri-apple-fill"></i>100% NATURAL
                        </h4>
                        <h1 class="md:w-[800px] md:text-6xl my-5 font-bold text-white">Fresh and organic <span class="text-red-600 bg-white px-4 p-1">fruits</span></h1>
                        <p class="md:w-[600px] text-gray-300 md:text-xl">Once aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur consectetur adipiscing elit eu fugiat nulla laudantium sunt in culpa qui.
                        </p>
                        <div class="py-[30px]">
                            <a href="./about.php" class="hover:text-black bg-green-700 text-white rounded pl-4 text-xl p-4 w-[150px] pr-4">Read More
                                </a>
                            <a href="./shop.php" class="hover:bg-white mx-2 hover:text-black bg-none border text-white rounded pl-4 text-xl p-[15px] w-[150px] pr-4">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" id="section2">
                    <div class="md:pl-[190px] bg-black h-full opacity-80 md:pt-[150px] px-4 py-[30px]">
                        <h4 class="text-2xl text-white">
                            <i class="ri-apple-fill"></i>100% NATURAL
                        </h4>
                        <h1 class="md:w-[800px] md:text-6xl my-5 font-bold text-white">Huge variety of fresh vegetables</h1>
                        <p class="md:w-[600px] text-gray-300 md:text-xl">Once aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur consectetur adipiscing elit eu fugiat nulla laudantium sunt in culpa qui.
                        </p>
                        <div class="py-[30px]">
                            <a href="./about.php" class="hover:text-black bg-green-700 text-white rounded pl-4 text-xl p-4 w-[150px] pr-4">Read More
                                </a>
                            <a href="./shop.php" class="hover:bg-white mx-2 hover:text-black bg-none border text-white rounded pl-4 text-xl p-[15px] w-[150px] pr-4">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" id="section3">
                    <div class="md:pl-[190px] md:pt-[150px] bg-black h-full opacity-80 px-4 py-[30px]">
                        <h4 class="text-2xl text-white">
                            <i class="ri-apple-fill"></i>100% NATURAL
                        </h4>
                        <h1 class="md:w-[800px] md:text-6xl my-5 font-bold text-white">A Huge variety of the freshest fruits</h1>
                        <p class="md:w-[600px] text-gray-100 md:text-xl">Once aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur consectetur adipiscing elit eu fugiat nulla laudantium sunt in culpa qui.
                        </p>
                        <div class="py-[30px]">
                            <a href="./about.php" class="hover:text-black bg-green-700 text-white rounded pl-4 text-xl p-4 w-[150px] pr-4">Read More
                                </a>
                            <a href="./shop.php" class="hover:bg-white mx-2 hover:text-black bg-none border text-white rounded pl-4 text-xl p-[15px] w-[150px] pr-4">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" id="section4">
                    <div class="md:pl-[190px] md:pt-[150px] bg-black h-full opacity-80 px-4 py-[30px]">
                        <h4 class="text-2xl text-white">
                            <i class="ri-apple-fill"></i>100% NATURAL
                        </h4>
                        <h1 class="md:w-[800px] md:text-6xl my-5 font-bold text-white">Oranic products grown with love</h1>
                        <p class="md:w-[600px] text-gray-300 md:text-xl">Once aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur consectetur adipiscing elit eu fugiat nulla laudantium sunt in culpa qui.
                        </p>
                        <div class="py-[30px]">
                            <a href="./about.php" class="hover:text-black bg-green-700 text-white rounded pl-4 text-xl p-4 w-[150px] pr-4">Read More
                                </a>
                            <a href="./shop.php" class="hover:bg-white mx-2 hover:text-black bg-none border text-white rounded pl-4 text-xl p-[15px] w-[150px] pr-4">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination text-white mt-[50px]"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev text-white shadow-xl md:mx-10"></div>
            <div class="swiper-button-next text-white shadow-xl md:mx-10"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </section>
    <section class="section2 bg-white w-full p-3 my-5">
        <div class="md:flex md:px-[190px] gap-10 md:my-[80px]">
            <h1 class="text-green-600 text-5xl font-bold">Our Fruitant Products</h1>
            <div class="md:w-[1050px]">
                <p class="text-gray-400">Vivamus tincidunt ultrices nunc vel pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean volutpat elementum ante, id eleifend eros luctus sit amet. vel tincidunt erat neque non
                    ipsum. Ut sollicitudin pharetra enim taciti sociosqu ad litora torquent.</p>
                <div class="grid grid-cols-2 my-5 lg:grid-cols-5 gap-10">
                    <div class="bg-green-700 w-[150px] hover:scale-105 duration-300 p-3 shadow-xl rounded flex flex-col">
                        <i class="fa-solid fa-tree text-white mx-5 text-center text-4xl"></i>
                        <a href="ag" class="text-white my-2 text-center">Agriculture  Products</a>
                    </div>
                    <div class="bg-green-700 w-[150px] hover:scale-105 duration-300 p-3 shadow-xl rounded flex flex-col">
                        <i class="text-white mx-5 text-center ri-home-8-line text-4xl"></i>
                        <a href="ag" class="text-white my-2 text-center">Agric Form  Factory</a></div>
                    <div class="bg-green-700 w-[150px] hover:scale-105 duration-300 p-3 shadow-xl rounded flex flex-col">
                        <i class="fa-solid fa-leaf text-white mx-5 text-center text-4xl"></i>
                        <a href="ag" class="text-white my-2 text-center">100% Natural  Products</a>
                    </div>
                    <div class="bg-green-700 w-[150px] hover:scale-105 duration-300 p-3 shadow-xl rounded flex flex-col">
                        <i class="text-white text-center mx-5 ri-gift-fill text-4xl"></i>
                        <a href="ag" class="text-white my-2 text-center">Modern Technique</a>
                    </div>
                    <div class="bg-green-700 w-[150px] hover:scale-105 duration-300 p-3 shadow-xl rounded flex flex-col">
                        <i class="text-white mx-10 ri-shopping-basket-fill text-4xl"></i>
                        <a href="ag" class="text-white my-2 text-center">Fresh Vegitables</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="md:flex justify-center md:px-[180px]">
                <div class="md:w-[650px] p-4">
                    <h3 class="text-green-600 font-bold font-mono italic text-2xl">Locally Grown - 100% Natural</h3>
                    <h1 class="my-5 text-4xl font-bold">The Huge variety of the freshest fruits and vegetables</h1>
                    <p class="text-gray-400">Vivamus tincidunt ultrices nunc vel pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean volutpat elementum ante, id eleifend eros luctus sit amet. vel tincidunt erat neque
                        non ipsum. Ut sollicitudin pharetra enim.</p>
                    <button class="hover:text-black bg-green-700 text-white rounded pl-4 text-xl my-5 p-4 w-[150px] pr-4">Read More</button>
                </div>
                <div class="md:w-[500px] md:h-[500px] ">
                    <img src="./images/fresh-fruit-background-as-healthy-eating-dieting-concept-winter-assortment-top-view_501761-506.avif" alt="" class="md:w-full h-[350px] shadow-2xl rounded"></div>
            </div>
        </div>
    </section>
    <section class="section3">
        <div class="md:py-[202px] bg-black opacity-80 p-3 md:px-[50px]">
            <h1 class="text-white text-center text-5xl font-bold">We Grow & Sell Organic Fruits</h1>
            <div class="md:my-5 flex justify-center">
                <button class="hover:text-black bg-green-700 text-white rounded pl-4 text-xl my-5 p-4 w-[150px] pr-4">Read More</button>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-10 md:px-[190px]  md:my-[-190px]">
            <div class="md:w-[370px] shadow-2xl z-50 rounded h-[300px] border-3 border-red-500 bg-white juise1" id="juice1">
                <img src="./images/240_F_strawberyXnILQ.jpg" alt="" class="object-cover w-full h-full rounded">
                <a href="#">
                    <h1 class="t1 text-center text-black font-bold text-3xl hidden">Fresh, tasty Strawberry</h1>
                </a>
            </div>
            <div class="md:w-[370px] shadow-2xl z-50 rounded h-[300px] border-3 border-red-500 bg-white juise1" id="juice2">
                <img src="./images/240_juice.jpg" alt="" class="object-cover w-full h-full rounded">
                <a href="#">
                    <h1 class="t2 text-center text-black font-bold text-3xl hidden">The orange juice test</h1>
                </a>
            </div>
            <div class="md:w-[370px] shadow-2xl z-50 rounded h-[300px] border-3 border-red-500 bg-white juise1" id="juice3">
                <img src="./images/240_F_grrp.jpg" alt="" class="object-cover w-full h-full rounded">
                <a href="#">
                    <h1 class="t3 text-center text-black font-bold text-3xl hidden">Green & Black Grapes</h1>
                </a>
            </div>
        </div>
    </section>
    <section class="section6 md:px-[184px] p-3">
        <div class="md:flex md:justify-between mt-[130px]" id="big">
            <div class="my-[10px] md:w-[550px]">
                <h1 class="text-5xl font-bold">Big Sale up to 30% off on all products</h1>
                <p class="my-5">Praesent congue iaculis pulvinar. Praesent sit amet consequat sem, nec scelerisque nisl.</p>
                <div class="flex">
                    <p class="h-[100px] w-[100px] text-center"><i class="text-6xl font-bold text-green-600 ri-apple-fill"></i></p>
                    <div>
                        <h2 class="text-2xl text-black font-bold mx-3">Fresh Fruit</h2>
                        <p class="text-gray-500 mx-3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                    </div>
                </div>
                <div class="flex my-2">
                    <p class="h-[100px] w-[100px] text-center"><i class="text-6xl font-bold text-green-600 ri-customer-service-fill"></i></p>
                    <div>
                        <h2 class="text-2xl text-black font-bold mx-3">Support 24/7</h2>
                        <p class="text-gray-500 mx-3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                    </div>
                </div>
                <div class="flex">
                    <p class="h-[100px] w-[100px] text-center"><i class="text-6xl font-bold text-green-600 ri-swap-box-line"></i></p>
                    <div>
                        <h2 class="text-2xl text-black font-bold mx-3">Free Exchange</h2>
                        <p class="text-gray-500 mx-3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                    </div>
                </div>
            </div>
            <div>
                <img src=" ./images/cornucopia-composition-with-delicious-foods_23-2149103286.avif" alt="" class="shadow-2xl md:h-[500px] w-[450px]">
            </div>
        </div>
    </section>
    <section class="section7">
        <div class="bg-black py-[51px] opacity-80">
            <div class="text-center my-5 px-2">
                <h1 class="text-4xl text-white font-bold">Subscribe Newsletter</h1>
                <p class="md:px-[400px] text-white py-10">In non nisi quis metus tempor efficitur a ut odio. Phasellus posuere tellus in interdum venenatis. Curabitur aliquam quam dictum est vestibulum aliquet..</p>
            </div>
            <div class="user flex md:justify-between">
                <form action="" class="search-form md:ml-[460px] mx-6 flex rounded shadow">
                    <input type="email" placeholder="Enter your email address.." id="search-box" class="pr-3 bg-none rounded shadow-2xl outline-none md:w-[500px] p-3">
                    <button class="search bg-green-700 mx-1 rounded p-3 text-white" onclick=" ok();">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
    <section class="section4 my-[50px] p-4">
        <div class="text-center my-5">
            <h1 class="text-3xl font-bold">Welcome to our healthy Fruitant company</h1>
            <p class="md:px-[300px] py-10">Aenean a rutrum magna. Donec suscipit vulputate fermentum. Vestibulum ac metus in mi rutrum laoreet lorem dolor set amet, donec rutrum dolor ipsum sed.</p>
        </div>
        <div class="md:px-[150px]"><img src="./images/240_F_juicesARuSXL.jpg " alt=" " class="w-full md:h-[550px] shadow-2xl rounded-lg "></div>
    </section>
    <!-- testimonial -->
    <section class="section5 my-10">
        <div class="bg-black opacity-90 h-full w-full">
            <div class="swiper md:ml-[150px] md:py-[50px] md:w-[660px]">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="md:mx-[110px] p-4 mt-5 w-[400px]">
                            <i class="ri-double-quotes-l shadow text-5xl font-bold text-green-600"></i>
                            <p class="text-gray-300 break-all">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                            <i class="ri-double-quotes-r shadow text-5xl ml-[80%] font-bold text-green-600"></i>
                            <span class="flex justify-center mt-[-10px]">
                                <img src="./images/240_F_grrp.jpg" alt="" class="rounded-full h-[50px] w-[50px]">
                                <h1 class="text-center text-green-200 font-bold text-2xl p-2">Amit kumar</h1>
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="md:mx-[110px] p-4 mt-5 w-[400px]">
                            <i class="ri-double-quotes-l shadow text-5xl font-bold text-green-600"></i>
                            <p class="text-gray-300 break-all">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                            <i class="ri-double-quotes-r shadow text-5xl ml-[80%] font-bold text-green-600"></i>
                            <span class="flex justify-center mt-[-10px]">
                                <img src="./images/240_F_grrp.jpg" alt="" class="rounded-full h-[50px] w-[50px]">
                                <h1 class="text-center text-green-200 font-bold text-2xl p-2">Alena XP</h1>
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="md:mx-[110px] p-4 mt-5 w-[400px]">
                            <i class="ri-double-quotes-l shadow text-5xl font-bold text-green-600"></i>
                            <p class="text-gray-300 break-all">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                            <i class="ri-double-quotes-r shadow text-5xl ml-[80%] font-bold text-green-600"></i>
                            <span class="flex justify-center mt-[-10px]">
                                <img src="./images/240_F_grrp.jpg" alt="" class="rounded-full h-[50px] w-[50px]">
                                <h1 class="text-center text-green-200 font-bold text-2xl p-2">Abhi Joel</h1>
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="md:mx-[110px] p-4 mt-5 w-[400px]">
                            <i class="ri-double-quotes-l shadow text-5xl font-bold text-green-600"></i>
                            <p class="text-gray-300 break-all">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                            <i class="ri-double-quotes-r shadow text-5xl ml-[80%] font-bold text-green-600"></i>
                            <span class="flex justify-center mt-[-10px]">
                                <img src="./images/240_F_grrp.jpg" alt="" class="rounded-full h-[50px] w-[50px]">
                                <h1 class="text-center text-green-200 font-bold text-2xl p-2">Suraj Soul</h1>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev text-white shadow-xl md:mx-10"></div>
                <div class="swiper-button-next text-white shadow-xl md:mx-10"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </section>

    <footer class="bg-black opacity-100 md:px-[160px] py-5">
        <div class="grid md:grid-cols-4 pt-[80px]">
            <div class="text-white mx-5 ">
                <h1 class="text-white font-bold pb-[20px] text-2xl ">Contact Info</h1>
                <p class="text-gray-500 my-2 hover:text-white hover:scale-95 duration-300 "><i class="text-white mx-2 ri-map-pin-2-fill "></i>Jamalpatti Sarsavan Harhua varanasi Uttar Pradesh 221003, India</p>
                <p class="text-gray-500 my-3 hover:text-white hover:scale-95 duration-300 "><i class="text-white mx-2 ri-phone-fill "></i>Phone: +916393351817</p>
                <p class="text-gray-500 lowercase hover:text-white hover:scale-95 duration-300 "><i class="text-white mx-2 ri-mail-open-fill "></i>Email: amitalena2724@gmail.com</p>
            </div>
            <div class="mx-5 ">
                <h1 class="text-white font-bold pb-[20px] text-2xl ">Latest News</h1>
                <div class="my-4 ">
                    <a href="# " class="flex ">
                        <img src="./images/images (1) (7).jpeg " alt=" " class="w-[50px] h-[40px] rounded ">
                        <div class="text-gray-400 mx-3 ">
                            <h1 class="hover:text-white hover:scale-95 duration-300 ">Vegitable and orgenic fruit</h1>
                            <p class="hover:text-white ">Oct 15, 2023</p>
                        </div>
                    </a>
                </div>
                <div class="my-4 ">
                    <a href="# " class="flex ">
                        <img src="./images/download (7).jpeg" alt=" " class="w-[50px] h-[40px] rounded ">
                        <div class="text-gray-400 mx-3 ">
                            <h1 class="hover:text-white hover:scale-95 duration-300 ">Vegitable and orgenic fruit</h1>
                            <p class="hover:text-white ">Oct 15, 2023</p>
                        </div>
                    </a>
                </div>
                <div class="my-4 ">
                    <a href="# " class="flex ">
                        <img src="./images/download (16).jpeg" alt=" " class="w-[50px] h-[40px] rounded ">
                        <div class="text-gray-400 mx-3 ">
                            <h1 class="hover:text-white hover:scale-95 duration-300 ">Vegitable and orgenic fruit</h1>
                            <p class="hover:text-white ">Oct 15, 2023</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-white mx-5 ">
                <h1 class="text-white font-bold pb-[20px] text-2xl ">Useful Links</h1>
                <div class="grid grid-cols-1 text-gray-500 ">
                    <span class="my-2 hover:text-white hover:scale-95 duration-300 "><a href="about.php ">About Us</a></span>
                    <span class="my-1 hover:text-white hover:scale-95 duration-300 "><a href="blog.php ">Blog posts</a></span>
                    <span class="my-1 hover:text-white hover:scale-95 duration-300 "><a href="services.php ">Our services</a></span>
                    <span class="my-1 hover:text-white hover:scale-95 duration-300 "><a href="contact.php ">ContactUs</a></span>
                    <span class="my-1 hover:text-white hover:scale-95 duration-300 "><a href="gallery.php ">Food gallery</a></span>
                </div>
            </div>
            <div class="text-white mx-5 ">
                <h1 class="text-white font-bold pb-[20px] text-2xl ">Quotation</h1>
                <p class="text-gray-500 my-3 hover:text-white hover:scale-95 duration-300 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, aspernatur.</p>
                <div class="grid grid-cols-1 ">
                    <h1 class="text-2xl font-bold my-2 ">Tags</h1>
                    <div class="w-[250px] ">
                        <button class="border hover:text-white hover:scale-95 duration-300 my-2 mx-1 w-[100px] p-2 rounded text-gray-500 ">Vegitable</button>
                        <button class="border hover:text-white hover:scale-95 duration-300 my-2 mx-1 w-[80px] p-2 rounded text-gray-500 ">Fruit</button>
                        <button class="border hover:text-white hover:scale-95 duration-300 my-2 mx-1 w-[90px] p-2 rounded text-gray-500 ">Organic</button>
                        <button class="border hover:text-white hover:scale-95 duration-300 my-2 mx-1 w-[90px] p-2 rounded text-gray-500 ">Farming</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="pt-4 px-4 ">
            <p class="text-gray-500 md:text-center ">© 2023 Fruit.Hub. All rights reserved | Designed by amitkumar</p>
        </div>
    </footer>

    <!--head section ends-->






























    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js " integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js " integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <script src="./gsap.js"></script>
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
    <script>
        const swiper = new Swiper('.swiper', {
            autoplay: {
                delay: 3000,
                disableOnInteractin: false,
                breakpoints: {
                    640: {
                        perPage: 2,
                        gap: '.7rem',
                        // height: '6rem',
                        arrows: false,
                    },
                    480: {
                        perPage: 1,
                        gap: '.7rem',
                        // height: '6rem',
                        arrows: false,
                    },
                },
            },
            // Optional parameters
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>

</html>

</html>