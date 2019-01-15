<script type="text/javascript">
$(document).ready(function() {
    $('#menu').on('click', 'button', function() {
        var baru = $(this).data('btn');
        if (baru == 'baru') {
            var link = 'bayar/d_baru.php';
        } else if (baru == 'sukses') {
            var link = 'bayar/d_sukses.php';
        } else if (baru == 'konfirm') {
            var link = 'bayar/d_konfirmasi.php';
        } else if (baru == 'gagal'){
            var link = 'bayar/d_gagal.php';
        }else{exit ;}
        $.ajax({
            url: link,
            data: "baru=" + baru,
            success: function(data) {
                $("#data").html(data);
            }
        });
    });
});
</script>
<?php 
include "../include/koneksi.php";
$br=mysql_query("SELECT id_reservasi FROM reservasi WHERE konfirmasi='No' AND id_reservasi NOT IN (SELECT id_reservasi FROM konfirmasi)");
$bru=mysql_num_rows($br);

$brs=mysql_query("SELECT id_reservasi FROM reservasi WHERE konfirmasi='Yes' and id_reservasi IN (SELECT id_reservasi FROM konfirmasi)");
$brus=mysql_num_rows($brs);

$brk=mysql_query("SELECT * FROM konfirmasi WHERE id_reservasi IN (SELECT id_reservasi FROM reservasi WHERE konfirmasi='No')");
$bruk=mysql_num_rows($brk);

$br3=mysql_query("SELECT id_reservasi FROM reservasi WHERE konfirmasi='Gagal'");
$bru3=mysql_num_rows($br3);
?>
<div class="w3-row-padding w3-margin-top">
    <div id="menu">
        <button id="baru" data-btn="baru">Data Reservasi Baru <span class="w3-badge w3-blue"><?php echo $bru ; ?></span></button>
        <button id="konfirm" data-btn="konfirm">Data Konfirmasi Reservasi <span class="w3-badge w3-green"><?php echo $bruk ; ?></span></button>
        <button id="sukses" data-btn="sukses">Data Reservasi Sukses <span class="w3-badge w3-green"><?php echo $brus ; ?></span></button>
        <button id="gagal" data-btn="gagal">Data Reservasi Gagal <span class="w3-badge w3-red"><?php echo $bru3 ; ?></span></button>
        <a href="cetak_reservasi.php" target="_blank"><button id="cetak">Cetak Data Reservasi</button></a>
    </div>
    <div id="data">
        <?php
include "../include/koneksi.php";
$baru=isset($_GET['baru'])?$_GET['baru'] : null;
$sql = "SELECT * FROM reservasi, kamar WHERE reservasi.id_kamar=kamar.id_kamar AND konfirmasi='No' AND id_reservasi NOT IN (SELECT id_reservasi FROM konfirmasi) ";
$br=mysql_query($sql);
?>
            <h2>Data Reservasi Baru</h2>
            <ul class="w3-ul w3-card-4">
                <?php
	while ($bru=mysql_fetch_array($br)) {	
	$date1 = new DateTime("$bru[tgl_masuk]");
	$date2 = new DateTime("$bru[tgl_keluar]");
	$interval = $date1->diff($date2);
	$hari=$interval->days;
	?>
                    <li class="w3-padding-16 konten">
                        <button class="w3-closebtn w3-padding w3-margin-right w3-small w3-blue w3-border w3-border-gray w3-round" value="<?php echo $bru['id_kamar'] ; ?>">Lihat Detail Kamar</button>
                        <img src="../<?php echo $bru['foto']; ?>" class="w3-left w3-circle w3-margin-right" style="width:60px">
                        <span class="w3-xlarge"><?php echo $bru['nama']." Tipe:".$bru['tipe_kamar']." &nbsp".$hari." hari"." extra:".$bru['ekstra']." Total: <b>Rp.".number_format($bru['jumlah_harga'])."</b>"; ?></span>
                        <br>
                        <span><?php echo "No. Telp:&nbsp".$bru['no_telp']." &nbsp e-mail:&nbsp".$bru['email']; ?></span>
                    </li>
                    <?php } ?>
            </ul>
            <div id="mdbaru" class="w3-modal">
            </div>
            <script type="text/javascript">
            $().ready(function() {
                $('.konten').on('click', 'button', function() {
                    var idrv = $(this).val();
                    $.ajax({
                        url: "bayar/modal_dbaru.php",
                        data: "idrv=" + idrv,
                        success: function(data) {
                            $("#mdbaru").html(data);
                        }
                    });
                    document.getElementById("mdbaru").style.display = "block";
                });
            });
            </script>
    </div>
</div>
