<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ADMIN</title>
        <link href="../css/w3.css" rel="stylesheet">
        <link href="" rel="stylesheet">
        <script src="../js/jquery.min.js"></script>
        <style type="text/css">
        @media print{
    	#ilang{
    		display: none;
	    	}

	    }

        table {
			    border-collapse: collapse;
			}

		table, th, td {
			    border: 1px solid black;
			}
		.w3-table tr th{
			text-align: center;
		}
		.w3-table tr td{
			text-align: center;
		}
		.cetak-kertas{background:url("print.gif"); background-repeat: no-repeat; width: 50px; height: 40px; border: #eee solid 1px; cursor: pointer; margin-top: 50px;}
        </style>
    </head>
<?php 
include '../include/koneksi.php';
$sql = "SELECT * FROM reservasi, kamar WHERE reservasi.id_kamar=kamar.id_kamar AND konfirmasi='Yes' AND id_reservasi IN (SELECT id_reservasi FROM konfirmasi)";
$br=mysql_query($sql);
$no=1;
?>
<body>
<div class="cetak">
	<h3>Data Reservasi Sukses</h3>
	<table class="w3-table w3-bordered w3-striped">
		<tr>
			<th>No</th>
			<th>Nama Tamu</th>
			<th>Tipe Kamar</th>
			<th>Extra Bed</th>
			<th>Tgl Cekin</th>
			<th>Tgl Cekout</th>
			<th>Jml. Hari</th>
			<th>Total Bayar</th>

		</tr>
	<?php
	while ($bru=mysql_fetch_array($br)) {	
	$date1 = new DateTime("$bru[tgl_masuk]");
	$date2 = new DateTime("$bru[tgl_keluar]");
	$interval = $date1->diff($date2);
	$hari=$interval->days;
	?>
		<tr>
			<td><?php echo $no; ?></td>
			<td style="text-align: left;"><?php echo $bru['nama']; ?></td>
			<td><?php echo $bru['tipe_kamar']; ?></td>
			<td><?php echo $bru['ekstra']; ?></td>
			<td><?php echo $bru['tgl_masuk']; ?></td>
			<td><?php echo $bru['tgl_keluar']; ?></td>
			<td><?php echo $hari; ?></td>
			<td style="text-align: left;">RP. <?php echo number_format($bru['jumlah_harga']); ?></td>
		</tr>
		<?php 
		$no++; 
		$totalharga=$bru['jumlah_harga'];
		$totalb = isset($totalb) ? $totalharga:null;
		$totalb +=$totalharga;
		}	
		
		$tot1=mysql_query("SELECT SUM(jumlah_harga) as totalh FROM reservasi WHERE konfirmasi='Yes'");
		$tot=mysql_fetch_assoc($tot1);

		?>
		<tr>
			<td colspan="7">Total</td>
			<td style="text-align: left;">Rp. <?php echo number_format($tot['totalh']); ?></td>
		</tr>
	</table>
</div>
<center><button id="ilang" class="cetak-kertas"  onclick="javascript:this.style.visibility='none';window.print()"></button></center>
</body>
</html>