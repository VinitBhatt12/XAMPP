<?php

use Mpdf\Css\Border;

require('vendor/autoload.php');
// $con=mysqli_connect('localhost','root','','youtube');
include('connect.php');
$res=mysqli_query($con,"select * from record");

if(mysqli_num_rows($res)>0){
	$html='<style> td{border-style: solid;border-width: 1px;}</style><table class="table">';
		$html.='
        <th class=th1><tr><td>ID</td><td>DATE</td><td>TIME</td><td>SHIP NAME</td><td>FLAG</td><td>POS.</td><td>MLA</td><td>LPC</td><td>NPC</td><td>MASTER NATIONALITY</td><td>CREW NATIONALITY</td><td>LENGTH</td><td>TONNAGE</td><td>CARGO</td><td>MMSI</td><td>INMARSAT C</td><td>INT C/S</td><td>IMO NO.</td><td>OTHER INFO</td></span></tr></th>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td>'.$row['id'].'</td><td>'.$row['Date'].'</td><td>'.$row['Time'].'</td><td>'.$row['Ship_name'].'</td><td>'.$row['Flag'].'</td><td>'.$row['Posn'].'</td><td>'.$row['Mla'].'</td><td>'.$row['Lpc'].'</td><td>'.$row['NPC'].'</td><td>'.$row['MASTER_NATIONALITY'].'</td><td>'.$row['CREW_NATIONALITY'].'</td><td>'.$row['LENGTH'].'</td><td>'.$row['TONNAGE'].'</td><td>'.$row['CARGO'].'</td><td>'.$row['MMSI'].'</td><td>'.$row['INMARSAT_C'].'</td><td>'.$row['INTCS'].'</td><td>'.$row['IMO_NO'].'</td><td>'.$row['OTHER_INFO'].'</td></tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'I');
//D
//I
//F
//S
?>
