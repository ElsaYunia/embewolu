<div id="menu">
    <h2>Daftar Resepsionis</h2>
    <a class="w3-btn-floating w3-teal">+</a>
</div>
<div id="daftar">
    <ul class="w3-ul w3-card-4">
        <?php
  include "../include/koneksi.php";
  $sql="SELECT * FROM admin WHERE level=2";
  $sql=mysql_query($sql);
  while ($rs=mysql_fetch_array($sql)) {
  ?>
            <li class="w3-padding-16 konten">
                <a href="hapus_resepsionis.php?id=<?php echo $rs['id_pengguna']; ?>">
                    <button class="w3-closebtn w3-padding w3-margin-right w3-small w3-orange w3-border w3-border-gray w3-round">Hapus</button>
                </a>
                <a href="#">
                    <button id="edit" class="w3-closebtn w3-padding w3-margin-right w3-small w3-orange w3-border w3-border-gray w3-round edit" value="<?php echo $rs['id_pengguna']; ?>">Edit</button>
                </a>
                <img src="../images/<?php echo $rs['photo']; ?>" class="w3-left w3-circle w3-margin-right" style="width:60px">
                <span class="w3-xlarge"><?php echo $rs['nama_admin']." - ".$rs['no_telp']; ?></span>
                <br>
                <span>E-mail: <?php echo $rs['email']; ?></span>
                <span>Alamat: <?php echo $rs['alamat']; ?></span>
            </li>
            <?php } ?>
    </ul>
</div>
<div id="mdbaru" class="w3-modal">
    <div class="w3-modal-content">
        <header class="w3-container w3-teal">
            <span onclick="document.getElementById('mdbaru').style.display='none'" class="w3-closebtn">×</span>
            <h2>Tambah Resepsionis</h2>
        </header>
        <div id="misi" class="w3-container">
            <form method="POST" action="tbh_resepsionis.php" enctype="multipart/form-data">
                <label><b>nama</b></label>
                <input type="text" name="nama" class="w3-input" required="">
                <label><b>alamat</b></label>
                <input type="text" name="alamat" class="w3-input" required="">
                <label><b>email</b></label>
                <input type="text" name="email" class="w3-input" required="">
                <label><b>no. telp</b></label>
                <input type="text" name="telp" class="w3-input" required="">
                <label><b>username</b></label>
                <input type="text" id="username" name="username" class="w3-input" required="">
                <label><b>password</b></label>
                <input type="password" id="pass" name="pass" class="w3-input" required=""></input>
                <label><b>photo</b></label>
                <input name="foto" type="file" class="w3-input" required="">
                <button type="submit">simpan</button>
            </form>
        </div>
        <footer class="w3-container w3-teal">
            <p>Modal Footer</p>
        </footer>
    </div>
</div>

<div id="erep" class="w3-modal">
</div>
<script type="text/javascript">
$().ready(function() {
    $('#menu').on('click', 'a', function() {
        document.getElementById("mdbaru").style.display = "block";
    });
});
</script>
<script type="text/javascript">
$().ready(function(){
$('#daftar').on('click', '#edit', function(){
    var erep = $(this).val();
$.ajax({
      url:"modal_eresepsionis.php",
      data:"erep="+erep,
      success:function(data){
        $("#erep").html(data);
      } 
    });
  document.getElementById("erep").style.display = "block";
});
});
</script>
