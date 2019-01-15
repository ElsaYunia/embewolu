<?php
session_start();
include "../include/koneksi.php";
$idrv=$_GET['idps']; //id_reservasi
$ps=mysql_fetch_array(mysql_query("SELECT * FROM hubungi_kami WHERE id_hubungikami='$idrv'")); //ubah ke query konfirmasi
?>
<div class="w3-modal-content" style="margin-top: -50px">
    <header class="w3-container w3-teal"> 
      <span onclick="document.getElementById('mdpesan').style.display='none'" 
      class="w3-closebtn">×</span>
      <h2>To: <?php echo $ps['email']; ?></h2>
    </header>
    <div id="misi" class="w3-container">
    <form method="POST" action="mail.php">
    <input type="hidden" name="untuk" value="<?php echo $ps['email']; ?>">
    <table style="font-weight: bold;">
      <tr><td>Pesan : </td><td><textarea class="w3-input w3-border w3-round" type="text" name="pesana"><?php echo $ps['pesan']; ?></textarea></td></tr>
      <tr><td>subjek : </td><td><input class="w3-input w3-border w3-round" type="text" name="subjek" required></td></tr>
      <tr><td>Balas : </td><td><textarea class="w3-input w3-border w3-round" type="text" name="pesanb" required></textarea></td></tr>
      </table>
      <br>
      <button class="w3-btn w3-green w3-right w3-border w3-border-gray w3-round" type="submit" name="btn" value="sukses">Kirim</button>
      </form>
      <center><button class="w3-btn w3-blue w3-border w3-border-gray w3-round" onclick="document.getElementById('mdpesan').style.display='none'">Batal</button></center>
    </div>
    <footer class="w3-container w3-teal">
      <p>embewolu@email.com</p>
    </footer>
  </div>
</div>