<?php
include 'connection.php';
$id=$_GET['deleted'];
$query="DELETE FROM `user_auths` where `user_id`='$id'";

$run=mysqli_query($conct,$query);
if($run==true){
    ?><script>
        alert('user detail deleted Successfully....');
        window.open('user.php','_self');
    </script>
    <?php
}
?>