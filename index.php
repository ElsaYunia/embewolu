
<!DOCTYPE html>
<html>
<?php 
	include('include/koneksi.php');
	include('header.php');
?>

<body>
<?php
	include('slideshow.php');
	include('reservasi.php');

	$sql="SELECT * FROM kamar";
	$hasil = mysql_query($sql) or exit("Gagal query: ". $sql);
?>
<div class="rooms text-center">
	 <div class="container">
		 <h3>Tipe Kamar Tersedia</h3>
		 <div class="room-grids">
		  <?php 
				while($data = mysql_fetch_assoc($hasil)){
			?>
			 <div class="col-md-4 room-sec">
				 <img src="<?php echo $data['foto'];?>" width="400px" alt=""/>
				 <h4><?php echo $data['tipe_kamar'];?></h4>
				 
				 <div class="items">
					 <li><a href="#"><span class="img1"> </span></a></li>
					 <li><a href="#"><span class="img2"> </span></a></li>
					 <li><a href="#"><span class="img3"> </span></a></li>
					 <li><a href="#"><span class="img4"> </span></a></li>
					 <li><a href="#"><span class="img5"> </span></a></li>
					 <li><a href="#"><span class="img6"> </span></a></li>
				 </div>
		 	</div>
		 <?php
		   }
		 ?>
		 </div>
	 </div>
</div>
<!--footer-->
<?php 
	include('footer.php');
?>
<!---->
<script type='text/javascript' src='js/cycle.js'></script>
</body>
</html>