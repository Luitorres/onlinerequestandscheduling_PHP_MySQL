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

$cedulaResult = $conn->query($cedula) or die($conn->error);

$cedulaRow = $cedulaResult->fetch_assoc();
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
            <li><a href="#">Cedula</a></li>
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
        <div class="cedula" id="cedula_section">
            <h2 class="namerequest">Barangay Cedula</h2>
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
                            if ($cedulaRow['status'] === 'APPROVED' || $cedulaRow['status'] === 'CANCELED' || $cedulaRow['status'] === 'DECLINED') {
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
                            <td class="editRow">
                                <form method="POST">
                                    <input type="hidden" name="rowId" value="<?php echo $cedulaRow['id']; ?>">
                                    <button type="submit" name="status" value="APPROVED" <?php echo ($cedulaRow['status'] === 'APPROVED') ? 'style="background-color: green;"' : ''; ?>>Approved</button>
                                    <button type="submit" name="status" value="CANCELED" <?php echo ($cedulaRow['status'] === 'CANCELED') ? 'style="background-color: red;"' : ''; ?>>Canceled</button>
                                    <button type="submit" name="status" value="DECLINED" <?php echo ($cedulaRow['status'] === 'DECLINED') ? 'style="background-color: orange;"' : ''; ?>>Declined</button>
                                </form>
                            </td>
                        </tr>
                        <?php } }while($cedulaRow = $cedulaResult->fetch_assoc()) ?>
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