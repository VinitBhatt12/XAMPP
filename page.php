<?php
    include('connect.php');
    error_reporting();
    if(isset($_POST['submit'])){
        $date=$_POST['date'];
        $time=$_POST['time'];
        $sname=$_POST['sname'];
        $flag=$_POST['flag'];
        $posn=$_POST['posn'];
        $mla=$_POST['mla'];
        $lpc=$_POST['lpc'];
        $npc=$_POST['npc'];
        $msn=$_POST['msn'];
        $crn=$_POST['crn'];
        $len=$_POST['len'];
        $ton=$_POST['ton'];
        $crg=$_POST['crg'];
        $mmsi=$_POST['mmsi'];
        $inm=$_POST['inm'];
        $intc=$_POST['intc'];
        $imo=$_POST['imo'];
        $other=$_POST['other'];

        $sql="insert into record (Date,Time,Ship_name,Flag,Posn,Mla,Lpc,NPC,MASTER_NATIONALITY,CREW_NATIONALITY,LENGTH,TONNAGE,CARGO,MMSI,INMARSAT_C,INTCS,IMO_NO,OTHER_INFO) values ('$date','$time','$sname','$flag','$posn','$mla','$lpc','$npc','$msn','$crn','$len','$ton','$crg','$mmsi','$inm','$intc','$imo','$other')";

        $result=mysqli_query($con,$sql);

        if($result){
            // echo 'data inserted';

        }
        else{
            echo 'not inserted';
        }
    }
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
    <title>Page</title>

    <script>
        if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
    </script>
  </head>
  
  <body >
    <!-- <h1>Hello, world!</h1> -->
    <form method="post">
        <div class="div1 ">
        <div class="mb-3">
            <label >Date</label>
            <input type="date"  autocomplete="off" name="date" >
        </div>
        <div class="mb-3">
            <label class="form-label">TIME</label>
            <input type="text"  autocomplete="off" name="time">
        </div>
        <div class="mb-3">
            <label class="form-label">NAME OF SHIP</label>
            <input type="text" autocomplete="off" name="sname">
        </div>
        <div class="mb-3">
            <label class="form-label">FLAG</label>
            <input type="text"  autocomplete="off" name="flag">
        </div>
        <div class="mb-3">
            <label class="form-label">POSN</label>
            <input type="text"  autocomplete="off" name="posn">
        </div>
        <div class="mb-3">
            <label class="form-label">MLA</label>
            <input type="text"  autocomplete="off" name="mla">
        </div>
        <div class="mb-3">
            <label class="form-label">LPC</label>
            <input type="text" autocomplete="off" name="lpc">
        </div>
        <div class="mb-3">
            <label class="form-label">NPC</label>
            <input type="text"  autocomplete="off" name="npc">
        </div>
        <div class="mb-3">
            <label class="form-label">MASTER NATIONALITY</label>
            <input type="text" autocomplete="off" name="msn">
        </div>
    </div>
    <div class="div2">
        <div class="mb-3">
            <label class="form-label">CREW NATIONALITY</label>
            <input type="text"  autocomplete="off" name="crn">
        </div>
        <div class="mb-3">
            <label class="form-label">LENGTH</label>
            <input type="text" autocomplete="off" name="len">
        </div>
        <div class="mb-3">
            <label class="form-label">TONNAGE</label>
            <input type="text"  autocomplete="off" name="ton">
        </div>
        <div class="mb-3">
            <label class="form-label">CARGO</label>
            <input type="text"  autocomplete="off" name="crg">
        </div>
        <div class="mb-3">
            <label class="form-label">MMSI</label>
            <input type="text"  autocomplete="off" name="mmsi">
        </div>
        <div class="mb-3">
            <label class="form-label">INMARSAT</label>
            <input type="text"  autocomplete="off" name="inm">
        </div>
        <div class="mb-3">
            <label class="form-label">INT C/S</label>
            <input type="text"  autocomplete="off" name="intc">
        </div>
        <div class="mb-3">
            <label class="form-label">IMO NO.</label>
            <input type="text"  autocomplete="off" name="imo">
        </div>
        <div class="mb-3">
            <label class="form-label">OTHER INFO</label>
            <input type="text"  autocomplete="off" name="other">
        </div>
        <button class="button-85" name="submit">Submit</button>
        </div>
    </form>

  </body>
</html>