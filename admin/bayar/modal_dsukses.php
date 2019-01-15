<?php
include "../../include/koneksi.php";
$idrv=$_GET['idrv']; //id_reservasi
$km=mysql_fetch_array(mysql_query("SELECT * FROM konfirmasi, reservasi, kamar WHERE konfirmasi.id_reservasi=reservasi.id_reservasi AND reservasi.id_kamar=kamar.id_kamar AND konfirmasi.id_reservasi='$idrv'")); //ubah ke query konfirmasi
?>
<div class="w3-modal-content" style="margin-top: -50px">
    <header class="w3-container w3-teal"> 
      <span onclick="document.getElementById('mdbaru').style.display='none'" 
      class="w3-closebtn">×</span>
      <h2>Detail Reservasi Sukses</h2>
    </header>
    <div id="misi" class="w3-container">
    <input type="hidden" name="id_reservasi" value="<?php echo $km['id_reservasi']; ?>">
      <p><?php $km['id_reservasi']; ?></p>
      <p><?php $km['id_pengguna']; ?></p>
      <table style="font-weight: bold;">
      <tr><td width="15%">Nama Tamu</td><td>: <?php echo $km['nama']; ?></p>
      <tr><td>No. ID</td><td>: <?php echo $km['id_ktp']; ?></p>
      <tr><td>No. Telp</td><td>: <?php echo $km['no_telp']; ?></p>
      <tr><td>Email</td><td>: <?php echo $km['email']; ?></p>
      <tr><td>Cek In</td><td>: <?php echo $km['tgl_masuk']; ?></p>
      <tr><td>Cek Out</td><td>: <?php echo $km['tgl_keluar']; ?></p>
      <tr><td>Kode Reservasi</td><td>: <?php echo $km['kode_reservasi']; ?></p>
      <tr><td>Total Bayar</td><td>: <?php echo $km['jumlah_harga']; ?></p>
      <tr><td>Keterangan</td><td>: <?php echo $km['keterangan']; ?></p>
      </table>
      <img src="../<?php echo "images/".$km['bukti_transfer']; ?>" class="w3-round" width="100px">
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal Footer</p>
    </footer>
  </div>
</div>