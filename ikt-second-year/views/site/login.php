<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Login</title>-->
<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo APPLICATION_PATH?><!--views/css/style.css">-->
<!--    <link rel="preconnect" href="https://fonts.gstatic.com">-->
<!--    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">-->
<!--</head>-->
<!---->
<!---->
<!---->
<!--<body>-->
<!---->
<!---->
<!--<form class="container" action="--><?php //echo APPLICATION_PATH?><!--index.php" method="post">-->
<!--    <section class="logo">-->
<!--        <h1>DaMix</h1>-->
<!--        <h6>Man's Fashion</h6>-->
<!--    </section>-->
<!--    <input name="username" placeholder="username" autocomplete="on">-->
<!--    <input type="password" name="password" placeholder="password" autocomplete="off">-->
<!--    <input type="submit" value="Login"/>-->
<!--    <a href="--><?php //echo APPLICATION_PATH?><!--index.php?register=true">No registration?</a>-->
<!--</form>-->
<!--</body>-->
<!--</html>-->


<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo APPLICATION_PATH?>views/css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    </head>
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form class="container" action="<?php echo APPLICATION_PATH?>index.php" method="post">
        <input name="username" placeholder="username" autocomplete="on">
        <input type="password" name="password" placeholder="password" autocomplete="off">
        <input class="myButton" type="submit" value="Login"/>
        <a class="reg" href="<?php echo APPLICATION_PATH?>index.php?register=true">No registration?</a>
    </form>
</div>
</body>
</html>

<style>

    .reg{
        margin-left: 22%;
        color: black;
        border: 1px solid black;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: -webkit-inline-flex;
        cursor: pointer;
        box-shadow: 3px 4px 0px 0px #8a2a21;
        background:linear-gradient(to bottom, #c62d1f 5%, darkorange 100%);
        text-decoration:none;
        text-shadow:0px 1px 0px #810e05;
    }
    .myButton {
        box-shadow: 3px 4px 0px 0px #8a2a21;
        background:linear-gradient(to bottom, #c62d1f 5%, #f24437 100%);
        background-color:#c62d1f;
        border-radius:18px;
        border:1px solid #d02718;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:Arial;
        font-size:17px;
        padding:7px 25px;
        text-decoration:none;
        text-shadow:0px 1px 0px #810e05;
        margin-left: 0%;
    }
    .myButton:hover {
        background:linear-gradient(to bottom, #f24437 5%, #c62d1f 100%);
        background-color:#f24437;
    }
    .myButton:active {
        position:;
        top:1px;

    }
    * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box;
        -o-box-sizing:border-box; box-sizing:border-box; }

    html { width: 100%; height:100%; overflow:hidden; }

    body {
        width: 100%;
        height:100%;
        font-family: 'Open Sans', sans-serif;
        background-image: url("https://wallpaperaccess.com/full/4357577.jpg");
        background-size: 90%;
        background-attachment: fixed;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
    }
    .login {
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -150px 0 0 -150px;
        width:300px;
        height:300px;
    }
    .login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

    input {
        width: 100%;
        margin-bottom: 30px;
        margin-top: -20px;
        background: ;
        border: none;
        outline: none;
        padding: 15px;
        font-size: 13px;
        color: black;
        text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
        border: 1px solid rgba(0,0,0,0.3);
        border-radius: 4px;
        box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
        -webkit-transition: box-shadow .5s ease;
        -moz-transition: box-shadow .5s ease;
        -o-transition: box-shadow .5s ease;
        -ms-transition: box-shadow .5s ease;
        transition: box-shadow .5s ease;
    }
    input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
    Resources1?? 0.5?? 0.25??Rerun
</style>