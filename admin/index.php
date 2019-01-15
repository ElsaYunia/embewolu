<?php
  session_start();
  if (empty($_SESSION['level'])) {
  header ("Location:../index.php");  }else{}

$level=$_SESSION['level'];
if ($level === '1') {
  $rsp='<li class="w3-hide-small" id="m_resepsionis"><a class="w3-hover-teal" href="?data=m_resepsionis">Manajemen Resepsionis</a></li>';
}else{$rsp=null;}
 
$page   = isset($_GET['data']) ? $_GET['data'] : 'main';
$fpage  = './'.$page.'.php';
if(!file_exists($fpage)){
  $page = 'main';
  }
 ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ADMIN</title>
        <link href="../css/w3.css" rel="stylesheet">
        <link href="../css/admin.css" rel="stylesheet">
        <script src="../js/jquery.min.js"></script>
        <script src="menu.js"></script>
    </head>

    <body>
        <div id="main">
            <div class="w3-top">
                <header class="w3-container w3-light-green">
                    <h1>Menu Admin<?php $level ; ?></h1>
                    <ul class="w3-navbar w3-large w3-round w3-dark-grey w3-left-align">
                        <li class="w3-hide-medium w3-hide-large w3-black w3-opennav w3-right">
                            <a href="javascript:void(0);" onclick="myFunction()">☰</a>
                        </li>
                        <li><a href="../admin/">Home</a></li>
                        <li class="w3-hide-small" id="m_kamar"><a class="w3-hover-teal" href="#">Manajemen Kamar</a></li>
                        <li class="w3-hide-small" id="m_bayar"><a class="w3-hover-teal" href="#">Konfirmasi Pembayaran</a></li>
                        <?php echo $rsp ; ?>
                        <li class="w3-hide-small" id="m_kontak"><a class="w3-hover-teal" href="?data=m_kontak">Pesan</a></li>
                        <li class="w3-hide-small"><a href="../include/logout.php">Log Out</a></li>
                    </ul>
                    <div id="demo" class="w3-hide w3-hide-large w3-hide-medium">
                        <ul class="w3-navbar w3-left-align w3-large w3-light-green">
                            <li><a href="?data=m_kamar">Manajemen Kamar</a></li>
                            <li><a href="?data=m_bayar">Konfirmasi Pembayaran</a></li>
                            <?php echo $rsp ; ?>
                            <li><a href="?data=m_kontak">Pesan</a></li>
                        </ul>
                    </div>
            <script>
            function myFunction() {
                document.getElementById("demo").classList.toggle("w3-show");
            }
            </script>
            </header>
            </div>
            <div class="w3-container w3-light-grey">
                <div class="w3-container w3-light-grey" id="isi">
                    <?php include "./".$page.".php"; ?>
                </div>
                <!-- <footer class="w3-container w3-teal">
                    <h5>Footer</h5>
                    <p>Footer information goes here</p>
                </footer> -->
            </div>
            </div>
    </body>

    </html>
