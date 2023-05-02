
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
                <li><a href="user.php">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="request.php">SERVICES</a></li>
                <li><a href="#">CONRACT</a></li>
                <li><a href="index.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>



    <a href="request.php" class="back-link">
        <span class="back-icon">&lt;</span>
    </a>

    <div class="CertificateListBG">
    <div class="CertificateRequest">
        <h2 class="namerequest">
            Certificate Request
        </h2>

        <hr class="lining">

        <div class="CertificateList">
            <ul>
                <a href="barangayclearance.php" >Barangay Clearance</a><br><br>
                <a href="barangayid.php" >Barangay ID</a><br><br>
                <a href="goodmoral.php" >Barangay Certificate of Good Moral Character</a><br><br>
                <a href="barangayresidency.php" >Barangay of Residency</a><br><br>
                <a href="barangayindigency.php" >Barangay Indigency</a><br><br>
                <a href="barangaycedula.php" >Barangay Cedula</a>
                <!-- <a href="baranggayclearance.php" class="brgyhealth">Barangay Health Certificate</a> -->
                <!-- <a href="baranggayclearance.php" class="brgypermit">Barangay Business Permit</a> -->
            </ul>
        </div>           
    </div>
    </div>

</body>

</html>