<?php
include 'include/koneksi.php';
// include 'header.php';  
?>
<!---->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>.:Welcome to EMBE WOLU Homestay:.</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/slideshow.css" rel='stylesheet' type='text/css'/>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.js"></script>
	<!-- <script type="text/javascript" src="js/JFCore.js"></script> -->
	<!-- <script type="text/javascript" src="js/JFForms.js"></script> -->
<script type="text/javascript">
		/* <![CDATA[ */
		var $j = jQuery.noConflict();
		$j(document).ready(function () {
			$j("#Content-slideshow").cycle({
				fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
				pager:  '#Nav-slideshow'
			});
		});
		/* ]]> */
		</script>

  </head>
<body>
<div class="header">
	 <div class="top-header">
		 <div class="container">
			 <div class="logo">
				 	<!-- <a href="index.html"><img src="images/logo.png" /></a> -->
					<a class="logo_text" href="index.php"><img src="images/logo_text.png" height="70px" /></a>
			 </div>
			 <span class="menu"> </span>
			 <div class="m-clear"></div>
			 <div class="top-menu">
				<ul>
					 <li><a href="index.php">HOME</a></li>
					 <li><a class="scroll" href="facilities.php">FACILITIES</a></li>
					 <li><a class="scroll" href="gallery.php">GALLERY</a></li>
					 <li><a class="scroll" href="booking.php">BOOKING</a></li>
					 <li><a class="scroll" href="contact.php">CONTACT US</a></li>
				</ul>
				<script>
					$("span.menu").click(function(){
						$(".top-menu ul").slideToggle(200);
					});
				</script>
			 </div>
			 <div class="clearfix"></div>
		  </div>
	  </div>
</div>	
<div class="contact-bg2" id="posisi">
	 <div class="container">
		 <div class="booking">
			 <h3>Booking</h3>
			 <div class="col-md-8 booking-form">			 
				 <form method="POST" action="book_detail.php" class="form-group">
				 <?php
$date1 = new DateTime("$_GET[tgl_in]");
	$date2 = new DateTime("$_GET[tgl_out]");
	$interval = $date1->diff($date2);
	$tot=$interval->days;
	$hrg=mysql_fetch_array(mysql_query("SELECT harga FROM kamar WHERE id_kamar='$_GET[id_km]'"));
	$harga=$hrg['harga'];
	$total=$tot*$harga;
	$km=$_GET['id_km'];
?>
				<input type="hidden" id="harga" name="harga" value="<?php echo $total ?>">
				<input type="hidden" id="hari" name="hari" value="<?php echo $tot ?>">
				<input type="hidden" id="km" name="km" value="<?php echo $km ?>">
				 <h5>NAME</h5>
				 <input type="text" id="nama" name="nama" value="" required="required">
				 <h5>NO. ID</h5>
				 <input type="text" id="no_ktp" name="no_ktp" value="" required="required">
				 <h5>E-MAIL</h5>
				 <input type="text" id="email" name="email" value="" required="required">
				 <h5>PHONE</h5>
				 <input type="text" id="phone" name="phone" value="" required="required">
				 <h5>Jumlah Tamu</h5>
				 <input type="text" id="jml"  name="jml" value="" required="required" maxlength="1">
				 <input type="hidden" name="id_kamar" value="<?php echo $_GET['id_km'];?>">
				 <h5>CHECK IN</h5>
				 <input type="text" id="tgl_in" name="tgl_in" value="<?php echo $_GET['tgl_in']; ?>" class="time" readonly>
				 <h5>CHECK OUT</h5>
				 <input type="text" id="tgl_out" name="tgl_out" value="<?php echo $_GET['tgl_out'];?>" class="time" readonly>
    			 <h5>Extra Bed</h5>
    			 <input id="extra" type="checkbox" name="extra" value="yes">    				
    			<h5>TOTAL BAYAR</h5>
    			<input id="total" name="total" type="text" value="<?php echo $total ?>" readonly="readonly">
				 <input id="tombol" type="submit" value="Submit" data-toggle="modal" data-target="#exampleModal">
				 <input type="reset" value="Reset" >			 
				 </form>			      

			 </div>
			 <div class="col-md-4 booking-news">
				 
			 </div>
		
				<div class="clearfix"> </div>

			 </div>
		 </div>
	 </div>


<!---->
<div class="fotter">
	 
</div>
<!---->
<div class="fotter-info">
	  
	  	  
</div>
<!---->

<script type='text/javascript' src='js/cycle.js'></script>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 

<script type="text/javascript">
$(document).ready(function(){	
$(".booking-form form #extra").click(function(){	
	var harga=$("#harga").val();
	var hari=$("#hari").val();	
	if (document.getElementById("extra").checked) {
		var tambahan=25000 * hari;

}else{var tambahan=0;}
var total=+harga + tambahan;
	$(".booking-form form #total").val(total);
}); });
</script>
</body>
</html>