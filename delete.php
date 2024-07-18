<?php
    include('connect.php');
    // error_reporting(0);
    $id=$_GET['id'];
    $query="delete from record where id='$id'";
    $data=mysqli_query($con,$query);
    if($data){
        echo 'abanajknak';
        echo "<script>Record deleted</script>";
        ?>
        <!-- <META HTTP-EQUIV="Refresh" CONTENT="0" URL=http://localhost/MB/display.php>; -->
        <meta http-equiv="refresh" content="0;URL='http://localhost/MB/display.php'" />   
        <?php
    }
?>