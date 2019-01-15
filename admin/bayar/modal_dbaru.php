<?php
include "../../include/koneksi.php";
$idrv=$_GET['idrv']; //id_reservasi
$km=mysql_fetch_array(mysql_query("SELECT * FROM kamar WHERE id_kamar='$idrv'")); //ubah ke query konfirmasi
?>
<div class="w3-modal-content" style="margin-top: -50px">
    <header class="w3-container w3-teal"> 
      <span onclick="document.getElementById('mdbaru').style.display='none'" 
      class="w3-closebtn">×</span>
      <h2>Detail Kamar Reservasi Baru</h2>
    </header>
    <div id="misi" class="w3-container">
      <table>
        <tr>
          <td width="15%">Tipe kamar </td>
          <td>: <?php echo $km['tipe_kamar']; ?></td>
        </tr>
        <tr>
          <td>Fasilitas </td>
          <td>: <?php echo $km['fasilitas']; ?></td>
        </tr>
        <tr>
          <td>Harga Kamar </td>
          <td>: Rp. <?php echo $km['harga']; ?></td>
        </tr>
        <tr>
          <td>Detail Kamar </td>
          <td>: <?php echo $km['detail']; ?></td>
        </tr>
      </table>
      <p><?php $km['id_kamar']; ?></p>
      <img src="../<?php echo $km['foto']; ?>" class="w3-round" width="150px">
    </div>
    <footer class="w3-container w3-teal">
      <p>embewolu.com</p>
    </footer>
  </div>
</div>