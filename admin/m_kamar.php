<script type="text/javascript">
$().ready(function(){
$('.konten .bdetail').on('click', 'button', function(){
  $(this).closest('.konten').find('#detail').slideToggle();
});
});
</script>
<script type="text/javascript">
$().ready(function(){
$('.konten .bedit').on('click', 'button', function(){
	var idkm = $(this).val();
$.ajax({
      url:"modal_eruangan.php",
      data:"idkm="+idkm,
      success:function(data){
        $("#medit").html(data);
      } 
    });
  document.getElementById("medit").style.display = "block";
});
});
</script>
<?php 
include "../include/koneksi.php";
$sql=mysql_query("SELECT * FROM kamar");
?>
<div class="w3-row-padding w3-margin-top">
<div>
    <button class="w3-btn w3-green" onclick="document.getElementById('mtambah').style.display = 'block'">Tambah Kamar</button>
</div>

<?php
$x=0;
while($km=mysql_fetch_array($sql)) {
	if ($x % 3 == 0) {
		echo "</div><div class='w3-row-padding w3-margin-top'>";
	}
?>
<div class="w3-third">
    <div class="w3-card-2 konten">
        <div class="w3-display-container">
            <img id="sgambar" src="../<?php echo $km['foto']; ?>" class="w3-hover-opacity" style="width:100%" onclick="onClick(this)">
            <div class="w3-display-bottomleft w3-large bedit" data-edit="qq">
                <button id="edit" class="w3-btn w3-ripple w3-blue" value="<?php echo $km['id_kamar']; ?>">Edit</button>
                <input type="hidden" class="edit" value="<?php echo $x; ?>">
            </div>
            <div class="w3-display-bottomright w3-large bdetail">
                <button class="w3-btn w3-ripple w3-orange">Detail</button>
            </div>
        </div>
        <div class="w3-container">
            <h4><?php echo $km['tipe_kamar']." Rp. ".number_format($km['harga'], 2); ?></h4>
            <p id="detail">
                <?php echo $km['detail'] ; ?>
            </p>
        </div>
    </div>
</div>
<?php $x++; } ?>
</div>
<div id="mgambar" class="w3-modal" onclick="this.style.display='none'">
    <!-- <span class="w3-closebtn w3-hover-red w3-text-white w3-xxlarge w3-container w3-padding-16 w3-display-topright">×</span> -->
    <div class="w3-modal-content" style="margin-top: -50px">
        <img id="gambar" style="width:100%">
    </div>
</div>
<div id="medit" class="w3-modal">
</div>
<div id="mtambah" class="w3-modal">
<?php include "modal_tbhkamar.php"; ?>
</div>

