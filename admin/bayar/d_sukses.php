<?php
include "../../include/koneksi.php";
$baru=$_GET['baru'];
$sql = "SELECT * FROM reservasi, kamar WHERE reservasi.id_kamar=kamar.id_kamar AND konfirmasi='Yes' AND id_reservasi IN (SELECT id_reservasi FROM konfirmasi)";
$br=mysql_query($sql);
?>

<h2>Data Reservasi Sukses</h2>
	<ul class="w3-ul w3-card-4">
	<?php
	while ($bru=mysql_fetch_array($br)) {	
	$date1 = new DateTime("$bru[tgl_masuk]");
	$date2 = new DateTime("$bru[tgl_keluar]");
	$interval = $date1->diff($date2);
	$hari=$interval->days;
	?>
	  <li class="w3-padding-16 konten">
	    <button class="w3-closebtn w3-padding w3-margin-right w3-small w3-blue w3-border w3-border-gray w3-round" value="<?php echo $bru['id_reservasi']; ?>">Lihat Detail</button>
	    <img src="../<?php echo $bru['foto']; ?>" class="w3-left w3-circle w3-margin-right" style="width:60px">
	    <span class="w3-xlarge"><?php echo $bru['nama']." Tipe:".$bru['tipe_kamar']." &nbsp".$hari." hari"." extra:".$bru['ekstra']." Total: <b>Rp.".number_format($bru['jumlah_harga'])."</b>"; ?></span><br>
	    <span><?php echo "No. Telp:&nbsp".$bru['no_telp']." &nbsp e-mail:&nbsp".$bru['email']; ?></span>
	  </li>
	  <?php } ?>
	</ul>

<div id="mdbaru" class="w3-modal">  
</div>

<script type="text/javascript">
$().ready(function(){
$('.konten').on('click', 'button', function(){
	var idrv = $(this).val();
$.ajax({
      url:"bayar/modal_dsukses.php",
      data:"idrv="+idrv,
      success:function(data){
        $("#mdbaru").html(data);
      } 
    });
  document.getElementById("mdbaru").style.display = "block";
});
});
</script>