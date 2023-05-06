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
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
    <header class="sticky-header">
        <div class="logo">
            <a href="user.php">
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

    <a href="user.php" class="back-link"><h4>< BACK</h4></a>

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

    <script>
        ScrollReveal({
            reset: true,
            distance: '30px',
            duration: 2500,
            delay: 400
        });
        ScrollReveal().reveal('.sticky-header', {
            delay: 100,
            origin: 'top'
        });
        ScrollReveal().reveal('.back-link', {
            delay: 300,
            origin: 'left'
        });
        ScrollReveal().reveal('.request', {
            delay: 500,
            origin: 'left'
        });
        ScrollReveal().reveal('.schedule',  {
            delay: 500,
            origin: 'right'
        });
        ScrollReveal().reveal('.schedulebutton', {
            delay: 800,
        });
        ScrollReveal().reveal('.requestbutton',  {
            delay: 800,
        });
    </script>
</body>
</body>
</html>