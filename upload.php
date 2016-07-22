<?php
header('Content-Type: text/html; charset = utf-8');
require_once("database.php");

// 上傳照片
for ($i=0; $i<count($_FILES["UpPhoto"]); $i++) {
	if ($_FILES["UpPhoto"]["tmp_name"][$i] != "") {
	  $query_insert = "INSERT INTO album (name, date, comment) VALUES (";
	  $query_insert .= "'". $_FILES["UpPhoto"]["name"][$i]."',";
	  $query_insert .= "NOW(),";	  
	  $query_insert .= "'".$_POST["Photo_Comment"][$i]."')";		  
	  mysqli_query($conn, $query_insert);
  
    if(!move_uploaded_file($_FILES["UpPhoto"]["tmp_name"][$i], "images/" . $_FILES["UpPhoto"]["name"][$i])) die("上傳失敗！");
      
	}
	//導回相簿主頁
	header("Location: album.php");
}

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
                <li class="active"><a href="https://lab-stevehong0615.c9users.io/cakephp/">首頁</a></li>
                <li><a href="album.php">美景導覽</a></li>
                <li><a href="contact.html">聯絡站長</a></li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</header>

<div class="bg-content" style="border: 1px ; padding: 30px">       
  <h3>新增照片</h3>
  <form action = "" method = "post" enctype = "multipart/form-data">
  <input type = "file" name = "UpPhoto[]" id = "UpPhoto"><br>
  <input type = "text" name = "Photo_Comment[]" id = "Photo_Comment"><br>
  <input type = "file" name = "UpPhoto[]" id = "UpPhoto"><br>
  <input type = "text" name = "Photo_Comment[]" id = "Photo_Comment"><br>
  <input type = "file" name = "UpPhoto[]" id = "UpPhoto"><br>
  <input type = "text" name = "Photo_Comment[]" id = "Photo_Comment"><br>
  <input type = "submit" value = "送出">
  </form>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>