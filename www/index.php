<?php
$username=$_POST["username"]??null;
$userpw=$_POST["userpw"]??null;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if ($username=="hasa"&&$userpw="ggy"){
        $islogin=True;
    }else{
        $islogin=False;
    }
    
}


// 로그인 관련 로그 작업
// 로그인 요청 성공/실패 여부 알림 발송

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
<body>
    <?php
    require($islogin ? "isLogin.php":"isNotLogin.php")
    ?>
</body>