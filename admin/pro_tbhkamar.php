<?php
include '../include/koneksi.php';
$tkamar= $_POST['t_kamar'];
$fasilitas= $_POST['fasilitas'];
$harga= $_POST['harga'];
$detail= $_POST['detail'];


	$fileName = $_FILES['foto']['name']; //get the file name
	$fileSize = $_FILES['foto']['size']; //get the size
	$fileError = $_FILES['foto']['error']; //get the error when upload

if($fileSize > 0 || $fileError == 0)
	{ //check if the file is corrupt or error
		$move = move_uploaded_file($_FILES['foto']['tmp_name'], '../images/'.$fileName); //save image to the folder
		 
	if ($move) {
		
		$sql= "INSERT INTO `embewolu_db`.`kamar` (`id_kamar`, `tipe_kamar`, `fasilitas`, `harga`, `foto`, `detail`) VALUES (NULL, '$tkamar', '$fasilitas', '$harga', 'images/".$fileName."', '$detail')";

		$hasil=mysql_query($sql);
		echo "<script type='text/javascript'>
				alert('Tambah Kamar Berhasil.');
				location.href='../admin/?data=m_kamar';</script>";
		}else{
		echo "<script language='JavaScript'>alert('Error! Simpan Gambar Gagal.'); document.location='../admin/?data=m_kamar'; </script>'";
		}
	}else{echo "<script language='JavaScript'>alert('Error! Tambah Kamar Gagal.'); document.location='../admin/?data=m_kamar'; </script>'";}
?>