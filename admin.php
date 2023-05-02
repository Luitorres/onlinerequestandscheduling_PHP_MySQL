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
    <title>Landing Page</title>
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

    <div class="container">

    </div>

    <p class="p-1">
        To achieve our common vision, we commit to
        ensure a cohesive citizenry sustained by
        dignified and world class officials and
        employees who are working together
        towards the fulfillment of our collective
        goal.
    </p>
    <p class="p-2">
        We commit to ensure an efficient City
        Government, sustained by dignified and
        competent officials and employees working
        towards the fulfilment of our common goals
        and who adhere to the Ten Codes of
        Discipline.
    </p>

    <h1 class="h-1">
        WELCOME ADMIN
    </h1>

    <h1 class="h-2">
    <?php echo $_SESSION['admin_name'] ?>
    </h1>


    <div> <a href="#">
            <button>SEE REQUESTS</button>
        </a>
    </div>





</body>

</html>