<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin'])){
   header('location:Login.php');
};

if($conn->connect_error){
    echo $conn->connect_error;
}

$indigency = "SELECT * FROM request_indigency";

$indigencyResult = $conn->query($indigency) or die($conn->error);

$indigencyRow = $indigencyResult->fetch_assoc();
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
            <li><a href="#">Indigency</a></li>
            <li><a href="pendingresidency.php">Residency</a></li>
            <li><a class="space_section"></a></li>
            <li><a href="certificateapprove.php">Approve</a></li>
            <li><a href="certificatecancel.php">Cancel</a></li>
            <li><a href="certificatedecline.php">Decline</a></li>
        </ul>
    </div>

    <div class="content">
    <div class="indigency" id="indigency_section">
            <h2 class="namerequest">Barangay Indigency</h2>
            <hr class="lining">
            <div class="tableHead">
                <h3 class="tableHead1">Request Certificate</h3><h3 class="tableHead2">Message</h3><h3 class="tableHead3">Status</h3>
            </div>
            <section class="scheduleContent">
                <section class="scheduleTable">
                    <table>
                        <tbody>
                        <?php do{ ?>
                        <?php
                            while ($indigencyRow = $indigencyResult->fetch_assoc()) {
                                if ($indigencyRow['status'] === 'APPROVED' || $indigencyRow['status'] === 'CANCELED' || $indigencyRow['status'] === 'DECLINED') {
                                continue; // Skip this iteration and move to the next record    
                        } ?>
                        <tr class="headRow"></tr>
                        <tr class="bodyRow">
                            <td class="infoRow">
                            <p class="requestRow">Barangay Indigency</p>
                            <?php echo $indigencyRow['last_name'] . ", " . $indigencyRow['first_name'] . " " . $indigencyRow['middle_name'] . " " . $indigencyRow['suffix_name']; ?><br>
                            <?php echo $indigencyRow['address'] . " " . $indigencyRow['street'] . ", " . $indigencyRow['barangay'] . " " . $indigencyRow['city']; ?><br>
                            <?php echo $indigencyRow['contact']; ?><br>
                            <?php echo $indigencyRow['email']; ?><br>
                            </td>
                            <td class="spaceRow"></td>
                            <td class="messageRow">
                            <?php echo $indigencyRow['message']; ?>
                            </td>
                            <td class="spaceRow"></td>
                            <td class="schedRow" value="<?php echo $indigencyRow['status']; ?>">
                            <?php echo $indigencyRow['sched']; ?><br>
                            <?php echo $indigencyRow['time']; ?><br><br>
                            <?php echo $indigencyRow['status']; ?>
                            </td>
                        </tr>
                        <?php } }while($indigencyRow = $indigencyResult->fetch_assoc()) ?>
                        </tbody>
                    </table>
                </section>
            </section>
        </div>
    </div>

    <script>
        ScrollReveal({
            reset: true,
            distance: '30px',
            duration: 2500,
            delay: 400
        });
        ScrollReveal().reveal('.content', {
            delay: 200,
            origin: 'right'
        });
    </script>
</body>
</html>