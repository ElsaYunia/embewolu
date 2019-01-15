    <div class="w3-modal-content">
        <header class="w3-container w3-teal">
            <span onclick="document.getElementById('mtambah').style.display='none'" class="w3-closebtn">×</span>
            <h2>Tambah Kamar</h2>
        </header>
        <div id="misi" class="w3-container">
            <form method="POST" action="pro_tbhkamar.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="">
                <label><b>Tipe Kamar</b></label>
                <input type="text" name="t_kamar" class="w3-input" value="">
                <label><b>Fasilitas</b></label>
                <input type="text" name="fasilitas" class="w3-input" value="">
                <label><b>Harga</b></label>
                <input type="text" name="harga" class="w3-input" value="">
                <label><b>Detail</b></label>
                <textarea type="text" name="detail" class="w3-input"></textarea>
                <input id="fileToUpload" name="foto" type="file">
                <br>
                <button type="submit" class="w3-btn w3-green w3-right w3-border w3-border-gray w3-round">Tambah</button>
            </form>
            <button class="w3-btn w3-blue w3-border w3-border-gray w3-round" onclick="document.getElementById('mtambah').style.display='none'">Batal</button>
        </div>
        <footer class="w3-container w3-teal">
            <p>Modal Footer</p>
        </footer>
    </div>
    </div>