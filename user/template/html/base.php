<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(!$_SESSION['loggedin']){
    header('Location: /');
} ?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Home Page
    </title>
    <link rel="stylesheet" href="template/css/base.css">
    <link rel="stylesheet" href="template/css/status.css">
    <link rel="stylesheet" href="template/css/request.css">    
</head>
<body>
    <ul id="top_bar">
        <li id="site-name"><a href="/" name="home">Library MS</a></li>
        <li><a href="template/html/about.php" target="_blank">About Us</a></li>
        <li><a href="template/html/contact.html" target="_blank">Contact Us</a></li>
        <li><a href="template/html/profile.php">Profile</a></li>
        <li><a href="template/php/logout.php">logout</a></li>
    </ul>
                