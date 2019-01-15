<?php
include "../../include/koneksi.php";
$admin=$_POST['admin'];
if ($_POST['btn']==='sukses') {
	$konf="Yes";
}else{$konf='Gagal';}
$id=$_POST['id_reservasi'];
echo $sql="UPDATE reservasi SET konfirmasi='$konf', id_pengguna='$admin' WHERE id_reservasi='$id'";
$sql=mysql_query($sql);
header("location:../../admin/?data=m_bayar")
?>