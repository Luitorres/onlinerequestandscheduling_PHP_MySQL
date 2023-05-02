<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['name'])){
   header('location:Login.php');
};



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Page</title>
    <link rel="stylesheet" href="main.css">

</head>

<body>
    <header class="sticky-header">

        <div class="logo">
            <a href="index.php">
                <img src="images/logo.jpg" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="user.php">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="request.php">SERVICES</a></li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="index.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>




    <a href="user.php" class="back-link">
        <span class="back-icon">&lt;</span>
    </a>

    <div class="request">
        <div class="documentbackground"></div>
        <img src="images/document.png" alt="docu">
    </div>

    <a href="certificaterequest.php" class="requestbutton">REQUEST</a>

    <div class="schedule">
        <div class="schedulebackground"></div>
        <img src="images/schedule.png" alt="sched">
    </div>
    <a href="schedule.php" class="schedulebutton">SCHEDULE</a>




</body>

</html>