<?php
$page   = isset($_GET['page']) ? $_GET['page'] : 'main';
$fpage  = './'.$page.'.php';
if(!file_exists($fpage)){
  $page = 'main';
  }
 ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Embewolu.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/navigation-icons.css">
    <link rel="stylesheet" href="css/slicknav/slicknav.min.css">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel='stylesheet'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    

</head>

<body>

<nav class="menu-navigation-icons">
    <a href="#" class="menu-magenta"><i class="fa fa-camera-retro"></i><span>Pictures</span></a>
    <a href="#" class="menu-blue"><i class="fa fa-code"></i><span>Code</span></a>
    <a href="#" class="menu-green"><i class="fa fa-comment"></i><span>Talks</span></a>
    <a href="#" class="menu-yellow"><i class="fa fa-plane"></i><span>Travel</span></a>
    <a href="#" class="menu-red"><i class="fa fa-heart"></i><span>Favorites</span></a>
</nav>


<div class="menu">
<div id="main">
        <div class="w3-container w3-light-grey">
            <div class="w3-container w3-light-grey" id="isi">
                
                <?php
                 include "./".$page.".php";
                  ?>
            </div>
            <!-- <footer class="w3-container w3-teal">
                    <h5>Footer</h5>
                    <p>Footer information goes here</p>
                </footer> -->
        </div></div>
  
</div>

<script src="js/jquery.min.js"></script>
<script src="css/slicknav/jquery.slicknav.min.js"></script>

<script>
    $(function(){
        $('.menu-navigation-icons').slicknav();
    });
</script>

</body>

</html>

   <!-- <link href="css/bootstrap.css" rel='stylesheet'>
    <link href="css/w3.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet"> -->
    
    
    <!---
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
    