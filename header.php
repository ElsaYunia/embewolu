<head>
<title>.:Welcome to EMBE WOLU Homestay:.</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/slideshow.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- <link type="text/css" rel="stylesheet" href="css/JFGrid.css" /> -->
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
<script src="js/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/JFCore.js"></script>
<script type="text/javascript" src="js/JFForms.js"></script>
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
					 <li><a href="index.php">BERANDA</a></li>
					 <li><a class="scroll" href="facilities.php">FASILITAS</a></li>
					 <li><a class="scroll" href="gallery.php">GALERI</a></li>
					 <li><a class="scroll" href="konfirmasi.php">KONFIRMASI</a></li>
					 <li><a class="scroll" href="contact.php">HUBUNGI KAMI</a></li>
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
</body>