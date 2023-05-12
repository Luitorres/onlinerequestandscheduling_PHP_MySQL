<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin']) && !isset($_SESSION['member'])){
   header('location:Login.php');
   exit;
}

if($conn->connect_error){
    echo $con->connect_error;
}

$sql = "SELECT * FROM request_id";
$request = $conn->query($sql) or die ($conn->error);
$row = $request->fetch_assoc();

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
            <a href="mapulanglupa.php"><img src="images/logo.jpg" alt="Logo"></a>
        </div>
        <nav>
            <ul>
                <li><a href="mapulanglupa.php">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="<?php echo isset($_SESSION['admin']) ? 'request.php' : 'services.php'; ?>"><?php echo isset($_SESSION['admin']) ? 'REQUEST' : 'SERVICES'; ?></a></li>
                <li><a href="<?php echo isset($_SESSION['admin']) ? 'dashboard.php' : '#'; ?>"><?php echo isset($_SESSION['admin']) ? 'DASHBOARD' : 'CONTACT'; ?></a></li>
                <li><a href="index.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>

    <a href="<?php echo isset($_SESSION['admin']) ? 'mapulanglupa.php' : 'services.php'; ?>" class="back-link"><h4>< BACK</h4></a>

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