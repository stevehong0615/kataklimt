<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once("database.php");

$account = $_SESSION['user_name'];
$sql = "SELECT * FROM users_table WHERE user_name ='".$account."'";
$userlist = mysqli_query($conn, $sql);
// $row = mysqli_fetch_array($result, MYSQLI_NUM);
// $user_list= mysqli_fetch_array($userlist);
$user_list=mysqli_fetch_row($userlist);

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
	<link rel="stylesheet" href="css/styleregister.css" type="text/css" media="screen">
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
    <section class="register">
        <div class="titulo">會員中心</div>
        <form name="form" method="post" action="edit_user.php">
            <p>帳號：<?php echo $user_list[1] ; ?></p><br>
            <p>密碼：</p><input type="password" name="pw" value="<?php echo $user_list[2] ; ?>" /><br>
            <p>再一次輸入密碼：</p><input type="password" name="pw2" value="<?php echo $user_list[2] ; ?>" /> <br>
            <p>暱稱：</p><input type="text" name="nickname" value="<?php echo $user_list[3] ; ?>" /> <br><br>
            <input class="enviar" type="submit" name="button" value="確定" />
        </div>   
        </form>
    </section>   

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>