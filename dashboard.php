<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin'])){
   header('location:Login.php');
};

if($conn->connect_error){
    echo $conn->connect_error;
}

$cedula = "SELECT * FROM request_cedula";
$clearance = "SELECT * FROM request_clearance";
$goodmoral = "SELECT * FROM request_goodmoral";
$barangayid = "SELECT * FROM request_id";
$indigency = "SELECT * FROM request_indigency";
$residency = "SELECT * FROM request_residency";

$cedulaResult = $conn->query($cedula) or die($conn->error);
$clearanceResult = $conn->query($clearance) or die($conn->error);
$goodmoralResult = $conn->query($goodmoral) or die($conn->error);
$barangayidResult = $conn->query($barangayid) or die($conn->error);
$indigencyResult = $conn->query($indigency) or die($conn->error);
$residencyResult = $conn->query($residency) or die($conn->error);

$cedulaRow = $cedulaResult->fetch_assoc();
$clearanceRow = $clearanceResult->fetch_assoc();
$goodmoralRow = $goodmoralResult->fetch_assoc();
$barangayidRow = $barangayidResult->fetch_assoc();
$indigencyRow = $indigencyResult->fetch_assoc();
$residencyRow = $residencyResult->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
    <header class="sticky-header">
        <div class="logo">
            <a href="mapulanglupa.php">
                <img src="images/logo.jpg" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="mapulanglupa.php">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="request.php">REQUEST</a></li>
                <li><a href="dashboard.php">DASHBOARD</a></li>
                <li><a href="index.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>

    <div class="sidebar">
        <ul>
            <li><a href="pendingcedula.php">Cedula</a></li>
            <li><a href="pendingclearance.php">Clearance</a></li>
            <li><a href="pendinggoodmoral.php">Good Moral</a></li>
            <li><a href="pendingbarangayid.php">Barangay ID</a></li>
            <li><a href="pendingindigency.php">Indigency</a></li>
            <li><a href="pendingresidency.php">Residency</a></li>
            <li><a class="space_section"></a></li>
            <li><a href="certificateapprove.php">Approve</a></li>
            <li><a href="certificatecancel.php">Cancel</a></li>
            <li><a href="certificatedecline.php">Decline</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="landing" id="landing_section">
            <h2 class="namerequest">Default Section</h2>
            <hr class="lining">
            <!-- Content of the default section goes here -->
        </div>
    </div>

    <script>
        ScrollReveal({
            reset: true,
            distance: '30px',
            duration: 2500,
            delay: 400
        });
        ScrollReveal().reveal('.sidebar', {
            delay: 200,
            origin: 'left'
        });
        ScrollReveal().reveal('.content', {
            delay: 200,
            origin: 'right'
        });
    </script>
</body>
</html>