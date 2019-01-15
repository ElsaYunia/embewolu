<?php
include "include/koneksi.php";

echo $nama=$_POST['nama'];
echo $email=$_POST['email'];
echo $no_ktp=$_POST['no_ktp'];
echo $phone=$_POST['phone'];
echo $id_kamar=$_POST['id_kamar'];
echo $tgl_in=$_POST['tgl_in'];
echo $tgl_out=$_POST['tgl_out'];
if (empty($_POST['extra'])) {
	$extra="NO";
}else{$extra=$_POST['extra'];}
echo $extra;

?>
