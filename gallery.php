<!DOCTYPE html>
<html>
<?php 
	include('header.php');
?>
<!---->
 <div class="rooms text-center" id="posisi">
	 <div class="container">
		 <h3>Galeri</h3>
		 <div class="room-grids">
			 <!-- <div class="col-md-4 room-sec">
				 <a href="#"><img src="images/pic1.jpg" alt=""/></a>
				 <div class="caption">
					<span>&#8356; 250</span>
					<a href="contact.html">Book Now</a>
				 </div>
				 <h4>Lorem ipsum dolor</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque lectus vitae dui sollicitudin commodo.</p>
				 <div class="items">
					 <a href="#"><span class="img1"> </span></a>
					 <a href="#"><span class="img2"> </span></a>
					 <a href="#"><span class="img3"> </span></a>
					 <a href="#"><span class="img4"> </span></a>
					 <a href="#"><span class="img5"> </span></a>
					 <a href="#"><span class="img6"> </span></a>
				 </div>
			 </div> -->
			 <?php
			 for ($i=1; $i <= 18; $i++) { 
			 ?>
			 <div class="col-md-4 room-sec">
				 <a href="#"><img src="images/<?php echo $i; ?>.jpg" alt=""height="200" width="350px"/></a>
			 </div>
			 <?php } ?>
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