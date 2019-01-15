<?php
$to = $_POST['untuk'];
$subject = $_POST['subjek'];
$txt = $_POST['pesanb'];
$headers = "From: webmaster@embewolu.com" . "\r\n" .
"CC: $to";
if (mail($to,$subject,$txt,$headers)) {
	echo "<script type='text/javascript'>
					alert('Pesan terkirim');
					location.href='../admin/?data=m_kontak';
			</script>";
}else{
	echo "<script type='text/javascript'>
					alert('Gagal kirim pesan');
					location.href='../admin/?data=m_kontak';
			</script>";
}
// mail($to,$subject,$txt,$headers);

?>