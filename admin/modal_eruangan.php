<?php
include "../include/koneksi.php";
$idkm=$_GET['idkm'];
$km=mysql_fetch_array(mysql_query("SELECT * FROM kamar WHERE id_kamar='$idkm'"));
?>
    <div class="w3-modal-content">
        <header class="w3-container w3-teal">
            <span onclick="document.getElementById('medit').style.display='none'" class="w3-closebtn">×</span>
            <h2>Edit Kamar</h2>
        </header>
        <div id="misi" class="w3-container">
            <form method="POST" action="pro_editkamar.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $km['id_kamar']; ?> ">
                <label><b>Tipe Kamar</b></label>
                <input type="text" name="t_kamar" class="w3-input" value="<?php echo $km['tipe_kamar']; ?>">
                <label><b>Fasilitas</b></label>
                <input type="text" name="fasilitas" class="w3-input" value="<?php echo $km['fasilitas']; ?>">
                <label><b>Harga</b></label>
                <input type="text" name="harga" class="w3-input" value="<?php echo $km['harga']; ?> ">
                <label><b>Detail</b></label>
                <textarea type="text" name="detail" class="w3-input"><?php echo $km['detail']; ?></textarea>
                <label for="fileToUpload">
                    <img id="foto" src="../<?php echo $km['foto'] ;?>" name="fileToUpload" alt="foto" class="w3-round" width="100px">
                </label>
                <input id="fileToUpload" name="foto" type="file" style="display:none" onchange="readURL(this);">
                <br>
                <button type="submit" class="w3-btn w3-green w3-right w3-border w3-border-gray w3-round">Simpan</button>
            </form>
            <button class="w3-btn w3-blue w3-border w3-border-gray w3-round" onclick="document.getElementById('medit').style.display='none'">Batal</button>
        </div>
        <footer class="w3-container w3-teal">
            <p>Modal Footer</p>
        </footer>
    </div>
    </div>
    <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#foto').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
