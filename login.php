<?php 
session_start();

if (isset($_GET["logout"]))
{
	unset($_SESSION['user_name']);
	header("Location: login.php");
	exit();
}

if (isset($_POST["btnHome"]))
{
	header("Location: album.php");
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>臺灣寶島之美</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="./css/stylelogin.css" type="text/css">

</head>
<body>
    <section class="login">
        <div class="titulo">會員登入</div>
        <form name="form" method="post" action="connect.php">
            <p>帳號：</p><input type="text" name="account" /> <br>
            <p>密碼：</p><input type="password" name="pw" /> <br>
            <div class="olvido">
                <div class="col"><a href="register.php">申請帳號</a></div>
                <div class="col"> <a href="album.php">回相簿</a></div>
            </div>
            <input class="enviar" type="submit" name="button" value="登入" />
        </div>   
        </form>
    </section>   
</body>
</html>
