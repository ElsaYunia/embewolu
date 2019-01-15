<?php
include "../include/koneksi.php";
$ft=$_POST['ft'];
$pwd=$_POST['pwd'];
$id=$_POST['id'];
$user=$_POST['username'];
$pwd2=$_POST['passt'];
// echo $pass=isset($pwd2) ? $pwd : $pwd2;
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$email=$_POST['email'];

if (empty($pwd2)) {
	$pass=$pwd;
}else{$pass=md5($pwd2);}

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
		if(!empty($_FILES['foto']['size'])){$foto=$fileName;
		}else{$foto=$ft; 	}

		$sql= "UPDATE admin SET user='$user', kata_sandi='$pass', nama_admin='$nama', alamat='$alamat', email='$email', no_telp='$telp', photo='$foto' WHERE id_pengguna='$id'";
		 $hasil=mysql_query($sql);
		if ($hasil) {
		echo "<script type='text/javascript'>
				alert('berhasil Ubah Data.');
				location.href='../admin/?data=m_resepsionis';</script>";
		}else{
		echo "<script language='JavaScript'>alert('Error! Gagal Ubah Data !'); document.location='../admin/?data=m_resepsionis'; </script>'";
		}
	
?>