<?php
header('Content-Type: text/html; charset = utf-8');
require_once("database.php");

$edit = $_POST['edit'];
$edit_sql = "SELECT * FROM album WHERE id =". $edit;
mysqli_query($edit_sql);
$editPhoto=mysqli_fetch_assoc($edit_sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>臺灣寶島之美</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>    
    <script type="text/javascript" src="js/touchTouch.jquery.js"></script> 
    
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>
	<script>		
		jQuery(window).load(function() {	
		    $x = $(window).width();		
	        if($x > 1024)
    	    {			
	            jQuery("#content .row").preloader();    }			 
	        jQuery('.magnifier').touchTouch();
		    jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
  		}); 
	</script>
</head>

<body>
<div class="spinner"></div>
<!--============================== header =================================-->
<header>
    <div class="container clearfix">
      <div class="row">
        <div class="span12">
          <div class="navbar navbar_">
            <div class="container">
              <h1 class="brand brand_"><img alt="" src="img/logo.jpg"> </a></h1>
              <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
              <ul class="nav sf-menu">
                <li class="active"><a href="http://lab-stevehong0615.c9users.io/cakephp/Project/users/login">首頁</a></li>
                <li><a href="album.php">美景導覽</a></li>
                <li><a href="contact.html">關於我</a></li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</header>
    <div class="bg-content">       
<!--============================== content =================================-->      
      <div id="content">
        <div class="container">
          <div class="row">
            <article class="span12">
            <br>
            <p>編輯照片</p>  
            </article>
                     

          </div>
        </div>
      </div>
    </div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>