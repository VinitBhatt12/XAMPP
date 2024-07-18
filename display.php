<?php
    include('connect.php');
    error_reporting(0);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style3.css">
    <title>Display Data</title>
  </head>

  <body>
    <div >
    <table class="table">  
    <thead>
    <tr class="tr1">
      <!-- <th scope="col">Sl no.</th> -->
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Ship_name</th>
      <th scope="col">Flag</th>
      <th scope="col">Posn</th>
      <th scope="col">Mla</th>
      <th scope="col">Lpc</th>
      <th scope="col">NPC</th>
      <th scope="col">MASTER_
        NATIONALITY</th>
      <th scope="col">CREW_
        NATIONALITY</th>
      <th scope="col">LENGTH</th>
      <th scope="col">TONNAGE</th>
      <th scope="col">CARGO</th>
      <th scope="col">MMSI</th>
      <th scope="col">INMARSAT_C</th>
      <th scope="col">INTCS</th>
      <th scope="col">IMO_NO</th>
      <th scope="col">OTHER_INFO</th>
      <th scope="col">OPERATION</th>

    </tr> 
    </thead>
  <?php
        $query="Select * from record ";
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
        while($result=mysqli_fetch_assoc($data)){ //name from record
            echo "<tr class='tr2'>
                <td>".$result['Date']."</td>   
                <td>".$result['Time']."</td>
                <td>".$result['Ship_name']."</td>
                <td>".$result['Flag']."</td>
                <td>".$result['Posn']."</td>
                <td>".$result['Mla']."</td>
                <td>".$result['Lpc']."</td>
                <td>".$result['NPC']."</td>
                <td>".$result['MASTER_NATIONALITY']."</td>
                <td>".$result['CREW_NATIONALITY']."</td>
                <td>".$result['LENGTH']."</td>
                <td>".$result['TONNAGE']."</td>
                <td>".$result['CARGO']."</td>
                <td>".$result['MMSI']."</td>
                <td>".$result['INMARSAT_C']."</td>
                <td>".$result['INTCS']."</td>
                <td>".$result['IMO_NO']."</td>
                <td>".$result['OTHER_INFO']."</td>
                <td>
                  <a href='update.php?id=$result[id]&date=$result[Date]&time=$result[Time]&sname=$result[Ship_name]&flag=$result[Flag]&posn=$result[Posn]&mla=$result[Mla]&lpc=$result[Lpc]&npc=$result[NPC]&msn=$result[MASTER_NATIONALITY]&crn=$result[CREW_NATIONALITY]&len=$result[LENGTH]&ton=$result[TONNAGE]&crg=$result[CARGO]&mmsi=$result[MMSI]&inm=$result[INMARSAT_C]&intc=$result[INTCS]&imo=$result[IMO_NO]&other=$result[OTHER_INFO]'target='_blank' class='update'>UPDATE</a>
                  or
                  <a href='delete.php?id=$result[id]' onclick='return checkdelete()' class='delete'>DELETE</a> 
                </td>
            </tr>" ;
        }
    ?>
    </table>
    <a href="pdf.php" class="button-85">PDF</a>
    </div> 
<script>
    function checkdelete(){
    return confirm('Are you sure to deklete');
    }
</script> 
  </body>
</html>

<!-- <a href="update.php? fname=$row[fname] & lname=$row[lname] & email=$row[email] & $mobie=$row[mobile]"> Update</a>  -->