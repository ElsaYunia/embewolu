<?php
include "../include/koneksi.php";
$id= $_POST['id'];
$tkamar= $_POST['t_kamar'];
$fasilitas= $_POST['fasilitas'];
$harga= $_POST['harga'];
$detail= $_POST['detail'];
$ft=mysql_fetch_array(mysql_query("SELECT foto FROM kamar WHERE id_kamar='$id'"));
if (empty($_FILES['foto']['name'])) {
	$gbr=$ft['foto'];
}else{
	$gbr="images/".$_FILES['foto']['name'];
}

if (empty($_FILES['foto']['size'])) {
	$fileSize=null;
	$fileSize=null;
	$fileError=1;
}else{
	$fileName = $_FILES['foto']['name']; //get the file name
	$fileSize = $_FILES['foto']['size']; //get the size
	$fileError = $_FILES['foto']['error']; //get the error when upload

if($fileSize > 0 || $fileError == 0)
	{ //check if the file is corrupt or error
		$move = move_uploaded_file($_FILES['foto']['tmp_name'], '../images/'.$fileName); //save image to the folder
		} 
	}
		$sql= "UPDATE `embewolu_db`.`kamar` SET `tipe_kamar` = '$tkamar', `fasilitas` = '$fasilitas', `harga` = '$harga', `foto` = '$gbr', `detail` = '$detail' WHERE `kamar`.`id_kamar` = '$id';
";
		$hasil=mysql_query($sql);
		if ($hasil) {
		echo "<script type='text/javascript'>
				alert('Ubah Data Berhasil.');
				location.href='../admin/?data=m_kamar';</script>";
		}else{
		echo "<script language='JavaScript'>alert('Error! Ubah Data Gagal.'); document.location='../admin/?data=m_kamar'; </script>'";
		}
?>