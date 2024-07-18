<?php
    $con=mysqli_connect('localhost','root','','ship');
    if($con){
        // echo "connection ok";
    }
    else{
        die(mysqli_error("Error"+$con));
    }
?>