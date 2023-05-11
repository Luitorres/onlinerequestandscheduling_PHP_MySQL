<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin'])){
   header('location:Login.php');
};
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
            <a href="admin.php">
                <img src="images/logo.jpg" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="admin.php">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="certificaterequest.php">REQUEST</a></li>
                <li><a href="dashboard.php">DASHBOARD</a></li>
                <li><a href="index.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>

    <div class="sidebar">
        <ul>
            <li><a href="#cedula_section">Cedula</a></li>
            <li><a href="#clearance_section">Clearance</a></li>
            <li><a href="#goodmoral_section">Good Moral</a></li>
            <li><a href="#barangayid_section">Barangay ID</a></li>
            <li><a href="#indigency_section">Indigency</a></li>
            <li><a href="#residency_section">Residency</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="landing" id="landing_section">
            <h2 class="namerequest">Default Section</h2>
            <hr class="lining">
            <!-- Content of the default section goes here -->
        </div>

        <div class="cedula" id="cedula_section">
            <h2 class="namerequest">Barangay Cedula</h2>
            <hr class="lining">
            <!-- Content of the cedula section goes here -->
        </div>

        <div class="clearance" id="clearance_section">
            <h2 class="namerequest">Barangay Clearance</h2>
            <hr class="lining">
            <!-- Content of the clearance section goes here -->
        </div>

        <div class="goodmoral" id="goodmoral_section">
            <h2 class="namerequest">Barangay Certificate of Good Moral Character</h2>
            <hr class="lining">
            <!-- Content of the good moral section goes here -->
        </div>
        
        <div class="barangayid" id="barangayid_section">
            <h2 class="namerequest">Barangay ID</h2>
            <hr class="lining">
            <!-- Content of the barangay ID section goes here -->
        </div>

        <div class="indigency" id="indigency_section">
            <h2 class="namerequest">Barangay Indigency</h2>
            <hr class="lining">
            <!-- Content of the indigency section goes here -->
        </div>
        
        <div class="residency" id="residency_section">
            <h2 class="namerequest">Barangay Residency</h2>
            <hr class="lining">
            <!-- Content of the residency section goes here -->
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
        ScrollReveal().reveal('.sidebar', {
            delay: 200,
            origin: 'left'
        });
        ScrollReveal().reveal('.content', {
            delay: 200,
            origin: 'right'
        });

        // const menuItems = document.querySelectorAll('.sidebar li a');
        // const contentSections = document.querySelectorAll('.content > div');

        // menuItems.forEach(item => {
        //     item.addEventListener('click', function(event) {
        //         event.preventDefault();

        //         const targetId = this.getAttribute('href');
        //         const targetSection = document.querySelector(targetId);

        //         if (targetSection) {
        //             contentSections.forEach(section => {
        //                 if (section === targetSection) {
        //                     section.style.display = 'block';
        //                 } else {
        //                     section.style.display = 'none';
        //                 }
        //             });
        //         }
        //     });
        // });

        const menuItems = document.querySelectorAll('.sidebar li a');
        const contentSections = document.querySelectorAll('.content > div');

        // Hide all content sections except for the default section
        contentSections.forEach(section => {
        if (section.id === 'landing_section') {
            section.style.display = 'block';
        } else {
            section.style.display = 'none';
        }
        });

        menuItems.forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault();

            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
            contentSections.forEach(section => {
                if (section === targetSection) {
                section.style.display = 'block';
                } else {
                section.style.display = 'none';
                }
            });
            }
        });
        });
    </script>
</body>
</html>