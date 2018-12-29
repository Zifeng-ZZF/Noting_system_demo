<?php
/**
 * Created by PhpStorm.
 * User: Yichen.Hua
 * Date: 2018/12/29
 * Time: 18:57
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/login/Login.css" type="text/css">
    <!--Bootstrap中自动引入了normalize.css的文件，无需自己引入-->
    <link rel="stylesheet" href="./css/bootstrap/normalized.css" type="text/css">
    <link rel="stylesheet" href="./css/bootstrap/bootstrap.css" type="text/css">
    <!-- JavaScripts-->
    <script type="application/javascript" rel="script" src="./scripts/login/login.js"></script>
    <title>Note-System-Login</title>
</head>
<body>
<!--<nav class="navbar navbar-default">-->
<!--    <div class="container">-->
<!--        <ul class="nav navbar-nav">-->
<!--            <li><a href="index.html">首页</a></li>-->
<!--            <li><a href="#">国内</a></li>-->
<!--            <li><a href="#">国际</a></li>-->
<!--            <li><a href="#">珠三角</a></li>-->
<!--        </ul>-->
<!--        <div class="Logo">-->
<!--            <a href="Login.html" class="navbar-brand">登录你的账户</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->
<div class="container container-big" style="width:100%">
    <div class="container container-small">
        <h1 class="big-title">Login - Welcome by &nbsp<b style="color: chocolate;">FongNews</b></h1>
        <h4 class="small-title"><a href="./tpl/signUp.php">Click here to sign up for our Noting System ~</a></h4>
        <form class="login-form" action="">
            <div class="form-group">
                <label>Username:</label>
                <input class="form-control" placeholder="Please enter your username here...">
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" placeholder="Please enter your password here...">
            </div>
            <div class="find-back">
                <a href="#">Forget your password?</a>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block">Login</button>
            </div>
        </form>
    </div>
</div>
<div class="footer">
    <b>@Copyright: Technische Hochschule Lübeck - Internet Programming - Team 5 - Hua Yichen, Zhang Zifeng, Lu Qin</b><br>
    Contact：Hua Yichen +49 163-3720-289 yichen.hua@stud.th-luebeck.de<br>
    Address: Mönkhofer Weg 239, 23562 Lübeck
</div>
</body>
</html>
