<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin'])){
   header('location:Login.php');
};

if($conn->connect_error){
    echo $conn->connect_error;
}

$residency = "SELECT * FROM request_residency";

$residencyResult = $conn->query($residency) or die($conn->error);

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
            <li><a href="#">Residency</a></li>
            <li><a class="space_section"></a></li>
            <li><a href="certificateapprove.php">Approve</a></li>
            <li><a href="certificatecancel.php">Cancel</a></li>
            <li><a href="certificatedecline.php">Decline</a></li>
        </ul>
    </div>

    <div class="content">
    <div class="residency" id="residency_section">
            <h2 class="namerequest">Barangay Residency</h2>
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
                            while ($residencyRow = $residencyResult->fetch_assoc()) {
                                if ($residencyRow['status'] === 'APPROVED' || $residencyRow['status'] === 'CANCELED' || $residencyRow['status'] === 'DECLINED') {
                                continue; // Skip this iteration and move to the next record    
                        } ?>
                        <tr class="headRow"></tr>
                        <tr class="bodyRow">
                            <td class="infoRow">
                            <p class="requestRow">Barangay Residency</p>
                            <?php echo $residencyRow['last_name'] . ", " . $residencyRow['first_name'] . " " . $residencyRow['middle_name'] . " " . $residencyRow['suffix_name']; ?><br>
                            <?php echo $residencyRow['address'] . " " . $residencyRow['street'] . ", " . $residencyRow['barangay'] . " " . $residencyRow['city']; ?><br>
                            <?php echo $residencyRow['contact']; ?><br>
                            <?php echo $residencyRow['email']; ?><br>
                            </td>
                            <td class="spaceRow"></td>
                            <td class="messageRow">
                            <?php echo $residencyRow['message']; ?>
                            </td>
                            <td class="spaceRow"></td>
                            <td class="schedRow" value="<?php echo $residencyRow['status']; ?>">
                            <?php echo $residencyRow['sched']; ?><br>
                            <?php echo $residencyRow['time']; ?><br><br>
                            <?php echo $residencyRow['status']; ?>
                            </td>
                        </tr>
                        <?php } }while($residencyRow = $residencyResult->fetch_assoc()) ?>
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