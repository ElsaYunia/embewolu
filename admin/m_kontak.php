<?php
include "../include/koneksi.php";
$sql = "SELECT * FROM hubungi_kami";
$br=mysql_query($sql);
?>
<h2>Data Konfirmasi Reservasi</h2>
	<ul class="w3-ul w3-card-4">
	<?php
	while ($bru=mysql_fetch_array($br)) {
	?>
	  <li class="w3-padding-16 konten">
	  <button class="w3-closebtn w3-padding w3-margin-right w3-small w3-blue w3-border w3-border-gray w3-round" value="<?php echo $bru['id_hubungikami']; ?>">Balas</button>
	    <span class="w3-xlarge"><?php echo "<b>".$bru['nama_pengunjung']."</b> &nbsp Pesan : ".$bru['pesan']; ?></span><br>
	    <span><?php echo "E-mail:&nbsp".$bru['email']." &nbsp Alamat:&nbsp".$bru['alamat']; ?></span>
	  </li>
	  <?php } ?>
	</ul>
<div id="mdpesan" class="w3-modal">  
</div>

<script type="text/javascript">
$().ready(function(){
$('.konten').on('click', 'button', function(){
	var idps = $(this).val();
$.ajax({
      url:"modal_pesan.php",
      data:"idps="+idps,
      success:function(data){
        $("#mdpesan").html(data);
      } 
    });
  document.getElementById("mdpesan").style.display = "block";
});
});
</script>