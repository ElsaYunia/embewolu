<?php
session_start();
include "../../include/koneksi.php";
$idrv=$_GET['idrv']; //id_reservasi
$km=mysql_fetch_array(mysql_query("SELECT * FROM konfirmasi, reservasi WHERE konfirmasi.id_reservasi=reservasi.id_reservasi  AND konfirmasi.id_konfirmasi='$idrv'")); //ubah ke query konfirmasi
?>
<div class="w3-modal-content" style="margin-top: -50px">
    <header class="w3-container w3-teal"> 
      <span onclick="document.getElementById('mdbaru').style.display='none'" 
      class="w3-closebtn">×</span>
      <h2>Konfirmasi Reservasi</h2>
    </header>
    <div id="misi" class="w3-container">
    <form method="POST" action="bayar/pro_konfirmasi.php">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['id_user']; ?>">
    <input type="hidden" name="id_reservasi" value="<?php echo $km['id_reservasi']; ?>">
      <p><?php $km['id_reservasi']; ?></p>
      <table style="font-weight: bold;">
      <tr><td>Nama Tamu</td><td>: <?php echo $km['nama']; ?></td></tr>
      <tr><td>Kode Reservasi</td><td>: <?php echo $km['kode_reservasi']; ?></td></tr>
      <tr><td>Total Bayar</td><td>: <?php echo $km['jumlah_harga']; ?></td></tr>
      <tr><td>Keterangan </td><td>: <?php echo $km['keterangan']; ?></td></tr>
      </table>
      <img id="sgambar" src="../<?php echo "images/".$km['bukti_transfer']; ?>" class="w3-round" width="250px" onclick="onClick(this)">
      <br>
      <button class="w3-btn w3-green w3-right w3-border w3-border-gray w3-round" type="submit" name="btn" value="sukses">Berhasil</button>
      </form>
      <form method="POST" action="bayar/pro_konfirmasi.php">
      <input type="hidden" name="admin" value="<?php echo $_SESSION['id_user']; ?>">
      <input type="hidden" name="id_reservasi" value="<?php echo $km['id_reservasi']; ?>">
      <button class="w3-btn w3-red w3-left w3-border w3-border-gray w3-round" type="submit" name="btn" value="gagal">Gagal</button>
      </form>
      <center><button class="w3-btn w3-blue w3-border w3-border-gray w3-round" onclick="document.getElementById('mdbaru').style.display='none'">Batal</button></center>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal Footer</p>
    </footer>
  </div>
</div>