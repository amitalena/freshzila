<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit hub</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
   <nav class="container bg-blue-600">
   <h1 class="text-4xl text-white p-4 font-bold text-center">Welcome to Admin Pannel</h1>
   <div class="flex justify-center relative">
    <span class="bg-white absolute ml-[-150px] w-[150px] h-[3px] rounded-full"></span>
    <span class="bg-gray-100 absolute z-50 w-[20px] mt-[-5px] h-[20px] shadow-2xl rounded-full"></span>
    <span class="bg-white absolute ml-[150px] mt-2 w-[150px] h-[3px] rounded-full"></span>
   </div>
    <div class="container menu p-3">
       <ul class="md:flex md:justify-between md:px-[150px] py-5">
        <li class="text-white"><a href="home1.php">Home</a></li>
        <li class="text-white"><a href="upload.php">Uploade Product</a></li>
        <li class="text-white"><a href="view-product.php">View Product</a></li>
        <li class="text-white"><a href="user.php">User List</a></li>
        <li class="text-white"><a href="card-d.php">Card Details</a></li>
        <li class="text-white"><a href="change.php">Change Password</a></li>
        <li class="text-white"><a href="../index.php">LogOut</a></li>
       </ul>
    </div>
    <div class="main md:hidden ml-[-100px]">
            <i class="ri-menu-line font-bold text-3xl"></i>
        </div>
   </nav>
   <div class="md:my-[50px] h-full">
    <h1 class="text-center bg-red-500 mx-[320px] text-white uppercase font-bold p-2 rounded-sm ">Change Admin Password</h1>
    <div class="justify-center mx-2 my-[150px] absolute md:ml-[420px] sect">
        <div class="w-[700px] sect1 flex justify-between border-2 border-blue-500">
            <h1 class="p-3">Old Password</h1>
            <input type="text" class="rounded bg-red-600 w-[400px] m-1 text-center text-gray-100 p-2">
            <!-- <p><?php echo $total_rows; ?></p> -->
        </div>
        <div class="w-[700px] sect1 flex justify-between border-2 border-blue-500 my-10">
            <h1 class="p-3">New Password</h1>
            <input type="text" class="rounded bg-red-600 w-[400px] m-1 text-center text-gray-100 p-2">
            <!-- <p><?php echo $product_count; ?></p> -->
        </div>
        <button class="p-2 bg-blue-600 text-white ml-[250px] rounded w-[200px]">Change Password</button>
    </div>
   </div>


   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".main i").click(function() {
                $(".menu").toggleClass("main");
            });
        });
    </script>
</body>
</html>