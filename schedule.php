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
    <title>Schedule</title>
    <link rel="stylesheet" href="main.css">
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
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

   

    <div class="certificatesched">
        <h1 class="CertificateSchedule">
            Certificate Schedule
        </h1>
        <hr class="lining2">
    </div>


    <a href="index.php" class="back-link">
        <span class="back-icon">&lt;</span>
    </a>
</body>

</html>