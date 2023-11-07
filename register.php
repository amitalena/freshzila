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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .sign-up{
            background-image: url('./images/background-dshdjhs.avif');
            background-repeat: no-repeat;
            background-size: cover;
        }
        #sign-up{
            background-image: url('./images/background-dshdjhs.avif');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
  <?php include "nav.php"; ?>
        <div id="sign-up" class="w-full p-3 bg-red-500 py-[50px] md:px-[100px]">
           <div class="border-2 md:flex md:justify-center shadow-3xl border-red-500 mt-[70px] md:px-[200px]">
                <div class="text-center">
                    <img src="./images/sign-up-concept.avif" alt="" class="h-full md:w-[450px]">
                </div>
                <form action="register.php" method="POST" class="sign-up p-5 bg-green-500 w-[450px]">
                    <h1 class="text-white font-bold text-3xl uppercase text-center shadow-2xl">Sign-Up Form</h1>
                    <div class="grid md:grid-cols-1 p-5 mt-5">
                        <label for="name" class="text-white">Name</label>
                        <input type="text" name="user_name" required placeholder="Name" class="bg-white my-3 w-full outline-none bg-none p-3 rounded normal-case">
                        <label for="email" class="text-white">Email</label>
                        <input type="email" name="user_email" required placeholder="Email" class="bg-white my-3 w-full outline-none bg-none p-3 rounded normal-case">
                        <label for="pass" class="text-white">Password</label>
                        <input type="password" name="user_pass" required placeholder="Password" class="bg-white my-3 w-full outline-none bg-none p-3 rounded normal-case">
                        <label for="addr" class="text-white">Address</label>
                        <input type="text" name="user_address" required placeholder="Address" class="bg-white my-3 w-full outline-none bg-none p-3 rounded normal-case">
                        <label for="phone" class="text-white">Phone</label>
                        <input type="number" name="user_phone" required placeholder="Phone Number" class="bg-white my-3 w-full outline-none bg-none p-3 rounded normal-case">
                        <div class="flex my-3"><input type="checkbox" required checked class="mr-3 text-xl text-blue-500">
                        <p class="text-white normal-case">I agree to <span class="text-blue-500">term of condition</span></p>
                        </div>
                        <button type="submit" name="registered" class="bg-green-800 p-3 text-white">Register</button>
                    </div>
                    <div class="flex ml-5 text-gray-300">
                        <p>You have already an account?</p>
                        <a href="./login.php" class="mx-2 font-sm text-red-500">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['registered'])){
    $user_name=$_POST['user_name'];
    $user_email=$_POST['user_email'];
    $user_pass=$_POST['user_pass'];
    $user_address=$_POST['user_address'];
    $user_phone=$_POST['user_phone'];

    $query=mysqli_query($conct,"INSERT INTO `user_auths`(`user_name`, `user_email`, `user_pass`, `user_address`, `user_phone`) VALUES ('$user_name', '$user_email', '$user_pass', '$user_address', '$user_phone')");

    if($query){
        echo "<script>alert('Register Successfully')</script>";
        echo "<script>window.open('shoping-cart.php','_self')</script>";
    }else{
        echo "<script>alert('Failed to register')</script>";
    }
}
?>