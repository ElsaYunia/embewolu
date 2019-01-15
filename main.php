<?php
	include('include/koneksi.php');
	$sql="SELECT * FROM kamar";
	$hasil = mysql_query($sql) or exit("Gagal query: ". $sql);
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/satu.jpg" alt="Chania" width="1499px" height="400px">
      </div>

      <div class="item">
        <img src="images/dua.jpg" alt="Chania" width="1499px" height="400px">
      </div>
    
      <div class="item">
        <img src="images/tiga.jpg" alt="Flower" width="1499px" height="400px">
      </div>

      <div class="item">
        <img src="images/empat.jpg" alt="Flower" width="1499px" height="400px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    <link rel="stylesheet" href="css/jquery-ui.css" />
    <script src="js/jquery-ui.js"></script>
		<script>
		  var $j = jQuery.noConflict();
				  $j(function() {
				    $j( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
			  
					 <div id="tgll">
					  <ul>				
					  <form method="GET" action="cek.php">
						 <li  class="span1_of_1 left">
							 <h5>Check In</h5>
							 <div class="book_date">
								 <input class="date" id="datepicker" type="text" name="datein" placeholder="bb/hh/tt">
							 </div>					
						 </li>
						 <li  class="span1_of_1 left">
							 <h5>Check Out</h5>
							 <div class="book_date">
								<input class="date" id="datepicker1" type="text" name="dateout" placeholder="bb/hh/tt">
						     </div>		
						 </li>
						 <li class="span1_of_1">
							 <h5>kamar</h5>
							 <div class="section_room">
							      <select id="country" class="frm-field required" name="jeniskmr" >
										<option value="1">1 Set Rumah</option>
										<option value="2" selected="selected">Single Room</option> 
							      </select>
							 </div>	
						 </li>
						 <li class="span1_of_3">
								<div class="date_btn">
										<input type="submit" value="Check" />
								</div>
						 </li>
						</form>
						 <div class="clearfix"></div>
					 </ul>
					 </div>
		   
<div class="rooms text-center">
	 <div class="">
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