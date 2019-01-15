<?php
include "include/koneksi.php";

$note=$_POST['note'];
$idr=$_POST['idr'];
$bcd=$_POST['bcd'];
$sql="SELECT id_konfirmasi FROM konfirmasi WHERE id_reservasi='$idr'";
$cek=mysql_num_rows(mysql_query($sql));
if ($cek > 0) {
	echo "<script type='text/javascript'>
		alert('Proses gagal! Anda sudah melakukan konfirmasi sebelumnya!!!');
		location.href='konfirmasi.php';</script>";
}else{
	$fileName = $_FILES['bukti']['name']; //get the file name
	$fileSize = $_FILES['bukti']['size']; //get the size
	$fileError = $_FILES['bukti']['error']; //get the error when upload
	if($fileSize > 0 || $fileError == 0)
	{ //check if the file is corrupt or error
		$move = move_uploaded_file($_FILES['bukti']['tmp_name'], 'D:/xampp/htdocs/nila/images/'.$fileName); //save image to the folder
		if($move)
		{
		$sql= "INSERT INTO konfirmasi values ('','$idr','$fileName','$note')";
		$hasil=mysql_query($sql);
		echo "<script type='text/javascript'>
				alert('Konfirmasi berhasil.');
				location.href='konfirmasi.php?bcd=$bcd';</script>";
		}else {
		echo "<script language='JavaScript'>alert('Data Harus Lengkap !'); document.location='konfirmasi.php?bcd=$bcd'; </script>'";
		}
	}
}
  ?>