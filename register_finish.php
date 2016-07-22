<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require_once("database.php");

$account = $_POST['account'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$nickname = $_POST['nickname'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($account != null && $pw != null && $pw2 != null && $pw = $pw2)
{
   //新增資料進資料庫語法
    $sql = "INSERT INTO users_table (user_name, password, nickname) VALUES ('$account', '$pw', '$nickname')";
    if(mysqli_query($conn, $sql) != null){
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}
?>