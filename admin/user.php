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
    <?php include 'header1.php'; ?>
    <section class="bg-slate-300 h-full">
        <div class="ml-[150px] py-6">
           <div class="flex"> 
                <p class="text-xl rounded border-2 h-[40px] px-2 border-white pt-1 text-center text-white">Category:</p>
                <div class="bg-none outline-none text-gray-500 h-[40px] mx-3 rounded">
                    <input type="search" placeholder="User Name" class="p-2 rounded">
                </div>
                <button class="bg-green-600 h-[40px] text-white rounded p-1 px-2 w-[100px]">Go</button>
            </div>
        </div>
        <div class="mx-[150px]">
            <table class="w-full">
                <tr>
                    <th colspan="11" class="p-3 bg-blue-600 text-3xl text-white font-bold">User Details</th>
                </tr>
                <tr class="p-1">
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">S.N.</th>
                    <!-- <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Image</th> -->
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Name</th>
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Address</th>
                    <!-- <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">City</th>
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">State</th>
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Pin Code</th> -->
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Email-Id</th>
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Mobile NO</th>
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Password</th>
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Delete</th>
                </tr>
                <?php
                    include 'connection.php';
                    $query = "SELECT * FROM `user_auths` order by user_id";
                    $i=1;
                    $run = mysqli_query($conct,$query);
                    while($row=mysqli_fetch_array($run))
                    {
                        $user_id=$row['user_id'];
                        $user_name=$row['user_name'];
                        $user_email=$row['user_email'];
                        $user_pass=$row['user_pass'];
                        $user_address=$row['user_address'];
                        $user_phone=$row['user_phone'];
                    
                    ?>
                <tr>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><?php echo $i++;?></td>
                    <!-- <td class="text-center border-2 border-white p-2 text-gray-700"><img src="../images/blueberry-.avif" alt="" class="rounded p-1 h-[150px] w-[250px]"></td> -->
                    <td class="text-center border-2 border-white p-2 text-gray-700"><?php echo $user_name;?></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><?php echo $user_address;?></td>
                    <!-- <td class="text-center border-2 border-white p-2 text-gray-700">Varanasi</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">Uttar Pradesh</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">221003</td> -->
                    <td class="text-center border-2 border-white p-2 text-gray-700"><?php echo $user_email;?></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><?php echo $user_pass; ?></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">+91<?php echo $user_phone;?></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><a href="user_delete.php?deleted=<?php echo $user_id;?>"><button class="bg-green-600 text-white rounded p-1 px-2">Deleted</button></td>
                </tr>
                <?php ;} ?>
            </table>
        </div>
    </section>
</body>
</html>