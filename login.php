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
        .sign-in{
            background-image: url('./images/background-dshdjhs.avif');
            background-repeat: no-repeat;
            background-size: cover;
        }
        #sign-in{
            background-image: url('./images/background-dshdjhs.avif');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
  <?php include "nav.php"; ?>
        <div id="sign-in" class="w-full p-3 bg-red-500 py-[100px] md:px-[100px]">
           <div class="md:flex justify-center border-2 shadow-3xl border-red-500 mt-[70px] md:px-[200px]">
                <form action="" class="sign-in p-5 bg-green-500 w-[450px]">
                    <h1 class="text-white font-bold text-3xl uppercase text-center shadow-2xl">Sign-In Form</h1>
                    <div class="grid md:grid-cols-1 p-5 mt-5">
                        <label for="name" class="text-white">User Name</label>
                        <input type="text" placeholder="Name" class="bg-white my-3 w-full outline-none bg-none p-3 rounded normal-case">
                        <label for="pass" class="text-white">Password</label>
                        <input type="password" placeholder="Password" class="bg-white my-3 w-full outline-none bg-none p-3 rounded normal-case">
                        <span class="text-white flex my-4">Forget password?<p class="text-green-400 mx-3"><a href="login.php">Clikc here</a></p></span>
                        <button type="submit" class="bg-green-800 p-3 text-white">Login</button>
                    </div>
                    <div class="flex ml-5 text-gray-300">
                        <p>Want to Create account?</p>
                        <a href="./register.php" class="mx-2 font-sm text-red-500">Sign Up</a>
                    </div>
                </form>
                <div class="text-center">
                    <img src="./images/sign-concept.avif" alt="" class="h-full md:w-[450px]">
                </div>
            </div>
        </div>
    </div>
</body>
</html>