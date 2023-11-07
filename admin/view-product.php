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
           <form method="POST" action="view-product.php" class="flex"> 
                <p class="text-xl rounded border-2 h-[40px] px-2 border-white pt-1 text-center text-black">Category:</p>
                <select name="categories" id="categ" class="bg-none outline-none text-blue-500 h-[40px] mx-2 p-1 px-2 rounded">
                <option value="">Select Fruit</option>
                <?php
                include 'connection.php';
                $query = "SELECT distinct(product_catg) FROM `upload_products` order by product_catg asc";
                $i=1;
                $run = mysqli_query($conct,$query);
                while($row=mysqli_fetch_array($run))
                {
                $product_catg=$row['product_catg'];
                ?>
                <option value="<?php echo $product_catg;?>">
                <?php echo $product_catg;?>
               <?php } ?>
                </select>
                <button class="bg-green-600 h-[40px] text-white rounded p-1 px-2 w-[100px]">Go</button>
            </form>
        </div>
        <div class="mx-[150px]">
            <table class="w-full">
                <tr>
                    <th colspan="10" class="p-3 text-3xl bg-blue-600 text-white font-bold">Product Details</th>
                </tr>
                <tr class="p-1">
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">S.N.</th>
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Image</th>
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Name</th>
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Category</th>
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Max Price</th>
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Min Price</th>
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Description</th>
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Edit</th>
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Delete</th>
                    <th class="text-center p-1 border-2 border-white mx-5 text-gray-700 text-xl">Add Card</th>
                </tr>
                <?php
                    include 'connection.php';
                    $query = "SELECT * FROM `upload_products` order by product_id";
                    $i=1;
                    $run = mysqli_query($conct,$query);
                    while($row=mysqli_fetch_array($run))
                    {
                        $product_id=$row['product_id'];
                        $product_name=$row['product_name'];
                        $product_catg=$row['product_catg'];
                        $product_max=$row['product_max'];
                        $product_min=$row['product_min'];
                        $product_detail=$row['product_detail'];
                        $product_image=$row['product_image'];
                    
                    ?>
                <tr>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><?php echo $i++; ?></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><img src="../images/<?php echo $product_image ?>" alt="" class="rounded p-1 h-[150px] w-[250px]"></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><?php echo $product_name; ?></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><?php echo $product_catg; ?></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">$<?php echo $product_max; ?></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><s>$<?php echo $product_min; ?></s></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><?php echo $product_detail; ?></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><a href="updates.php?update=<?php echo $product_id;?>"><button class="bg-blue-600 text-gray-100 rounded p-1 px-2">Edited</button></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><a href="deletes.php?deletes=<?php echo $product_id;?>"><button class="bg-red-600 text-gray-100 rounded p-1 px-2">Deleted</button></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><a href="Card.php?add=<?php echo $product_id;?>"><button class="bg-green-600 text-gray-100 w-[100px] rounded p-1 px-2">Add to Cart</button></td>
                </tr>
                <?php }; ?>
            </table>
        </div>
    </section>
</body>
</html>