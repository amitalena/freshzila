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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-family: swiper-icons;
            font-size: var(--swiper-navigation-size);
            text-transform: none!important;
            letter-spacing: 0;
            color: #000000;
            font-variant: initial;
            line-height: 1;
            font-size: 30px;
            display: none;
        }
        
        .swiper-pagination-clickable .swiper-pagination-bullet {
            background: none;
            cursor: pointer;
            height: 14px;
            width: 14px;
            border: 2px solid #077431;
            margin-top: 25px;
        }
        
        .swiper-pagination-clickable .swiper-pagination-bullet-active {
            cursor: pointer;
            background-color: #187002;
            height: 17px;
            width: 17px;
            border: none;
        }
    </style>
</head>

<body>
<?php include 'nav.php'; ?>
    <!-- shop  -->
    <section class="shop-container bg-gray-50 md:px-[186px]">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="bg-green-50 md:flex md:justify-between md:p-[80px] p-3">
                        <div class="md:w-[400px]">
                            <h3 class="text-green-500 text-2xl font-bold">Save up to 50 %</h3>
                            <h1 class="text-5xl text-black font-bold py-5">Deal of the day</h1>
                            <p class="text-gray-400 text-xl">on your first purchase</p>
                        </div>
                        <div class="w-[400px]">
                            <a href="shop-item.php">
                                <img src="./images/fresh-healthy.avif" alt="" class="w-full h-[250px]">
                            </a>
                        </div>
                        <div class="md:w-[400px] md:ml-[30px]">
                            <h1 class="text-black text-4xl font-bold">Fresh Fruits Basket</h1>
                            <p class="text-gray-400 w-[300px] py-4">Integer venenatis sem id dictum aliquet. Sed at velit, facilisis lectus sed, finibus mauris,Proin dapibus semper turpis et ornare.</p>
                            <div class="flex md:my-4">
                                <a href="shop-item.php">
                                    <p class="hover:bg-green-700 hover:text-white duration-300 cursor-pointer text-center p-3 px-5  rounded border border-green-500">Shop Now</p>
                                </a>
                                <p class="hover:bg-green-700 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-2 rounded text-green-400 mx-4 h-[50px] w-[50px]"><i class="ri-shopping-basket-fill text-xl"></i></p>
                                <p class="hover:bg-green-700 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-2 rounded text-green-400 h-[50px] w-[50px]"><i class="ri-share-forward-fill text-xl"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-green-50 md:flex md:justify-between md:p-[80px] p-3">
                        <div class="md:w-[400px]">
                            <h3 class="text-green-500 text-2xl font-bold">Save up to 50 %</h3>
                            <h1 class="text-5xl text-black font-bold py-5">Deal of the day</h1>
                            <p class="text-gray-400 text-xl">on your first purchase</p>
                        </div>
                        <div class="w-[400px]">
                            <a href="shop-item.php">
                                <img src="./images/fresh-healthy.avif" alt="" class="w-full h-[250px]">
                            </a>
                        </div>
                        <div class="w-[450px] md:ml-[30px]">
                            <h1 class="text-black text-4xl font-bold">Fresh Fruits Basket</h1>
                            <p class="text-gray-400 w-[300px] py-4">Integer venenatis sem id dictum aliquet. Sed at velit, facilisis lectus sed, finibus mauris,Proin dapibus semper turpis et ornare.</p>
                            <div class="flex md:my-4">
                                <a href="shop-item.php">
                                    <p class="hover:bg-green-700 hover:text-white duration-300 cursor-pointer text-center p-3 px-5  rounded border border-green-500">Shop Now</p>
                                </a>
                                <p class="hover:bg-green-700 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-2 rounded text-green-400 mx-4 h-[50px] w-[50px]"><i class="ri-shopping-basket-fill text-xl"></i></p>
                                <p class="hover:bg-green-700 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-2 rounded text-green-400 h-[50px] w-[50px]"><i class="ri-share-forward-fill text-xl"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-green-50 md:flex md:justify-between md:p-[80px] p-3">
                        <div class="md:w-[400px]">
                            <h3 class="text-green-500 text-2xl font-bold">Save up to 50 %</h3>
                            <h1 class="text-5xl text-black font-bold py-5">Deal of the day</h1>
                            <p class="text-gray-400 text-xl">on your first purchase</p>
                        </div>
                        <div class="w-[400px]">
                            <a href="shop-item.php">
                                <img src="./images/fresh-healthy.avif" alt="" class="w-full h-[250px]">
                            </a>
                        </div>
                        <div class="w-[450px] md:ml-[30px]">
                            <h1 class="text-black text-4xl font-bold">Fresh Fruits Basket</h1>
                            <p class="text-gray-400 w-[300px] py-4">Integer venenatis sem id dictum aliquet. Sed at velit, facilisis lectus sed, finibus mauris,Proin dapibus semper turpis et ornare.</p>
                            <div class="flex md:my-4">
                                <a href="shop-item.php">
                                    <p class="hover:bg-green-700 hover:text-white duration-300 cursor-pointer text-center p-3 px-5  rounded border border-green-500">Shop Now</p>
                                </a>
                                <p class="hover:bg-green-700 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-2 rounded text-green-400 mx-4 h-[50px] w-[50px]"><i class="ri-shopping-basket-fill text-xl"></i></p>
                                <p class="hover:bg-green-700 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-2 rounded text-green-400 h-[50px] w-[50px]"><i class="ri-share-forward-fill text-xl"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination text-white mt-[50px]"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev text-whit md:mx-10"></div>
            <div class="swiper-button-next text-white md:mx-10"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </section>
    <!-- shop fruit -->
    <div class="fruit-container bg-gray-50 md:px-[186px]">
        <div class="grid md:grid-cols-4 md:pt-[100px] gap-5">
            <div class="bg-white hover:cursor-pointer w-full">
                <a href="shop-item.php">
                    <img src="./images/images (1) (7).jpeg" alt="" class="w-[250px] mx-[30px] px-[30px] h-[200px]">
                    <span class="text-black p-4">$120.00<del class="mx-3 text-gray-400 line-through">$134.00</del></span>
                    <p class="text-black opacity-90 font-bold text-xl p-3">Pure & Fresh Strawberry from the Farm</p>
                    <div class="flex my-4">
                        <p class="hover:bg-yellow-400 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-1 text-xl rounded text-green-700 mx-4 h-[44px] w-[120px]">Cart<i class="ri-shopping-basket-fill pl-2 text-xl"></i></p>
                        <a href="shop-item.php">
                            <p class="hover:bg-green-700 hover:text-white duration-300 cursor-pointer text-center p-3 px-5  rounded border border-green-500">Shop Now</p>
                        </a>
                    </div>
                </a>
            </div>
            <div class="w-full hover:cursor-pointer bg-white">
                <a href="shop-item.php">
                    <img src="./images/download (15).jpeg" alt="" class="w-[250px] mx-[30px] px-[30px] h-[200px]">
                    <span class="text-black p-4">$40.00<del class="mx-3 text-gray-400 line-through">$44.00</del></span>
                    <p class="text-black opacity-90 font-bold text-xl p-3">Pure & Fresh Apple from the Kasmir Farm</p>
                    <div class="flex my-4">
                        <p class="hover:bg-yellow-400 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-1 text-xl rounded text-green-700 mx-4 h-[44px] w-[120px]">Cart<i class="ri-shopping-basket-fill pl-2 text-xl"></i></p>
                        <a href="shop-item.php">
                            <p class="hover:bg-green-700 hover:text-white duration-300 cursor-pointer text-center p-3 px-5  rounded border border-green-500">Shop Now</p>
                        </a>
                    </div>
                </a>
            </div>
            <div class="bg-white hover:cursor-pointer w-full">
                <a href="shop-item.php">
                    <img src="./images/download (12).jpeg" alt="" class="w-[250px] mx-[30px] px-[30px] h-[200px]">
                    <span class="text-black p-4">$25.00<del class="mx-3 text-gray-400 line-through">$30.00</del></span>
                    <p class="text-black opacity-90 font-bold text-xl p-3">Pure & Fresh Tomato from the UP Farm</p>
                    <div class="flex my-4">
                        <p class="hover:bg-yellow-400 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-1 text-xl rounded text-green-700 mx-4 h-[44px] w-[120px]">Cart<i class="ri-shopping-basket-fill pl-2 text-xl"></i></p>
                        <a href="shop-item.php">
                            <p class="hover:bg-green-700 hover:text-white duration-300 cursor-pointer text-center p-3 px-5  rounded border border-green-500">Shop Now</p>
                        </a>
                    </div>
                </a>
            </div>
            <div class="bg-white hover:cursor-pointer w-full">
                <a href="shop-item.php">
                    <img src="./images/download (7).jpeg" alt="" class="w-[250px] mx-[30px] px-[30px] h-[200px]">
                    <span class="text-black p-4">$50.00<del class="mx-3 text-gray-400 line-through">$64.00</del></span>
                    <p class="text-black opacity-90 font-bold text-xl p-3">Pure & Fresh Orange from the Farm</p>
                    <div class="flex my-4">
                        <p class="hover:bg-yellow-400 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-1 text-xl rounded text-green-700 mx-4 h-[44px] w-[120px]">Cart<i class="ri-shopping-basket-fill pl-2 text-xl"></i></p>
                        <a href="shop-item.php">
                            <p class="hover:bg-green-700 hover:text-white duration-300 cursor-pointer text-center p-3 px-5  rounded border border-green-500">Shop Now</p>
                        </a>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- fresh fruit -->
    <div class="fruit-container bg-gray-50 md:px-[186px]">
        <div class="grid md:grid-cols-4 md:pt-[100px] gap-5">
            <div class="bg-white hover:cursor-pointer w-full">
                <a href="shop-item.php">
                    <img src="./images/e5.png" alt="" class="w-[250px] mx-[30px] px-[30px] h-[200px]">
                    <span class="text-black p-4">$200.00<del class="mx-3 text-gray-400 line-through">$204.00</del></span>
                    <p class="text-black opacity-90 font-bold text-xl p-3">Pure & Fresh fruit from the Farm</p>
                    <div class="flex my-4">
                        <p class="hover:bg-yellow-400 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-1 text-xl rounded text-green-700 mx-4 h-[44px] w-[120px]">Cart<i class="ri-shopping-basket-fill pl-2 text-xl"></i></p>
                        <a href="shop-item.php">
                            <p class="hover:bg-green-700 hover:text-white duration-300 cursor-pointer text-center p-3 px-5  rounded border border-green-500">Shop Now</p>
                        </a>
                    </div>
                </a>
            </div>
            <div class="w-full hover:cursor-pointer bg-white">
                <a href="shop-item.php">
                    <img src="./images/cherry-isolated-on-white-.webp" alt="" class="w-[250px] mx-[30px] px-[30px] h-[200px]">
                    <span class="text-black p-4">$400.00<del class="mx-3 text-gray-400 line-through">$440.00</del></span>
                    <p class="text-black opacity-90 font-bold text-xl p-3">Pure & Fresh Apple from the Kasmir Farm</p>
                    <div class="flex my-4">
                        <p class="hover:bg-yellow-400 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-1 text-xl rounded text-green-700 mx-4 h-[44px] w-[120px]">Cart<i class="ri-shopping-basket-fill pl-2 text-xl"></i></p>
                        <a href="shop-item.php">
                            <p class="hover:bg-green-700 hover:text-white duration-300 cursor-pointer text-center p-3 px-5  rounded border border-green-500">Shop Now</p>
                        </a>
                    </div>
                </a>
            </div>
            <div class="bg-white hover:cursor-pointer w-full">
                <a href="shop-item.php">
                    <img src="./images/images (29).jpeg" alt="" class="w-[250px] mx-[30px] px-[30px] h-[200px]">
                    <span class="text-black p-4">$25.00<del class="mx-3 text-gray-400 line-through">$30.00</del></span>
                    <p class="text-black opacity-90 font-bold text-xl p-3">Pure & Fresh Tomato from the UP Farm</p>
                    <div class="flex my-4">
                        <p class="hover:bg-yellow-400 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-1 text-xl rounded text-green-700 mx-4 h-[44px] w-[120px]">Cart<i class="ri-shopping-basket-fill pl-2 text-xl"></i></p>
                        <a href="shop-item.php">
                            <p class="hover:bg-green-700 hover:text-white duration-300 cursor-pointer text-center p-3 px-5  rounded border border-green-500">Shop Now</p>
                        </a>
                    </div>
                </a>
            </div>
            <div class="bg-white hover:cursor-pointer w-full">
                <a href="shop-item.php">
                    <img src="./images/banana-white-4.avif" alt="" class="w-[250px] mx-[30px] px-[30px] h-[200px]">
                    <span class="text-black p-4">$50.00<del class="mx-3 text-gray-400 line-through">$64.00</del></span>
                    <p class="text-black opacity-90 font-bold text-xl p-3">Pure & Fresh Banana from the Farm</p>
                    <div class="flex my-4">
                        <p class="hover:bg-yellow-400 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-1 text-xl rounded text-green-700 mx-4 h-[44px] w-[120px]">Cart<i class="ri-shopping-basket-fill pl-2 text-xl"></i></p>
                        <a href="shop-item.php">
                            <p class="hover:bg-green-700 hover:text-white duration-300 cursor-pointer text-center p-3 px-5  rounded border border-green-500">Shop Now</p>
                        </a>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- fresh vagitable -->
    <div class="fruit-container bg-gray-50 md:px-[186px]">
        <div class="grid md:grid-cols-4 md:pt-[100px] gap-5">
            <div class="bg-white hover:cursor-pointer w-full">
                <a href="shop-item.php">
                    <img src="./images/young-green-pea.jpg" alt="" class="w-[250px] mx-[30px] px-[30px] h-[200px]">
                    <span class="text-black p-4">$120.00<del class="mx-3 text-gray-400 line-through">$134.00</del></span>
                    <p class="text-black opacity-90 font-bold text-xl p-3">Pure & Fresh fuit from the Farm</p>
                    <div class="flex my-4">
                        <p class="hover:bg-yellow-400 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-1 text-xl rounded text-green-700 mx-4 h-[44px] w-[120px]">Cart<i class="ri-shopping-basket-fill pl-2 text-xl"></i></p>
                        <a href="shop-item.php">
                            <p class="hover:bg-green-700 hover:text-white duration-300 cursor-pointer text-center p-3 px-5  rounded border border-green-500">Shop Now</p>
                        </a>
                    </div>
                </a>
            </div>
            <div class="w-full hover:cursor-pointer bg-white">
                <a href="shop-item.php">
                    <img src="./images/lemon-with.avif" alt="" class="w-[250px] mx-[30px] px-[30px] h-[200px]">
                    <span class="text-black p-4">$450.00<del class="mx-3 text-gray-400 line-through">$510.00</del></span>
                    <p class="text-black opacity-90 font-bold text-xl p-3">Pure & Fresh Apple from the Kasmir Farm</p>
                    <div class="flex my-4">
                        <p class="hover:bg-yellow-400 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-1 text-xl rounded text-green-700 mx-4 h-[44px] w-[120px]">Cart<i class="ri-shopping-basket-fill pl-2 text-xl"></i></p>
                        <a href="shop-item.php">
                            <p class="hover:bg-green-700 hover:text-white duration-300 cursor-pointer text-center p-3 px-5  rounded border border-green-500">Shop Now</p>
                        </a>
                    </div>
                </a>
            </div>
            <div class="bg-white hover:cursor-pointer w-full">
                <a href="shop-item.php">
                    <img src="./images/one-bringal.avif" alt="" class="w-[250px] mx-[30px] px-[30px] h-[200px]">
                    <span class="text-black p-4">$105.00<del class="mx-3 text-gray-400 line-through">$120.00</del></span>
                    <p class="text-black opacity-90 font-bold text-xl p-3">Pure & Fresh Tomato from the UP Farm</p>
                    <div class="flex my-4">
                        <p class="hover:bg-yellow-400 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-1 text-xl rounded text-green-700 mx-4 h-[44px] w-[120px]">Cart<i class="ri-shopping-basket-fill pl-2 text-xl"></i></p>
                        <a href="shop-item.php">
                            <p class="hover:bg-green-700 hover:text-white duration-300 cursor-pointer text-center p-3 px-5  rounded border border-green-500">Shop Now</p>
                        </a>
                    </div>
                </a>
            </div>
            <div class="bg-white hover:cursor-pointer w-full">
                <a href="shop-item.php">
                    <img src="./images/red-onion-white.avif" alt="" class="w-[250px] mx-[30px] px-[30px] h-[200px]">
                    <span class="text-black p-4">$250.00<del class="mx-3 text-gray-400 line-through">$260.00</del></span>
                    <p class="text-black opacity-90 font-bold text-xl p-3">Pure & Fresh Banana from the Farm</p>
                    <div class="flex my-4">
                        <p class="hover:bg-yellow-400 bg-green-200 hover:text-white duration-300 cursor-pointer text-center p-1 text-xl rounded text-green-700 mx-4 h-[44px] w-[120px]">Cart<i class="ri-shopping-basket-fill pl-2 text-xl"></i></p>
                        <a href="shop-item.php">
                            <p class="hover:bg-green-700 hover:text-white duration-300 cursor-pointer text-center p-3 px-5  rounded border border-green-500">Shop Now</p>
                        </a>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex gap-5 py-5">
            <button class="border-2 border-gray-400 hover:border-green-500 h-[59px] w-[60px] text-center p-4 rounded-full">1</button>
            <button class="border-2 border-gray-400 hover:border-green-500 h-[59px] w-[60px] text-center p-4 rounded-full">2</button>
            <button class="border-2 border-gray-400 hover:border-green-500 h-[59px] w-[60px] text-center p-4 rounded-full">3</button>
            <button class="border-2 border-gray-400 hover:border-green-500 h-[59px] w-[60px] text-center p-4 rounded-full">4</button>
            <!-- <button class="border-2 border-gray-400 hover:border-green-500 h-[59px] w-[60px] text-center p-4 rounded-full">...</button> -->
            <button class="border-2 border-green-500 w-[120px] rounded-full">Next</button>
        </div>
    </div>
    <div class="deal">
        <div class="md:p-[50px] md:flex md:justify-between bg-black opacity-50 h-full md:px-[186px] md:w-full">
            <div class="p-3">
                <h1 class="text-7xl opacity-80 text-white font-bold">Deal Of The Day</h1>
                <p class="my-5 text-gray-400 md:w-[600px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut optio vero alias aliquid, blanditiis repellendus dolor, corrupti accusantium explicabo et repellat? Provident, veritatis voluptatibus, totam ipsa accusamus obcaecati consequuntur
                    nesciunt nobis, voluptates quaerat commodi. Repellat quis quasi nulla enim dolorem!</p>
                <!-- <div class="watch">
                    <div class="time" id="time"></div>
                </div> -->
                <div class="countdown flex gap-5 my-10 justify-between w-[400px]" id="countdown">
                    <div class="bg-black w-[140px] h-[110px] border-2">
                        <div class="text-white font-bold time text-center text-5xl p-3" id="days">00</div>
                        <div class="text-black font-bold text-center p-1 text-xl bg-white label">Days</div>
                    </div>
                    <div class="bg-black w-[140px] h-[110px] border-2">
                        <div class="text-white font-bold time text-center text-5xl p-3" id="hours">00</div>
                        <div class="text-black font-bold text-center p-1 text-xl bg-white label">Hours</div>
                    </div>
                    <div class="bg-black w-[140px] h-[110px] border-2">
                        <div class="text-white font-bold time text-center text-5xl p-3" id="minutes">00</div>
                        <div class="text-black font-bold text-center p-1 text-xl bg-white label">Minutes</div>
                    </div>
                    <div class="bg-black w-[140px] h-[110px] border-2">
                        <div class="text-white font-bold time text-center text-5xl p-3" id="seconds">00</div>
                        <div class="text-black font-bold text-center p-1 text-xl bg-white label">Seconds</div>
                    </div>
                </div>
                <a href="deal.php" class="text-white border-2 border-green-500 bg-green-900 p-3 text-4xl rounded">Get The Deal</a>
            </div>
            <div id="deal-img" class="bg-white z-50 rounded-full h-[400px] overflow-hidden w-[400px]"><img src="./images/deal_fruit2.png" alt="" class="md:w-full md:h-full hover:scale-125"></div>
        </div>
    </div>
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
    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js "></script>
    <!-- slick end -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".main i").click(function() {
                $(".menu").toggleClass("main");
            });
        });
    </script>
    <!-- date time -->
    <script>
        function updateCountdown() {
            const targetDate = new Date('2023-10-31T23:59:59'); // Change this to your target date and time
            const now = new Date();
            const timeDifference = targetDate - now;

            if (timeDifference > 0) {
                const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                $('#days').text(days.toString().padStart(2, '0'));
                $('#hours').text(hours.toString().padStart(2, '0'));
                $('#minutes').text(minutes.toString().padStart(2, '0'));
                $('#seconds').text(seconds.toString().padStart(2, '0'));
            } else {
                // Countdown has expired
                $('#countdown').php('<div class="expired">Countdown Expired</div>');
            }
        }

        $(document).ready(function() {
            updateCountdown();
            setInterval(updateCountdown, 1000); // Update every second
        });
    </script>
    <!-- <script>
        function updateTime() {
            const now = new Date();
            const day = now.getDay().toString().padStart(2, '10');
            const hours = now.getHours().toString().padStart(2, '10');
            const minutes = now.getMinutes().toString().padStart(2, '10');
            const seconds = now.getSeconds().toString().padStart(2, '10');

            const timeString = `${day}:${hours}:${minutes}:${seconds}`;
            $('#time').text(timeString);
        }

        $(document).ready(function() {
            updateTime();
            setInterval(updateTime, 1000); // Update every second
        });
    </script> -->
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

</html>

</html>