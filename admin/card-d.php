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
    <section id="card-d" class="bg-slate-300 h-full">
        <div class="ml-[150px] py-6">
           <div class="flex"> 
                <p class="text-xl rounded border-2 h-[40px] px-2 border-white pt-1 text-center text-white">Category:</p>
                <select name="categories" id="categ" class="bg-none outline-none text-blue-500 h-[40px] mx-2 p-1 rounded">
                    <option value="">Select here..</option>
                    <option value="Apple">Apple</option>
                    <option value="Mango">Mango</option>
                    <option value="Banana">Banana</option>
                    <option value="Orange">Orange</option>
                    <option value="Tomato">Tomato</option>
                    <option value="Potato">Potato</option>
                    <option value="Carliflawer">Carliflawer</option>
                    <option value="Brinjal">Brinjal</option>
                </select>
                <button class="bg-green-600 h-[40px] text-white rounded p-1 px-2 w-[100px]">Go</button>
            </div>
        </div>
        <div class="ml-[150px]">
            <table class="w-full">
                <tr>
                    <th colspan="9" class="p-3 text-3xl text-white font-bold bg-blue-600">Product Details</th>
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
                </tr>
                <tr>
                    <td class="text-center border-2 border-white p-2 text-gray-700">1</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><img src="../images/240_F-juise.jpg" alt="" class="rounded p-1 h-[150px] w-[250px]"></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">Apple</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">$200</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><s>$230</s></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">Apple</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">This is fresh Apple</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><button class="bg-blue-600 text-white rounded p-1 px-2">Edited</button></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><button class="bg-red-600 text-white rounded p-1 px-2">Deleted</button></td>
                </tr>
                <tr>
                    <td class="text-center border-2 border-white p-2 text-gray-700">1</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><img src="../images/240_F-juise.jpg" alt="" class="rounded p-1 h-[150px] w-[250px]"></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">Apple</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">$200</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><s>$230</s></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">Apple</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">This is fresh Apple</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><button class="bg-blue-600 text-white rounded p-1 px-2">Edited</button></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><button class="bg-red-600 text-white rounded p-1 px-2">Deleted</button></td>
                </tr>
                <tr>
                    <td class="text-center border-2 border-white p-2 text-gray-700">1</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><img src="../images/240_F-juise.jpg" alt="" class="rounded p-1 h-[150px] w-[250px]"></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">Apple</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">$200</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><s>$230</s></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">Apple</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">This is fresh Apple</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><button class="bg-blue-600 text-white rounded p-1 px-2">Edited</button></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><button class="bg-red-600 text-white rounded p-1 px-2">Deleted</button></td>
                </tr>
                <tr>
                    <td class="text-center border-2 border-white p-2 text-gray-700">1</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><img src="../images/240_F-juise.jpg" alt="" class="rounded p-1 h-[150px] w-[250px]"></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">Apple</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">$200</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><s>$230</s></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">Apple</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700">This is fresh Apple</td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><button class="bg-blue-600 text-gray-100 rounded p-1 px-2">Edited</button></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><button class="bg-red-600 text-gray-100 rounded p-1 px-2">Deleted</button></td>
                    <td class="text-center border-2 border-white p-2 text-gray-700"><button class="bg-green-600 text-gray-100 rounded p-1 px-2">Add to Cart</button></td>
                </tr>
            </table>
        </div>
    </section>
</body>
</html>