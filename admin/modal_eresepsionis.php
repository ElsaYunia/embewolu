<?php 
include("../include/koneksi.php");
$id=$_GET['erep'];
$sql="SELECT * FROM admin WHERE id_pengguna='$id'";
$sql=mysql_query($sql);
$sql=mysql_fetch_array($sql);
 ?>
<div class="w3-modal-content">
        <header class="w3-container w3-teal">
            <span onclick="document.getElementById('erep').style.display='none'" class="w3-closebtn">×</span>
            <h2>Edit Resepsionis</h2>
        </header>
        <div id="misi" class="w3-container">
            <form method="POST" action="edit_resepsionis.php" enctype="multipart/form-data">
                <label><b>nama</b></label>
                <input type="text" name="nama" class="w3-input" value="<?php echo $sql['nama_admin']; ?>" required="">
                <label><b>alamat</b></label>
                <input type="text" name="alamat" class="w3-input" value="<?php echo $sql['alamat']; ?>" required="">
                <label><b>email</b></label>
                <input type="text" name="email" class="w3-input" value="<?php echo $sql['email']; ?>" required="">
                <label><b>no. telp</b></label>
                <input type="text" name="telp" class="w3-input" value="<?php echo $sql['no_telp']; ?>" required="">
                <label><b>username</b></label>
                <input type="text" id="username" name="username" value="<?php echo $sql['user']; ?>" class="w3-input" required="">
                <label><b>password</b></label>
                <input type="text" id="pass" name="passt" class="w3-input">
                <label><b>photo</b></label>
                <input name="foto" type="file" class="w3-input">
                <input type="hidden" name="id" class="w3-input" value="<?php echo $sql['id_pengguna']; ?>">
                <input type="hidden" name="pwd" class="w3-input" value="<?php echo $sql['kata_sandi']; ?>">
                <input type="hidden" name="ft" class="w3-input" value="<?php echo $sql['photo']; ?>">
                <button type="submit">simpan</button>
            </form>
        </div>
        <footer class="w3-container w3-teal">
            <p>Modal Footer</p>
        </footer>
    </div>