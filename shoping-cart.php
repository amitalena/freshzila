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
</head>

<body>
<?php include 'nav.php'; ?>
    <!-- shoping cart -->
    <section class="shoping-cart md:py-[150px] md:px-[186px]">
        <h1 class="text-5xl text-center font-bold text-gray-700 uppercase my-5">shoping cart</h1>
        <table class="w-full border">
            <tr class="bg-gray-300">
                <th class="w-[300px]">
                    <h1 class="p-4 text-gray-700">S.No.</h1>
                </th>
                <th class="w-[300px]">
                    <h1 class="p-4 text-gray-700">Product</h1>
                </th>
                <th class="w-[300px]">
                    <h1 class="p-4 text-gray-700">Product Name</h1>
                </th>
                <th class="w-[300px]">
                    <h1 class="p-4 text-gray-700">Quantity</h1>
                </th>
                <th class="w-[300px]">
                    <h1 class="p-4 text-gray-700">Price</h1>
                </th>
                <th></th>
            </tr>
            <tr>
            <td class="border">
                    <p class="text-center text-2xl">1</p>
                </td>
                <td class="border"><img src="./images/images (1) (7).jpeg" alt="" class="w-[100px] h-[100px] mx-10"></td>
                <td class="border">
                    <p class="text-center text-2xl">Strawberry</p>
                </td>
                <td class="border">
                    <input type="number" placeholder="1" class="text-center text-xl mx-[100px]">
                </td>
                <td class="text-center text-xl border font-bold">$120.00</td>
                <td><button class="bg-none border-1 border-red-500 bg-red-200 rounded p-3">Remove</button></td>

            </tr>
            <tr>
            <td class="border">
                    <p class="text-center text-2xl">2</p>
                </td>
                <td class="border"><img src="./images/download (15).jpeg" alt="" class="w-[100px] h-[100px] mx-10"></td>
                <td class="border">
                    <p class="text-center text-2xl">Apple</p>
                </td>
                <td class="border">
                    <input type="number" placeholder="1" class="text-center text-xl mx-[100px]">
                </td>
                <td class="text-center text-xl border font-bold">$70.00</td>
                <td><button class="bg-none border-1 border-red-500 bg-red-200 rounded p-3">Remove</button></td>

            </tr>
            <tr>
            <td class="border">
                    <p class="text-center text-2xl">3</p>
                </td>
                <td class="border"><img src="./images/download (12).jpeg" alt="" class="w-[100px] h-[100px] mx-10"></td>
                <td class="border">
                    <p class="text-center text-2xl">Tomato</p>
                </td>
                <td class="border">
                    <input type="number" placeholder="1" class="text-center text-xl mx-[100px]">
                </td>
                <td class="text-center text-xl border font-bold">$70.00</td>
                <td><button class="bg-none border-1 border-red-500 bg-red-200 rounded p-3">Remove</button></td>

            </tr>
            <tr>
            <td class="border">
                    <p class="text-center text-2xl">4</p>
                </td>
                <td class="border"><img src="./images/download (7).jpeg" alt="" class="w-[100px] h-[100px] mx-10"></td>
                <td class="border">
                    <p class="text-center text-2xl">Orange</p>
                </td>
                <td class="border">
                    <input type="number" placeholder="1" class="text-center text-xl mx-[100px]">
                </td>
                <td class="text-center text-xl border font-bold">$220.00</td>
                <td><button class="bg-none border-1 border-red-500 bg-red-200 rounded p-3">Remove</button></td>
            </tr>
            <tr>
                <td></td>
                <td class="border"></td>
                <td class="border">
                    <p class="text-center text-2xl"></p>
                </td>
                <td class="border p-2">
                    <h1 class="text-center p-1 text-gray-400 font-bold">Price(4Item) :</h1>
                    <h2 class="text-center p-1 text-gray-400 font-bold">Delivery :</h2>
                    <h1 class="text-black text-center font-bold">Total Payable :</h1>
                </td>
                <td class="text-center border font-bold">
                    <h1 class="text-gray-400">$480.00</h1>
                    <h2 class="text-gray-400">$20.00</h2>
                    <h1 class="text-xl text-black">$500.00</h1>
                </td>
            </tr>
        </table>
        <div class="flex md:my-4 flex justify-end">
            <a href="./shop.php">
                <p class="text-white bg-green-700 duration-300 cursor-pointer w-[200px] text-center p-3 px-5 rounded border h-[50px] w-[150px] border-green-500">Continue Shopping</p>
            </a>
            <a href="./form.php" class="bg-black hover:text-whit duration-300 cursor-pointer text-center p-2 rounded text-white mx-4 h-[50px] w-[150px]"><i class="ri-shopping-cart-fill px-2 text-xl"></i>Checkout</a>
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
                    <span class="my-2 hover:text-white hover:scale-95 duration-300 "><a href="about.php">About Us</a></span>
                    <span class="my-1 hover:text-white hover:scale-95 duration-300 "><a href="blog.php">Blog posts</a></span>
                    <span class="my-1 hover:text-white hover:scale-95 duration-300 "><a href="services.php">Our services</a></span>
                    <span class="my-1 hover:text-white hover:scale-95 duration-300 "><a href="contact.php">ContactUs</a></span>
                    <span class="my-1 hover:text-white hover:scale-95 duration-300 "><a href="gallery.php">Food gallery</a></span>
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js "></script>
    <script>
        $(document).ready(function() {
            $(".main i ").click(function() {
                $(".menu ").toggleClass("main ");
            });
        });
    </script>
</body>

</html>