<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin']) && !isset($_SESSION['user'])){
   header('location:Login.php');
   exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Request</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
    <header class="sticky-header">
        <div class="logo">
            <a href="<?php echo isset($_SESSION['admin']) ? 'admin.php' : 'user.php'; ?>">
                <img src="images/logo.jpg" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo isset($_SESSION['admin']) ? 'admin.php' : 'user.php'; ?>">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="<?php echo isset($_SESSION['admin']) ? 'certificaterequest.php' : 'request.php'; ?>"><?php echo isset($_SESSION['admin']) ? 'REQUEST' : 'SERVICES'; ?></a></li>
                <li><a href="<?php echo isset($_SESSION['admin']) ? 'dashboard.php' : '#'; ?>"><?php echo isset($_SESSION['admin']) ? 'DASHBOARD' : 'CONTACT'; ?></a></li>
                <li><a href="index.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>

    <a href="<?php echo isset($_SESSION['admin']) ? 'admin.php' : 'request.php'; ?>" class="back-link"><h4>< BACK</h4></a>

    <div class="CertificateListBG">
    <div class="CertificateRequest">
        <h2 class="namerequest">Certificate Request</h2>
        <hr class="lining">

        <div class="CertificateList">
            <ul>
                <a href="barangaycedula.php" >Barangay Cedula</a><br><br>
                <a href="barangaygoodmoral.php" >Barangay Certificate of Good Moral Character</a><br><br>
                <a href="barangayclearance.php" >Barangay Clearance</a><br><br>
                <a href="barangayid.php" >Barangay ID</a><br><br>
                <a href="barangayindigency.php" >Barangay Indigency</a><br><br>
                <a href="barangayresidency.php" >Barangay Residency</a>
            </ul>
        </div>           
    </div>
    </div>

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
        ScrollReveal().reveal('.CertificateRequest', {
            delay: 300,
        });
        ScrollReveal().reveal('.CertificateList', {
            delay: 800,
            origin: 'right'
        });
    </script>

</body>

</html>