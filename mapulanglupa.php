<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin']) && !isset($_SESSION['member'])){
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
    <title>Mapulang Lupa | Online Request</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
    <header class="sticky-header">
        <div class="logo">
            <a href="#">
                <img src="images/logo.jpg" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="<?php echo isset($_SESSION['admin']) ? 'request.php' : 'services.php'; ?>"><?php echo isset($_SESSION['admin']) ? 'REQUEST' : 'SERVICES'; ?></a></li>
                <li><a href="<?php echo isset($_SESSION['admin']) ? 'dashboard.php' : '#'; ?>"><?php echo isset($_SESSION['admin']) ? 'DASHBOARD' : 'CONTACT'; ?></a></li>
                <li><a href="index.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>

    <div id="landing_page">
        <div class="container">
        </div>
        <p class="p-1">
            To achieve our common vision, we commit to
            ensure a cohesive citizenry sustained by
            dignified and world class officials and
            employees who are working together
            towards the fulfillment of our collective
            goal.<br><br><br><br>
            We commit to ensure an efficient City
            Government, sustained by dignified and
            competent officials and employees working
            towards the fulfilment of our common goals
            and who adhere to the Ten Codes of
            Discipline.
        </p>
        
        <h1 class="h-1"><?php echo isset($_SESSION['admin']) ? '<br>WELCOME ADMIN' : 'WELCOME TO MAPULANG LUPA<br>
            ONLINE REQUEST.'; ?>
        </h1>
        <p class="p-3"><?php echo isset($_SESSION['admin']) ? 'Take a look in a DASHBOARD tab.' : '3004 Sto. Rosario St. Mapulang Lupa, Valenzuela.'; ?>
        </p>

        <div> 
            <a href="<?php echo isset($_SESSION['admin']) ? 'dashboard.php' : 'services.php'; ?>">
                <button class="button"><?php echo isset($_SESSION['admin']) ? 'DASHBOARD' : 'GET STARTED'; ?></button>
            </a>
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
        ScrollReveal().reveal('.container', {
            delay: 500,
            origin: 'left'
        });
        ScrollReveal().reveal('.p-1', {
            delay: 800,
            origin: 'left'
        });
        ScrollReveal().reveal('.h-1', {
            delay: 300,
            origin: 'right'
        });
        ScrollReveal().reveal('.p-3', {
            delay: 800,
            origin: 'right'
        });
        ScrollReveal().reveal('.button', {
            delay: 500,
        });
    </script>
</body>
</html>
