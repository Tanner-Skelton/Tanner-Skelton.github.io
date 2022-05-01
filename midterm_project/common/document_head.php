<?php
session_start();
?>
<!DOCTYPE html>
<!-- document_head.html -->
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>John, Tanner, and David's Site</title>
        <!--<base href="./midterm_project">-->
        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <!--Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="../js/materialize.js"></script>
        <script src="../js/init.js"></script>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container">
                <ul class="left hide-on-med-and-down">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="shop.php">Shop</a><li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="registerForm.php">Register</a></li>
                    <?php
                        if (!isset($_SESSION['usersID'])) {
                            echo "<li><a href='loginForm.php'>Login</a></li>";
                        } else {
                            echo "<li><a href='../scripts/logoutProcess.php'>Logout</a></li>";
                        }
                    ?>
                    
                </ul>
                <ul class="right">
                    <?php
                        if (isset($_SESSION['usersID'])) {
                            echo "<li><a href='../pages/shoppingCart.php'><i class='material-icons'>shopping_cart</i></a></li>";
                            echo "<li>Welcome, $_SESSION[firstName]</li>";
                        } else {
                            echo "<li>Welcome</li>";
                        }
                    ?>
                </ul> 
                <ul id="nav-mobile" class="sidenav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="shop.php">Shop</a><li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="registerForm.php">Register</a></li>
                    <?php
                        if (!isset($_SESSION['usersID'])) {
                            echo "<li><a href='loginForm.php'>Login</a></li>";
                        } else {
                            echo "<li><a href='../scripts/logoutProcess.php'>Logout</a></li>";
                        }
                    ?>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </head>
