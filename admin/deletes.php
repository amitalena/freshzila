<?php
include 'connection.php';
$id=$_GET['deletes'];
$query="DELETE FROM `upload_products` where `product_id`='$id'";

$run=mysqli_query($conct,$query);
if($run==true){
    ?><script>
        alert('Data deleted Successfully....');
        window.open('view-product.php','_self');
    </script>
    <?php
}
?>