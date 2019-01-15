<?php 
include 'header.php';
 ?>
<div class="contact-bg2" id="posisi">
	 <div class="container">
	 <?php
	 	if ((empty($_POST['kode_book'])) && (empty($_GET['bcd']))){
	  ?>
		 <div class="booking">
			 <h3>Konfirmasi Pembayaran</h3>
			 <div class="col-md-12 booking-form" align="center">			 
				 <form method="POST" action="konfirmasi.php" class="form-group">
				 <h5>Masukan Kode Booking Anda</h5>
				 <input type="text" id="nama" name="kode_book" required="required">
				 <input id="tombol" type="submit" value="Submit" data-toggle="modal" data-target="#exampleModal">			 
				 </form>			      
			 </div>
		
				<div class="clearfix"> </div>

			 </div>
			 <?php }else{
			 	include 'include/koneksi.php';
			 	if (empty($_POST['kode_book'])) {
			 		$kode=$_GET['bcd'];
			 	}else{
				$kode=$_POST['kode_book']; }

				$sq="SELECT * FROM reservasi WHERE kode_reservasi='$kode'";
				$hasil= mysql_fetch_array(mysql_query($sq));
				
				if (empty($hasil['id_reservasi'])) {
					echo "<script type='text/javascript'>
					alert('Kode Reservasi Tidak ditemukan!!!');
					location.href='konfirmasi.php';</script>";
					// header ();
				}else{
				include 'include/koneksi.php';
				if (empty($_POST['kode_book'])) {
			 		$kode=$_GET['bcd'];
			 	}else{
				$kode=$_POST['kode_book']; }

				$sq="SELECT * FROM reservasi WHERE kode_reservasi='$kode'";
				$hasil= mysql_fetch_array(mysql_query($sq));
				$roomt=mysql_fetch_array(mysql_query("SELECT * FROM kamar WHERE id_kamar='$hasil[id_kamar]'"));
				
				$date1 = new DateTime("$hasil[tgl_masuk]");
				$date2 = new DateTime("$hasil[tgl_keluar]");
				$interval = $date1->diff($date2);
				$tot=$interval->days;

				$konfirm=$hasil['konfirmasi'];
				if ($konfirm === 'No') {
					$konfirmasi='<span class="label label-info">Menunggu</span>';
				}elseif ($konfirm === 'Yes') {
					$konfirmasi='<span class="label label-succes">Sukses</span>';
				}elseif ($konfirm === 'Gagal') {
					$konfirmasi='<span class="label label-danger">Gagal</span>';
				}
				?>
				<br />
				<div class="col-md-6" align="center">
				<div id="detail">
					<div align="center" style="background-color: red">Detail Reservasi</div>
				<table width="100%" align="center">
					
					<tr>
						<td align="left" width="20%">Guest Name</td>
						<td width="35%">: <?php echo $hasil['nama']; ?></td>
						<td width="15%">No. ID#</td>
						<td width="30%">: <?php echo $hasil['id_ktp']; ?></td>
					</tr>
					<tr>
						<td>Room Type</td>
						<td>: <?php echo $roomt['tipe_kamar']; ?></td>
						<td>Cek In</td>
						<td>: <?php echo $hasil['tgl_masuk']; ?></td>
					</tr>
					<tr>
						<td>Extra Bed</td>
						<td>: <?php echo $hasil['ekstra'] ;?></td>
						<td>Cek Out</td>
						<td>: <?php echo $hasil['tgl_keluar'] ?></td>
					</tr>
					<tr>
						<td>E-Mail</td>
						<td>: <?php echo $hasil['email']; ?></td>
						<td>Night</td>
						<td>: <?php echo $tot ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Adult: <?php echo $hasil['jumlah_orang']; ?></td>
						<td>Children: -</td>
					</tr>
					<tr>
						<td>Fasilitas</td>
						<td colspan="2">: <?php echo $roomt['fasilitas']; ?></td>
						<td></td>
					</tr>
						<td colspan="4"><hr /></td>
					<tr>
						<td>Total Bayar </td>
						<td></td>
						<td>:</td>
						<td>Rp. <?php echo number_format($hasil['jumlah_harga'])?></td>
					</tr>
					<tr>
						<td>Status Pembayaran </td>
						<td></td>
						<td>:</td>
						<td><?php echo $konfirmasi; ?></td>
					</tr>

					<tr>
						<td colspan="4">&nbsp</td>
					</tr>
					<tr>
						<td style="vertical-align: top;">Note*</td>
						<td style="vertical-align: top; color: red;" colspan="2">
							BNI : - <br />
							BRI : - <br />
							MANDIRI : - <br />
							Segera lakukan konfirmasi pembayaran dalam 1*24 jam.<br />
							Keterlambatan konfirmasi dianggap batal booking!</td>
						
						<td>-</td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" align="center" id="code"><strong>
							(<?php echo $hasil['kode_reservasi']; ?>)<br />
							<p style="text-decoration: underline;">BOOKING CODE</p></strong>
						</td>
						<td></td>
					</tr>
					
				</table>
				</div>	
			</div>
			<div class="col-md-6">
			<div id="konfirm" style="background-color: red; text-align: center;">Konfirmasi</div>
			<form method="POST" action="pro_konfirmasi.php" enctype="multipart/form-data">
			<?php
			$sql="SELECT * FROM konfirmasi WHERE id_reservasi='$hasil[id_reservasi]'";
			$sql=mysql_query($sql);
			$cek=mysql_num_rows($sql);
			if ($cek > 0) {
				$konf=mysql_fetch_array($sql);
				$gambar=$konf['bukti_transfer'];
				$catatan=$konf['keterangan'];
			}else{
				$gambar=null;
				$catatan=null;
			}
			?>
			<h3>Bukti Transfer</h3>
			<label for="fileToUpload">
                <img id="foto" src="images/<?php echo $gambar ;?>" name="fileToUpload" alt="foto" class="w3-round" width="100px">
            </label>
            <input id="fileToUpload" name="bukti" type="file" style="display:show" onchange="readURL(this);">
			
			<input type="hidden" name="idr" value="<?php echo $hasil['id_reservasi']; ?>"></input>
			<input type="hidden" name="bcd" value="<?php echo $kode; ?>">
			<h3>Catatan</h3>
			<textarea name="note" rows="3"><?php echo $catatan; ?></textarea>
			<button class="btn-danger pull-right" type="submit">Submit</button>
			</form>
			</div>

			 <?php	} } ?>
		 </div>
	 </div>
			<br />


 <?php 
include 'footer.php';
  ?>