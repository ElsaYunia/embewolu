<?php
include "../include/koneksi.php";
$user=$_POST['username'];
$pass=$_POST['pass'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$email=$_POST['email'];
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
		}else{$foto="default.jpg"; 	}
echo $foto;
		$sql= "INSERT INTO admin values ('','$user',md5('$pass'),'$nama','$alamat','$email','$telp','$foto',2)";
		$hasil=mysql_query($sql);
		if (!empty($_FILES['foto']['size'])) {
		echo "<script type='text/javascript'>
				alert('berhasil.');
				location.href='../admin/?data=m_resepsionis';</script>";
		}else{
		echo "<script language='JavaScript'>alert('error foto dirubah default !'); document.location='../admin/?data=m_resepsionis'; </script>'";
		}
	
?>