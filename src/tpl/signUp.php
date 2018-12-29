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
    <link rel="stylesheet" type="text/css" href="../css/signup/signUp.css">
    <link rel="stylesheet" type="text/css" href="../css/signup/Detail.css">
    <link rel="stylesheet" type="text/css" href="../css/login/Login.css">
    <!--Bootstrap Framework-->
    <link rel="stylesheet" href="../css/bootstrap/normalized.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css">
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
                <label>手机号:</label>
                <input class="form-control">
            </div>
            <div class="form-group">
                <label>验证码:</label>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-primary form-control">获取验证码</button>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>密码:</label>
                <input type="password" class="form-control">
            </div>
            <div class="form-group">
                <label>确认密码:</label>
                <input type="password" class="form-control">
            </div>
            <div class="find-back">
                我已阅读FongNews<a href="#">《相关条款》</a>
                <input type="checkbox" class="checkbox-inline"><br>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block">登录</button>
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
