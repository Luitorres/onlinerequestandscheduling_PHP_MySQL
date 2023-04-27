
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['name'])){
   header('location:Login.php');
};



?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Request</title>
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



    <a href="request.php" class="back-link">
        <span class="back-icon">&lt;</span>
    </a>


    <div class="CertificateRequest">
        <h2 class="namerequest">
            Certificate Request
        </h2>
        <hr class="lining2">

        <a href="barangayclearance.php" class="brgyclearance">Barangay Clearance</a>
        <a href="barangayid.php" class="brgyid">Barangay ID</a>
        <a href="baranggayclearance.php" class="brgypermit">Barangay Business Permit</a>
        <a href="goodmoral.php" class="brgycharacter">Barangay Certificate of Good Moral Character</a>
        <a href="barangayresidency.php" class="brgyresidency">Barangay of Residency</a>
        <a href="barangayindigency.php" class="brgyindigency">Barangay Indigency</a>
        <a href="baranggayclearance.php" class="brgyhealth">Barangay Health Certificate</a>
        <a href="barangaycedula.php" class="brgycedula">Barangay Cedula</a>
    </div>
</body>

</html>