<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        $_SESSION['username'] = "Guest";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script type="text/javascript" src="scripts/headerscript.js"></script>
    <title>Blog</title>
    <div class="header">
        <div class="title">Secure Blog System</div>
        <a href="index.php" class="button">
            <img src = "assets/images/home.png" onmouseover="homebuttonhover(this);" onmouseout="homebuttonunhover(this);">
        </a>
        <div></div>
        <a href="post-creation.php" class="button">
            <img src = "assets/images/add_blog.png" onmouseover="blogbuttonhover(this);" onmouseout="blogbuttonunhover(this);">
        </a>
        <div></div>
        <a href="login-form.php" class="button">
            <img src = "assets/images/login_group_button.png" onmouseover="loginbuttonhover(this);" onmouseout="loginbuttonunhover(this);">
        </a>
        <div></div>
        <a href="signup-form.php" class="button">
            <img src = "assets/images/register_group_button.png" onmouseover="registerbuttonhover(this);" onmouseout="registerbuttonunhover(this);">
        </a>
    </div>
    
</head>
<body>
    