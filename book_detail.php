<?php
include "include/koneksi.php";
 $km=$_POST['km'];
 $nama=$_POST['nama'];
 $hari=$_POST['hari'];
 $jml=$_POST['jml'];
 $email=$_POST['email'];
 $no_ktp=$_POST['no_ktp'];
 $phone=$_POST['phone'];
 $id_kamar=$_POST['id_kamar'];
 $tgl_in=$_POST['tgl_in'];
 $tgl_out=$_POST['tgl_out'];
if (empty($_POST['extra'])) {
	$extra="NO";
}else{$extra=$_POST['extra'];}
 $extra;
 $total=$_POST['total'];
$tgl=explode('-', $tgl_in);
 $tgl1=$tgl[1];
 $tgl2=$tgl[2];
 $tgl3="$tgl1"."$tgl2";
$nm=substr("$nama",-4, 4);
$ktp=substr("$no_ktp",-4, 4);
$codes="$tgl3"."$nm"."$ktp";

$code=md5($codes);  // ganti nama + id+ tglin
$codem=substr("$code", 8, 8);

$roomt=mysql_fetch_array(mysql_query("SELECT * FROM kamar WHERE id_kamar=$km"));
$cek=mysql_num_rows(mysql_query("SELECT * FROM reservasi WHERE kode_reservasi='$codem'"));
if ($cek===0) {
$book="INSERT INTO reservasi values ('','$nama','$no_ktp','$phone','$email','$tgl_in','$tgl_out','$km','$jml','$extra','$total','1','$codem','no')";
// print_r($book);die;
mysql_query($book) or die('error cook'.$book);
}else{echo "";}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print out booking</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
    @media print{
    	#ilang{
    		display: none;
    	}
    	hr {
    
  border: 0;
  clear:both;
  display:block;
  width: 100%;               
  background-color: #ffffff;
  height: 1px;
	}
    }

    	hr {
    
  border: 0;
  clear:both;
  display:block;
  width: 100%;               
  background-color: black;
  height: 1px;
	}
#code{
	
	font-weight: bold;
	font-size: large;
}

    </style>
  </head>
  <body>
<div id="detail">
<table width="80%" align="center">
	<tr>
		<td id="jdl" colspan="4" align="center" style="background-color: red"><h4>Detail Reservasi</h4></td>
		
	</tr>
	<tr>
		<td align="left" width="15%">Guest Name</td>
		<td width="40%">: <b><?php echo $nama ?></b></td>
		<td width="15%">No. ID#</td>
		<td width="30%">: <b><?php echo $no_ktp ?></b></td>
	</tr>
	<tr>
		<td>Room Type</td>
		<td>: <b><?php echo $roomt['tipe_kamar'] ?></b></td>
		<td>Cek In</td>
		<td>: <b><?php echo $tgl_in ?></b></td>
	</tr>
	<tr>
		<td>Extra Bed</td>
		<td>: <b><?php echo $extra ?></b></td>
		<td>Cek Out</td>
		<td>: <b><?php echo $tgl_out ?></b></td>
	</tr>
	<tr>
		<td>E-Mail</td>
		<td>: <b><?php echo $email ?></b></td>
		<td>Night</td>
		<td>: <b><?php echo $hari ?></b></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Adult: <b><?php echo $jml ?></b></td>
		<td>Children: <b>-</b></td>
	</tr>
	<tr>
		<td>Fasilitas</td>
		<td colspan="2">: <b><?php echo $roomt['fasilitas']; ?></b></td>
		<td></td>
	</tr>
		<td colspan="4"><hr /></td>
	<tr>
		<td>Total Bayar </td>
		<td>: <b>Rp. <?php echo number_format($total)?></b></td>
		<td></td>
		<td></td>
	</tr>

	<tr>
		<td colspan="4">&nbsp</td>
	</tr>
	<tr>
		<td style="vertical-align: top;">Note*</td>
		<td style="vertical-align: top; color: red;" colspan="2">
			<b>BNI : - <br />
			BRI : - <br />
			MANDIRI : - <br /></b>
			Segera lakukan konfirmasi pembayaran dalam 1*24 jam.<br />
			Keterlambatan konfirmasi dianggap batal booking!</td>
		
		<td>-</td>
	</tr>
	<tr>
		<td></td>
		<td colspan="2" align="center" id="code">
			(<?php echo $codem ?>)<br />
			<p style="text-decoration: underline;">BOOKING CODE</p>
		</td>
		<td></td>
	</tr>
	<tr id="ilang">
		<td></td>
		<td align="center" colspan="2"><button class="btn-success"  onclick="javascript:this.style.visibility='none';window.print()">PRINT</button> 
		<a href="konfirmasi.php?bcd=<?php echo $codem ?>"> <button class="btn-danger">KONFIRMASI</button></a></td>
		<td></td>
	</tr>
</table>
</div>	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>