<!DOCTYPE html>
<html lang="en">
<head>
	<title>臺灣寶島之美</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="./css/styleregister.css" type="text/css">

</head>
<body>
    <section class="register">
        <div class="titulo">會員註冊</div>
        <form name="form" method="post" action="register_finish.php">
            <p>帳號：</p><input type="text" name="account" /><br>
            <p>密碼：</p><input type="password" name="pw" /><br>
            <p>再一次輸入密碼：</p><input type="password" name="pw2" /> <br>
            <p>暱稱：</p><input type="text" name="nickname" /> <br>
            <div class="olvido">
                <div class="col"> <a href="login.php">回登入頁</a></div>
            </div>
            <input class="enviar" type="submit" name="button" value="確定" />
        </div>   
        </form>
    </section>   
</body>
</html>