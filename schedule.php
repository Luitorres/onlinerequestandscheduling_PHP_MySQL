<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin']) && !isset($_SESSION['user'])){
   header('location:Login.php');
   exit;
}

// $database = "sbit3n_db";

// $con = new mysqli($database);

// if($con->connect_error){
//     echo $con->connect_error;
// }

// $sql = "SELECT * FROM request_cedula";
// $request = $con->query($sql) or die ($con->error);
// $row = $request->fetch_assoc();

// print_r($row);
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

    <a href="user.php" class="back-link"><h4>< BACK</h4></a>

    <div class="clearanceformBG">
    <div class="certificatesched">
        <h1 class="namerequest">Certificate Schedule</h1>
        <hr class="lining">
    
        <div class="">

        </div>
    </div>
    </div>
</body>

</html>