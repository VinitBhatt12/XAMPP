<?php
    include('connect.php');
    error_reporting(0);
    $id=$_GET['id']; //variable vha se liye ,display se
    $date=$_GET['date'];
    $time=$_GET['time'];
    $sname=$_GET['sname'];
    $flag=$_GET['flag'];
    $posn=$_GET['posn'];
    $mla=$_GET['mla'];
    $lpc=$_GET['lpc'];
    $npc=$_GET['npc'];
    $msn=$_GET['msn'];
    $crn=$_GET['crn'];
    $len=$_GET['len'];
    $ton=$_GET['ton'];
    $crg=$_GET['crg'];
    $mmsi=$_GET['mmsi'];
    $inm=$_GET['inm'];
    $intc=$_GET['intc'];
    $imo=$_GET['imo'];
    $other=$_GET['other'];

    echo $id;
    echo $flag;
    echo $posn;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Update</title>
  </head>
  
  <body >
    <!-- <h1>Hello, world!</h1> -->
    <form method="post">
        <div class="div1 ">
        <div class="mb-3">
            <label >Date</label>
            <input type="date"  autocomplete="off" name="date" value=<?php echo $date?> >
        </div>
        <div class="mb-3">
            <label class="form-label">TIME</label>
            <input type="text"  autocomplete="off" name="time" value=<?php echo $time?>>
        </div>
        <div class="mb-3">
            <label class="form-label">NAME OF SHIP</label>
            <input type="text" autocomplete="off" name="sname" value=<?php echo $sname?>>
        </div>
        <div class="mb-3">
            <label class="form-label">FLAG</label>
            <input type="text"  autocomplete="off" name="flag" value=<?php echo $flag?>>
        </div>
        <div class="mb-3">
            <label class="form-label">POSN</label>
            <input type="text"  autocomplete="off" name="posn" value=<?php echo $posn?>>
        </div>
        <div class="mb-3">
            <label class="form-label">MLA</label>
            <input type="text"  autocomplete="off" name="mla" value=<?php echo $mla?>>
        </div>
        <div class="mb-3">
            <label class="form-label">LPC</label>
            <input type="text" autocomplete="off" name="lpc"value=<?php echo $lpc?>>
        </div>
        <div class="mb-3">
            <label class="form-label">NPC</label>
            <input type="text"  autocomplete="off" name="npc" value=<?php echo $npc?>>
        </div>
        <div class="mb-3">
            <label class="form-label">MASTER NATIONALITY</label>
            <input type="text" autocomplete="off" name="msn" value=<?php echo $msn?>>
        </div>
    </div>
    <div class="div2">
        <div class="mb-3">
            <label class="form-label">CREW NATIONALITY</label>
            <input type="text"  autocomplete="off" name="crn" value=<?php echo $crn?>>
        </div>
        <div class="mb-3">
            <label class="form-label">LENGTH</label>
            <input type="text" autocomplete="off" name="len" value=<?php echo $len?>>
        </div>
        <div class="mb-3">
            <label class="form-label">TONNAGE</label>
            <input type="text"  autocomplete="off" name="ton" value=<?php echo $ton?>>
        </div>
        <div class="mb-3">
            <label class="form-label">CARGO</label>
            <input type="text"  autocomplete="off" name="crg" value=<?php echo $crg?>>
        </div>
        <div class="mb-3">
            <label class="form-label">MMSI</label>
            <input type="text"  autocomplete="off" name="mmsi" value=<?php echo $mmsi?>>
        </div>
        <div class="mb-3">
            <label class="form-label">INMARSAT</label>
            <input type="text"  autocomplete="off" name="inm" value=<?php echo $inm?>>
        </div>
        <div class="mb-3">
            <label class="form-label">INT C/S</label>
            <input type="text"  autocomplete="off" name="intc" value=<?php echo $intc?>>
        </div>
        <div class="mb-3">
            <label class="form-label">IMO NO.</label>
            <input type="text"  autocomplete="off" name="imo" value=<?php echo $imo?>>
        </div>
        <div class="mb-3">
            <label class="form-label">OTHER INFO</label>
            <input type="text"  autocomplete="off" name="other" value=<?php echo $other?> >
        </div>
        <button class="button-85" name="submit">UPDATE</button>
        </div>
    </form>

  </body>

</html>

<?php
    include('connect.php');
    // error_reporting(0);
    if($_GET['update']){  
        $id=$_GET['id'];
        $date=$_GET['date']; //jo humne opar name diye hai input box ko
        $lname=$_GET['lname'];
        $email=$_GET['email'];
        $mobile=$_GET['mobile'];
        $query="update record set id='$id' , Date='$date' , lname='$lname' , email='$email' , mobile='$mobile' where id='$id'";      
        
        $data=mysqli_query($con,$query);
        if($data){
            echo "<script>alert('Record updated')</script>" ;
            ?>
            <meta http-equiv="refresh " content="0;URL='http://localhost/MB/display.php'"/>
            <?php
        }
        else{
            echo "Failed to upload";
        }
    }
?>