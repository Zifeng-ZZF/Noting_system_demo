<?php
/**
 * Created by PhpStorm.
 * User: Yichen.Hua
 * Date: 2018/12/29
 * Time: 19:28
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap Framework-->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/login/Login.css">
    <link rel="stylesheet" type="text/css" href="../css/signUp/signUp.css">
    <!-- jQuery-->
    <script type="application/javascript" rel="script" src="../scripts/jQuery/jquery-3.3.1.min.js"></script>
    <!-- JavaScripts-->
    <script type="application/javascript" rel="script" src="../scripts/signUp/signUp.js"></script>
    <title>Sign Up</title>
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
<!--            <a href="../../../../Documents/Tencent%20Files/619976974/FileRecv/Bootstrap2/Login.html" class="navbar-brand">注册新账户</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->
<div class="container container-big">
    <div class="container container-small">
        <h1 class="big-title">Sign Up for <b style="color: chocolate;">FongNews</b></h1>
        <form class="login-form" action="">
            <div class="form-group">
                <label>Username:</label>
                <input class="form-control" name="username" id="username">
            </div>
<!--            <div class="form-group">-->
<!--                <label>验证码:</label>-->
<!--                <div class="input-group">-->
<!--                    <input type="text" class="form-control">-->
<!--                    <div class="input-group-btn">-->
<!--                        <button class="btn btn-primary form-control">获取验证码</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="form-group">
                <label>Password: </label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
                <label>Confirm your password:</label>
                <input type="password" class="form-control" name="confirmPasswd" id="confirmPasswd">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" name="regALoginBtn" id="reALogBtn">Register and login</button>
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
