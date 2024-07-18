<?php
    include('connect.php');
    error_reporting(0);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search data</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style2.css">
        <script>
        if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
        </script>

    </head>

    <body>
        <div >
            <form method="post" style="color: aqua;"  >
                <input type="text" placeholder="search data" name="search" autocomplete="off">
                <!-- <button class="btn btn-dark" name="sumbit">Search</button> -->
                <input type="submit" name="submit" >
            </form>
            <div >
                <table class="table" style="color: aliceblue;">  
                    <?php
                        if(isset($_POST['submit'])){
                            $search=$_POST['search'];  //jo table mai name hai
                            $sql="Select * from record where id like '%$search%' or Date like '%$search%' or Time like '%$search%' or Ship_name like '%$search%' or Flag like '%$search%'" ;  
                            $result=mysqli_query($con,$sql);

                            if($result){
                                if(mysqli_num_rows($result)>0){
                                    echo '<thead>
                                    <tr class="tr1">
                                    <th>DATE</th>
                                    <th>TIME</th>
                                    <th>SHIP NAME</th>
                                    <th>FLAG</th>
                                    <th>POSN</th>
                                    <th>MLA</th>
                                    <th>LPC</th>
                                    <th>NPC</th>
                                    <th>MAS NATIONALITY</th>
                                    <th>CREW NATIONALITY</th>
                                    <th>LENGTH</th>
                                    <th>TONNAGE</th>
                                    <th>CARGO</th>
                                    <th>MMSI</th>
                                    <th>INMARSAT C</th>
                                    <th>INT C/S</th>
                                    <th>IMO NO</th>
                                    <th>OTHER INFO</th>
                                    </tr>
                                    </thead>';
                                    while($row=mysqli_fetch_assoc($result)){
                                    echo "<tbody>
                                    <tr>
                                    <td>".$row['Date']."</td>
                                    <td>".$row['Time']."</td>
                                    <td>".$row['Ship_name']."</td>
                                    <td>".$row['Flag']."</td>
                                    <td>".$row['Posn']."</td>
                                    <td>".$row['Mla']."</td>
                                    <td>".$row['Lpc']."</td>
                                    <td>".$row['Npc']."</td>
                                    <td>".$row['MASTER_NATIONALITY']."</td>
                                    <td>".$row['CREW_NATIONALITY']."</td>
                                    <td>".$row['LENGTH']."</td>
                                    <td>".$row['TONNAGE']."</td>
                                    <td>".$row['CARGO']."</td>
                                    <td>".$row['MMSI']."</td>
                                    <td>".$row['INMARSAT_C']."</td>
                                    <td>".$row['INTCS']."</td>
                                    <td>".$row['IMO_NO']."</td>
                                    <td>".$row['OTHER_INFO']."</td>
                                    </tr>
                                    </tbody>";
                                    }
                                }
                                else{
                                    echo '<h2>Data not found</h2>';
                                }
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </body>

</html>


