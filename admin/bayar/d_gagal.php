<?php
include "../../include/koneksi.php";
$baru=$_GET['baru'];
$sql = "SELECT * FROM reservasi, kamar WHERE reservasi.id_kamar=kamar.id_kamar AND konfirmasi='Gagal'";
$br=mysql_query($sql);
?>
<h2>Data Reservasi Gagal</h2>
	<ul class="w3-ul w3-card-4">
	<?php
	while ($bru=mysql_fetch_array($br)) {	
	$date1 = new DateTime("$bru[tgl_masuk]");
	$date2 = new DateTime("$bru[tgl_keluar]");
	$interval = $date1->diff($date2);
	$hari=$interval->days;
	?>
	  <li class="w3-padding-16 konten">
	    <a href="bayar/hapus_reservasi.php?id=<?php echo $bru['id_reservasi']; ?>"><button class="w3-closebtn w3-padding w3-margin-right w3-small w3-orange w3-border w3-border-gray w3-round" >Hapus</button></a>

	    <img src="../<?php echo $bru['foto']; ?>" class="w3-left w3-circle w3-margin-right" style="width:60px">
	    <span class="w3-xlarge"><?php echo $bru['nama']." Tipe:".$bru['tipe_kamar']." &nbsp".$hari." hari"." extra:".$bru['ekstra']." Total: <b>Rp.".number_format($bru['jumlah_harga'])."</b>"; ?></span><br>
	    <span><?php echo "No. Telp:&nbsp".$bru['no_telp']." &nbsp e-mail:&nbsp".$bru['email']; ?></span>
	  </li>
	  <?php } ?>
	</ul>