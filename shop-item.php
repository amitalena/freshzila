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
        .review {
            position: absolute;
            border-radius: 10px;
            border-left: 2px solid black;
        }
        
        .review::before {
            content: "";
            position: absolute;
            right: 100%;
            top: 20px;
            width: 0;
            height: 0;
            border-top: 20px solid transparent;
            border-right: 36px solid white;
            border-bottom: 13px solid transparent;
        }
    </style>
</head>

<body>
<?php include 'nav.php'; ?>
    <!-- shop item -->
    <section class="shop-items bg-green-50 md:px-[186px] md:h-screen">
        <div class="bg-white md:flex md:justify-between md:p-[60px] p-3" id="shop-item">
            <div class="md:w-[550px] md:h-[400px] overflow-hidden my-10">
                <a href="shop-item.php">
                    <img src="./images/images (1) (7).jpeg" alt="" class="w-[300px] hover:scale-150">
                </a>
            </div>
            <div class="md:w-[700px] md:ml-[30px]">
                <h1 class="text-black text-4xl font-bold">Fresh Grown Strawberries</h1>
                <span class="text-xl my-5 text-green-500">
                    <a href="rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                    </a>
                </span>
                <div class="text-black text-green-600 my-5"><span class="text-green-500 font-bold text-2xl">$20.00</span><del class="mx-3 text-gray-400 line-through">$34.00</del><span class="text-gray-400">Free delivery</span></div>
                <p class="text-gray-400 w-[400px] py-4">Dolor sit amet consectetur adipisicing elit. Animi iste, minus quibusdam quam ipsam autem nihil atque velit, nesciunt quo dolores tempora praesentium consequuntur deserunt eum natus beatae dolor.</p>
                <div class="flex">
                    <h3 class="text-2xl font-bold">Quntity:</h3>
                    <input type="number" placeholder="1" class="border-2 bg-gray-50 border-gray-500 text-xl px-3 p-2 rounded mx-3 w-[100px]">
                </div>
                <div class="flex my-4">
                    <a href="./shoping-cart.php" class="hover:bg-green-500 bg-green-500 hover:text-black duration-300 cursor-pointer text-center p-2 rounded text-white h-[50px] w-[150px]"><i class="ri-shopping-cart-fill px-2 text-xl"></i>Add To Cart</a>
                </div>
            </div>
        </div>
    </section>
    <div class="px-[186px] bg-green-50">
        <div class="filter-container bg-gray-50 p-[50px]">
            <div class="ml-[300px]">
                <button class="filter-btn p-3 text-2xl border-b-black" data-filter="category1">Product description</button>
                <button class="filter-btn p-3 text-2xl border-b-black" data-filter="category2">Reviews(02)</button>
                <button class="filter-btn p-3 text-2xl border-b-black" data-filter="category3">Additional Information</button>
            </div>
            <!-- Add more buttons for different categories as needed -->
            <div class="items-container my-[50px]">
                <!-- Your content items go here with appropriate data-filter attributes -->
                <div class="item w-full h-full" data-category="category1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
            </div>
            <div class="item w-[400px] h-[300px]" data-category="category2">
                <div class="relative">
                    <div class="review">
                        <h1>Amit kumar</h1>
                        <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada, labore aute irudre dolor id dignissim sapien apien aute irudre dolor in elit sed uta labore aute irudre dolor in elit sed uta labore labore aute irudre dolor.
                        </p>
                        <a href="follow">Follow</a>
                    </div>
                    <div></div>
                </div>
            </div>
            <div class="item h-full w-full h-[300px]" data-category="category3">
                <div class="img-port relative">
                    <h1>Additional information of the product</h1>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

                </div>
            </div>
            <!-- Add more items with data-category attributes corresponding to the categories -->
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Filter button click event
            $('.filter-btn').click(function() {
                var category = $(this).data('filter');

                // Show only items with the selected category or show all if 'all' is selected
                if (category === '') {
                    $('.item').show();
                } else {
                    $('.item').hide();
                    $('.item[data-category="' + category + '"]').show();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".main i").click(function() {
                $(".menu").toggleClass("main");
            });
        });
    </script>
</body>

</html>