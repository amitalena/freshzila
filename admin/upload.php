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
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php include 'header1.php'; ?>
    <div class="bg-gray-300 py-[60px]">
        <form action="upload.php" method="POST" enctype="multipart/form-data" class="flex justify-center h-[480px]">
            <table class="border-2 w-[450px] h-full">
                <tr>
                    <td class="p-2 text-white font-bold"><label for="name">Product Name</label></td>
                    <td class="mx-4 text-center"><input id="product_name" name="product_name" type="text" placeholder="Enter Your Name" class="w-[270px] outline-none text-blue-500 p-2"></td>
                </tr>
                <tr>
                    <td class="p-2 text-white font-bold"><label for="name">Category</label></td>
                    <td class="mx-4 text-center">
                        <select name="product_catg" id="categ" class="w-[270px] outline-none text-blue-500 p-2">
                            <option value="">Select here..</option>
                            <option value="Apple">Apple</option>
                            <option value="Banana">Banana</option>
                            <option value="Brinjal">Brinjal</option>
                            <option value="Carliflawer">Carliflawer</option>
                            <option value="Mango">Mango</option>
                            <option value="Orange">Orange</option>
                            <option value="Potato">Potato</option>
                            <option value="Strawberry">Strawberry</option>
                            <option value="Tomato">Tomato</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="p-2 text-white font-bold"><label for="max-price">Max Price</label></td>
                    <td class="mx-4 text-center"><input name="product_max" type="text" placeholder="Enter Max Price" class="w-[270px] outline-none text-blue-500 p-2"></td>
                </tr>
                <tr>
                    <td class="p-2 text-white font-bold"><label for="min-price">Min Price</label></td>
                    <td class="mx-4 text-center"><input name="product_min" type="text" placeholder="Enter Min Price" class="w-[270px] outline-none text-blue-500 p-2"></td>
                </tr>
                <tr>
                    <td class="p-2 text-white font-bold"><label for="disc">Description</label></td>
                    <td class="mx-4 text-center"><input name="product_detail" type="text" placeholder="Enter Min Price" class="w-[270px] outline-none text-blue-500 p-2"></td>
                </tr>
                <tr>
                    <td class="p-2 text-white font-bold"><label for="p-image">Product Image</label></td>
                    <td class="mx-4 text-center"><input name="product_image" type="file" placeholder="Enter Image" class="w-[270px] outline-none text-blue-500 p-2"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" class="mx-4 col-span-2"><button type="submit" onclick="done();" name="upload" class="bg-blue-500 text-white rounded p-2">Product Uploaded</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
    <?php include 'connection.php';
        if(isset($_POST['upload'])){
            $product_name=$_POST['product_name'];
            $product_catg=$_POST['product_catg'];
            $product_max=$_POST['product_max'];
            $product_min=$_POST['product_min'];
            $product_detail=$_POST['product_detail'];
            $product_image=$_FILES['product_image']['name'];
            $product_image_temp=$_FILES['product_image']['temp_name'];
            move_uploaded_file($product_image_temp,"product_images/".$product_image);
        }
   
    $query=mysqli_query($conct,"INSERT INTO `upload_products`(`product_name`, `product_catg`, `product_max`, `product_min`, `product_detail`, `product_image`) VALUES ('$product_name', '$product_catg', '$product_max', '$product_min', '$product_detail', '$product_image')");
    if($query){
        echo "<script>alert('Data saved')</script>";
        echo "<script>window.open('upload.php','_self')</script>";
    }
    else{
        echo "<script>alert('Failed')</script>";
    }
?>