<?php
include "../include/koneksi.php";
$id=$_GET['id'];

		$sql= "DELETE FROM admin WHERE id_pengguna='$id'";
		 $hasil=mysql_query($sql);
		if ($hasil) {
		echo "<script type='text/javascript'>
				alert('berhasil Hapus Data.');
				location.href='../admin/?data=m_resepsionis';</script>";
		}else{
		echo "<script language='JavaScript'>alert('Error! Gagal Hapus Data !'); document.location='../admin/?data=m_resepsionis'; </script>'";
		}
	
?>