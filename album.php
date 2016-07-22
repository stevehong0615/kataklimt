<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once("database.php");
require_once("deleteController.php");

if (isset($_GET["logout"]))
{
	unset($_SESSION['user_name']);
	header("Location: login.php");
	exit();
}

if (isset($_SESSION["user_name"]))
  $sUserName = $_SESSION["user_name"];
else 
  $sUserName = "Guest";

$sql = "SELECT * FROM album";
$dataPhoto = mysqli_query($conn, $sql);

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
                <li><a href="contact.html">連絡站長</a></li>
                <?php if ($sUserName == "Guest"): ?>
                <li><a href="login.php">登入</a></li>
                <?php else: ?>
                <li><a href="secret.php">會員中心</a></li>
                <li><a href="login.php?logout=1">登出</a></li>
                <?php endif; ?>
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
            <p><a href="upload.php">新增照片</a></p>  
            </article>
            <ul class="portfolio clearfix">
              <?php while($rowPhoto=mysqli_fetch_assoc($dataPhoto)){ ?>           
              <li class="box"><a href="images/<?php echo $rowPhoto["name"]; ?>" class="magnifier" ><img alt="" src="images/<?php echo $rowPhoto["name"]; ?>"></a>
              <br><?php echo $rowPhoto["comment"]; ?><br>
              <?php echo "<button type='button'  class = 'btn' onClick = 'SubmitFormEdit(" . $rowPhoto['id'] . ")' />編輯"; ?>
              <?php echo "<button type='button'  class = 'btn' onClick = 'SubmitForm(" . $rowPhoto['id'] . ")' />刪除"; ?>
              </li> 
              <?php } ?>
              <form action = "edit_album.php" method = "post">
                <input name = "edit" type = "hidden" id = "edit"></input>
              </form>
              <form action = "album.php" method = "post">
                <input name = "delete" type = "hidden" id="delete" ></input>
              </form>
            </ul>
          </div>
        </div>
      </div>
    </div>

<script type="text/javascript" src="js/bootstrap.js"></script>
<script>
  function SubmitFormEdit(id){
    $("#edit").val(id);
    $("form").submit();
  }
  
  function SubmitForm(id){
    $("#delete").val(id);
    $("form").submit();
  }
</script>
</body>
</html>