<?php
include 'include/koneksi.php';
$nama=$_POST['nama'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$pesan=$_POST['pesan'];

$sql="INSERT INTO hubungi_kami VALUES ('', '$nama', '$alamat', '$email', '$pesan')";
$sql=mysql_query($sql);
echo "<script type='text/javascript'>
					alert('Terima kasih pesan telah terkirim');
					location.href='index.php';
			</script>";
			
?>