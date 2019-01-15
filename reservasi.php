<!---strat-date-piker---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
		  <script>
		  var $j = jQuery.noConflict();
				  $(function() {
				    $j( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
<style type="text/css">
	.date {
		position: relative;
		z-index: 4;
	}
</style>
<div class="online_reservation">
		   <div class="b_room">
			  <div class="booking_room">
				  <div class="reservation">
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
										<option value="2" selected="selected">Kamar Standar</option> 
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
			  </div>
				<div class="clearfix"></div>
		  </div>
	  </div>

