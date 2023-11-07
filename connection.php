<?php
$conct=mysqli_connect("localhost","root","","grocery");
if(mysqli_connect_errno()){
    echo "Connection Failed tryu again:".mysqli_connect_error();
}