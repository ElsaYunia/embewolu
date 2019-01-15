<!DOCTYPE html>
<html>
<?php 
	include('header.php');
?>
<!---->
<div class="contact-bg" id="posisi">
	 <div class="container">
	      <div class="contact-us">				
				<div class="contact-us_left">
					<div class="contact-us_info">
			    	 	<h3 class="style">Temukan Kami</h3>
			    	 		<div class="map">
					   			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7906.750474426079!2d110.39940062280901!3d-7.749965196788923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59a74ba6cfd1%3A0xfd48c9ed4f82ea2a!2sJl.+Merpati%2C+Condong+Catur%2C+Kec.+Depok%2C+Kabupaten+Sleman%2C+Daerah+Istimewa+Yogyakarta!5e0!3m2!1sen!2sid!4v1459880290636" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					   		</div>
					</div>
					<div class="company_address">
				     	<h3 class="style">Homestay Information :</h3>
						<p>Jl. Condong Catur, Gg. Merpati,</p>
						<p>Utara Terminal Condong Catur,</p>
						<p>Yogyakarta, Indonesia</p>
				   		<p>Phone:(0274) 222 666 444</p>
				   		<p>Fax : (0274) 000 00 00 0</p>
				 	 	<p>Email : <a href="mailto:info@example.com">info(at)myhotel.com</a></p>
				   		<!-- <p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p> -->
					</div>
				</div>				
				<div class="contact_right">
				  <div class="contact-form">
				  	<h3 class="style">Contact Us</h3>
					    <form method="post" action="pro_kontak.php">
					    	<div>
						    	<span><label>NAMA</label></span>
						    	<span><input name="nama" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="email" type="text" class="textbox" required></span>
						    </div>
						    <div>
						     	<span><label>ALAMAT</label></span>
						    	<span><input name="alamat" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>PESAN</label></span>
						    	<span><textarea name="pesan" required> </textarea></span>
						    </div>
						   <div>
						   		<input type="submit" value="submit us">
						  </div>
					    </form>
				    </div>
  				</div>		
  				<div class="clear"></div>		
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