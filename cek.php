<!DOCTYPE html>
<html>
<?php 
	include('header.php');
	include('include/koneksi.php');

	$datein =$_GET['datein'];
	$dateout =$_GET['dateout'];
	$dateinp=explode('/', $datein);
	$tgl=$dateinp[1];
	$bln=$dateinp[0];
	$thn=$dateinp[2];
	$dateing=$thn."-".$bln."-".$tgl;

	$dateoutp=explode('/', $dateout);
	$tglo=$dateoutp[1];
	$blno=$dateoutp[0];
	$thno=$dateoutp[2];
	$dateoutg=$thno."-".$blno."-".$tglo;

	$date1 = new DateTime("$dateing");
	$date2 = new DateTime("$dateoutg");
	$interval = $date1->diff($date2);
	//echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 

// shows the total amount of days (not divided into years, months and days like above)
	//echo "difference " . $interval->days . " days ";
	$tot=$interval->days;
	
	$sql="SELECT * FROM kamar WHERE id_kamar NOT IN (SELECT id_kamar FROM reservasi WHERE tgl_masuk BETWEEN '".$dateing."' AND '".$dateoutg."' OR tgl_keluar BETWEEN '".$dateing."' AND '".$dateoutg."')";
	$hasil = mysql_query($sql) or exit("Gagal query: ". $sql);
?>
<!---->
 <div class="rooms text-center">
	 <div class="container">
		 <h3>Pilih Kamar untuk mulai Memesan </h3>
		 <div class="room-grids">
		   <?php 
				while($data = mysql_fetch_array($hasil)){
					$harga=$data['harga'];
					$total=$harga*$tot;
			?>
			<a href="booking.php?<?php echo "id_km=$data[id_kamar]&tgl_in=$dateing&tgl_out=$dateoutg"; ?>">
			 <div class="col-md-4 room-sec">				 
				 <img src="<?php echo $data['foto'];?>" width="400px" class="img-responsive" alt=""/>				 
				 <div class="caption">
					<span>Rp. <?php echo number_format($total, 2);?></span>
					<p>Book Now</p>
				 </div>
				 <h4><?php echo $data['tipe_kamar'];?></h4>
				 <p><?php echo $data['detail'];?></p>
			 </div></a>
		  <?php
		  	}
		  ?>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<?php 

	include('footer.php');
?>
<!---->
<script type='text/javascript' src='js/cycle.js'></script>
</body>
</html>