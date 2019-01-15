<?php
include "koneksi.php";
 $user=$_POST['user'];
 $pass=$_POST['pass'];

$sql_cek = "SELECT * FROM admin WHERE user='$user' 
			AND kata_sandi=md5('$pass')";
$qry_cek = mysql_query($sql_cek);
$ada_cek = mysql_num_rows($qry_cek);
$r=mysql_fetch_array($qry_cek);

if (!empty($sql_cek)) {
	session_start();
$_SESSION['username']     = $r['user'];
 	$_SESSION['id_user']      = $r['id_pengguna'];
	$_SESSION['level']		=$r['level'];
	$aa=$_SESSION['level'];
	$_SESSION['asd']="asd";
	if(!empty($r['level'])){
		
	header ("Location:../admin?id=$aa");	
}else {session_unset(); session_destroy();
	$pesan= "Username atau Password belum benarbbb";} 
	
}else {

	$pesan= "Username atau Password belum benaraaa";
} 
if (!empty($pesan)) {
	echo "<script type='text/javascript'>
					alert('$pesan!!!');
					location.href='../index.php';
			</script>";
			exit;
}
?>