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
            <li><a href="#">Decline</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="decline" id="decline_section">
            <h2 class="namerequest">Decline Request Certificate</h2>
            <hr class="lining">
            <div class="tableHead">
                <h3 class="tableHead1">Request Certificate</h3><h3 class="tableHead2">Message</h3><h3 class="tableHead3">Status</h3>
            </div>
            <section class="scheduleContent">
                <section class="scheduleTable">
                    <table>
                        <tbody>
                        <?php do{ ?>
                        <?php while ($cedulaRow = $cedulaResult->fetch_assoc()) {
                            if ($cedulaRow['status'] !== 'DECLINED') {
                            continue; // Skip this iteration and move to the next record
                        } ?>
                        <tr class="headRow"></tr>
                        <tr class="bodyRow">
                            <td class="infoRow">
                            <p class="requestRow">Barangay Cedula</p>
                            <?php echo $cedulaRow['last_name'] . ", " . $cedulaRow['first_name'] . " " . $cedulaRow['middle_name'] . " " . $cedulaRow['suffix_name']; ?><br>
                            <?php echo $cedulaRow['address'] . " " . $cedulaRow['street'] . ", " . $cedulaRow['barangay'] . " " . $cedulaRow['city']; ?><br>
                            <?php echo $cedulaRow['contact']; ?><br>
                            <?php echo $cedulaRow['email']; ?><br>
                            </td>
                            <td class="spaceRow"></td>
                            <td class="messageRow">
                            <?php echo $cedulaRow['message']; ?>
                            </td>
                            <td class="spaceRow"></td>
                            <td class="schedRow" value="<?php echo $cedulaRow['status']; ?>">
                            <?php echo $cedulaRow['sched']; ?><br>
                            <?php echo $cedulaRow['time']; ?><br><br>
                            <?php echo $cedulaRow['status']; ?>
                            </td>
                        </tr>
                        <?php } }while($cedulaRow = $cedulaResult->fetch_assoc()) ?>

                        <?php do{ ?>
                        <?php while ($clearanceRow = $clearanceResult->fetch_assoc()) {
                            if ($clearanceRow['status'] !== 'DECLINED') {
                            continue; // Skip this iteration and move to the next record
                        } ?>
                        <tr class="headRow"></tr>
                        <tr class="bodyRow">
                            <td class="infoRow">
                            <p class="requestRow">Barangay Clearance</p>
                            <?php echo $clearanceRow['last_name'] . ", " . $clearanceRow['first_name'] . " " . $clearanceRow['middle_name'] . " " . $clearanceRow['suffix_name']; ?><br>
                            <?php echo $clearanceRow['address'] . " " . $clearanceRow['street'] . ", " . $clearanceRow['barangay'] . " " . $clearanceRow['city']; ?><br>
                            <?php echo $clearanceRow['contact']; ?><br>
                            <?php echo $clearanceRow['email']; ?><br>
                            </td>
                            <td class="spaceRow"></td>
                            <td class="messageRow">
                            <?php echo $clearanceRow['message']; ?>
                            </td>
                            <td class="spaceRow"></td>
                            <td class="schedRow" value="<?php echo $clearanceRow['status']; ?>">
                            <?php echo $clearanceRow['sched']; ?><br>
                            <?php echo $clearanceRow['time']; ?><br><br>
                            <?php echo $clearanceRow['status']; ?>
                            </td>
                        </tr>
                        <?php } }while($clearanceRow = $clearanceResult->fetch_assoc()) ?>

                        <?php do{ ?>
                        <?php while ($goodmoralRow = $goodmoralResult->fetch_assoc()) {
                            if ($goodmoralRow['status'] !== 'DECLINED') {
                            continue; // Skip this iteration and move to the next record
                        } ?>
                        <tr class="headRow"></tr>
                        <tr class="bodyRow">
                            <td class="infoRow">
                            <p class="requestRow">Barangay Certificate of Good Moral Character</p>
                            <?php echo $goodmoralRow['last_name'] . ", " . $goodmoralRow['first_name'] . " " . $goodmoralRow['middle_name'] . " " . $goodmoralRow['suffix_name']; ?><br>
                            <?php echo $goodmoralRow['address'] . " " . $goodmoralRow['street'] . ", " . $goodmoralRow['barangay'] . " " . $goodmoralRow['city']; ?><br>
                            <?php echo $goodmoralRow['contact']; ?><br>
                            <?php echo $goodmoralRow['email']; ?><br>
                            </td>
                            <td class="spaceRow"></td>
                            <td class="messageRow">
                            <?php echo $goodmoralRow['message']; ?>
                            </td>
                            <td class="spaceRow"></td>
                            <td class="schedRow" value="<?php echo $goodmoralRow['status']; ?>">
                            <?php echo $goodmoralRow['sched']; ?><br>
                            <?php echo $goodmoralRow['time']; ?><br><br>
                            <?php echo $goodmoralRow['status']; ?>
                            </td>
                        </tr>
                        <?php } }while($goodmoralRow = $goodmoralResult->fetch_assoc()) ?>

                        <?php do{ ?>
                        <?php while ($barangayidRow = $barangayidResult->fetch_assoc()) {
                            if ($barangayidRow['status'] !== 'DECLINED') {
                            continue; // Skip this iteration and move to the next record
                        } ?>
                        <tr class="headRow"></tr>
                        <tr class="bodyRow">
                            <td class="infoRow">
                            <p class="requestRow">Barangay ID</p>
                            <?php echo $barangayidRow['last_name'] . ", " . $barangayidRow['first_name'] . " " . $barangayidRow['middle_name'] . " " . $barangayidRow['suffix_name']; ?><br>
                            <?php echo $barangayidRow['address'] . " " . $barangayidRow['street'] . ", " . $barangayidRow['barangay'] . " " . $barangayidRow['city']; ?><br>
                            <?php echo $barangayidRow['contact']; ?><br>
                            <?php echo $barangayidRow['email']; ?><br>
                            </td>
                            <td class="spaceRow"></td>
                            <td class="messageRow">
                            <?php echo $barangayidRow['message']; ?>
                            </td>
                            <td class="spaceRow"></td>
                            <td class="schedRow" value="<?php echo $barangayidRow['status']; ?>">
                            <?php echo $barangayidRow['sched']; ?><br>
                            <?php echo $barangayidRow['time']; ?><br><br>
                            <?php echo $barangayidRow['status']; ?>
                            </td>
                        </tr>
                        <?php } }while($barangayidRow = $barangayidResult->fetch_assoc()) ?>

                        <?php do{ ?>
                        <?php while ($indigencyRow = $indigencyResult->fetch_assoc()) {
                            if ($indigencyRow['status'] !== 'DECLINED') {
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

                        <?php do{ ?>
                        <?php while ($residencyRow = $residencyResult->fetch_assoc()) {
                            if ($residencyRow['status'] !== 'DECLINED') {
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