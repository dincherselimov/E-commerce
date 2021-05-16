<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <!--<link rel="stylesheet" type="text/css" href="/ikt-second-year/views/css/main.css">-->
</head>
<body>
<nav>
    <ul>
        <section class="logo">
         <a href="<?php echo APPLICATION_PATH?>index.php"><h1>DaMix</h1></a>
        </section>
        <li><a href="<?php echo APPLICATION_PATH?>index.php?controller=blog&action=listAll">Blog</a></li>
        <li><a href="<?php echo APPLICATION_PATH?>index.php?controller=movies&action=listAll">Movies</a></li>
        <li><a href="<?php echo APPLICATION_PATH?>index.php?controller=shoes&action=listAll">Shoes</a></li>
        <li><a href="<?php echo APPLICATION_PATH?>index.php?controller=watches&action=listAll">Watches</a></li>
        <li><a href="<?php echo APPLICATION_PATH?>index.php?controller=jackets&action=listAll">Jackets</a></li>
        <li><a href="<?php echo APPLICATION_PATH?>index.php?controller=jeans&action=listAll">Jeans</a></li>
        <li><a href="<?php echo APPLICATION_PATH?>index.php?controller=tshirts&action=listAll">T-Shirts</a></li>
        <?php


        echo "<li>
             <form action='" . APPLICATION_PATH . "index.php?login=true' method='post'>
             <input type='submit' value='";

        echo (!empty($_SESSION["uid"])) ? "Logout" : "Login";
        echo "'>
                </form>
                </li>";
        ?>
    </ul>
</nav>


<main>
    <section class="cover">
        <section class="spinner">
            <span class="dot1"></span>
            <span class="dot2"></span>
        </section>
    </section>
    <section class="content">
