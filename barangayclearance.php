<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin']) && !isset($_SESSION['member'])){
   header('location:Login.php');
   exit;
}

$email = isset($_SESSION["admin"]) ? $_SESSION["admin"] : $_SESSION["member"];

if(isset($_POST['Submit'])){
    $acc = $_POST['account'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $sname = $_POST['sname'];
    $nbirthday = $_POST['nbirthday'];
    $placeofbirth = $_POST['placeofbirth'];
    $civil = $_POST['civilstatus'];
    $sex = $_POST['sex'];
    $nationality = $_POST['Nationality'];
    $pwd = $_POST['PWD'];
    $occupation = $_POST['Occupation'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $street = $_POST['street'];
    $brgy = $_POST['brgy'];
    $city = $_POST['city'];
    $sched = $_POST['sched'];
    $time = $_POST['time'];
    $slot = $_POST['slot'];
    $message = $_POST['message'];
    $status = $_POST['status'];
        
    $insert_request = mysqli_query($conn, "INSERT INTO `request_clearance`(`account`, `first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `occupation`, `contact`, `email`, `address`, `street`, `barangay`, `city`, `sched`, `time`, `slot`, `message`, `status`)
    VALUES ('$acc','$fname','$lname','$mname','$sname','$nbirthday','$placeofbirth','$civil','$sex','$nationality','$pwd','$occupation','$phone','$email','$address','$street','$brgy','$city','$sched','$time','$slot','$message','$status')");

    if ($insert_request) {
        echo "<script>alert('Success submitting request.');</script>";
        echo "<script>window.location.href = 'certificaterequest.php';</script>";
    } else {
        echo "<script>alert('Error submitting request.');</script>";
    }
}

$sql = "SELECT * FROM request_cedula ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql) or die($conn->error);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $lastSlot = !empty($row['slot']) && $row['slot'] !== '10' ? ($row['slot'] + 1) % 11 : 1; // Increment or set to 1
} else {
    $lastSlot = 10;
}
?>       

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapulang Lupa | Barangay Clearance</title>
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
                <li><a href="<?php echo isset($_SESSION['admin']) ? 'request.php' : 'services.php'; ?>"><?php echo isset($_SESSION['admin']) ? 'REQUEST' : 'SERVICES'; ?></a></li>
                <li><a href="<?php echo isset($_SESSION['admin']) ? 'dashboard.php' : '#'; ?>"><?php echo isset($_SESSION['admin']) ? 'DASHBOARD' : 'CONTACT'; ?></a></li>
                <li><a href="index.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>

    <a href="request.php" class="back-link"><h4>< BACK</h4></a>

    <div class="clearanceformBG">
    <div class="clearanceform">
        <h2 class="namerequest">Barangay Clearance</h2>
        <hr class="lining">

        <form action="#" method="post" id="myForm">
            <h2 class="info">Personal Information</h2>

            <input type="email" id="account" name="account" value="<?php echo $email; ?>" >
            <!-- not visible to the user -->

            <label for="fname" id="firstname"><font color="red">*</font>First Name: </label>
            <input type="text" name= "fname" id="fname" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="lname" id="lastname"><font color="red">*</font>Last Name: </label>
            <input type="text" name= "lname" id="lname" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="mname" id="middlename">Middle Name: </label>
            <input type="text" name= "mname" id="mname" onkeyup="this.value = this.value.toUpperCase();">

            <label for="sname" id="suffixname">Suffix Name: </label>
            <input type="text" name= "sname" id="sname" onkeyup="this.value = this.value.toUpperCase();">

            <label for="nbirthday" id="bday"><font color="red">*</font>Birthday: </label>
            <input type="date" name="nbirthday" id="nbirthday" required>

            <label for="placeofbirth" id="birth"><font color="red">*</font>Place of Birth: </label>
            <input type="text" name= "placeofbirth" id="placeofbirth" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="civilstatus" id="civil"><font color="red">*</font>Civil Status: </label>
            <select type="text" name="civilstatus" id="civilstatus" required>
                <option value="" selected disabled>SELECT STATUS</option>
                <option value="SINGLE">SINGLE</option>
                <option value="MARRIED">MARRIED</option>
                <option value="WIDOWED">WIDOWED</option>
                <option value="SEPARATED">SEPARATED</option>
                <option value="ANNULLED">ANNULLED</option>
                <option value="COMMON-LAW PARTNER">COMMON-LAW PARTNER</option>
                <option value="CIVIL UNION">CIVIL UNION</option>
            </select>

            <label for="sex" id="gender"><font color="red">*</font>Sex: </label>
            <select name="sex" id="sex" required>
                <option value="" selected disabled>SELECT GENDER</option>
                <option value="FEMALE">FEMALE</option>
                <option value="MALE">MALE</option>
                <option value="OTHERS">OTHER</option>
            </select>

            <label for="Nationality" id="national"><font color="red">*</font>Nationality: <br>
            <small>(For dual citizenship, please choose Filipino)</small></label>
            <select type="text" name="Nationality" id="Nationality" required>
                <option value="" selected disabled>SELECT NATIONALITY</option>
                <option value="FILIPINO">FILIPINO</option>
                <option value="OTHER">OTHER</option>
            </select>

            <label for="PWD" id="pd"><font color="red">*</font>PWD: </label>
            <select type="text" name="PWD" id="PWD" required>
                <option value="" selected disabled>YES/NO?</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option>
            </select>

            <label for="Occupation" id="occup"><font color="red">*</font>Occupation: </label>
            <input type="text" id="Occupation" name= "Occupation" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="phone" id="cp"><font color="red">*</font>Contact No:</label>
            <input type="tel" id="phone" name="phone" placeholder="09XX XXX XXXX" required>

            <label for="email" id="eadd">Email Address:<small>(Optional)</small></label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" >

            <label for="address" id="add">Address:</label>
            <input type="text" id="address" name="address" placeholder="house#, block, lot, unit, etc:" onkeyup="this.value = this.value.toUpperCase();">

            <label for="street" id="Strt"><font color="red">*</font>Street:</label>
            <select id="street" name="street" required>
                <option value="" selected disabled>SELECT STREET</option>
                <option value="ADONT STREET">ADONT STREET</option>
                <option value="AGAPITO STREET">AGAPITO STREET</option>
                <option value="APOLONIA STREET">APOLONIA STREET</option>
                <option value="BENITO HAO STREET">BENITO HAO STREET</option>
                <option value="CF. NATIVIDAD STREET">CF. NATIVIDAD STREET</option>
                <option value="CANDIDO COMPOUND">CANDIDO COMPOUND</option>
                <option value="CUNANAN STREET">CUNANAN STREET</option>
                <option value="D. BAUTISTA STREET">D. BAUTISTA STREET</option>
                <option value="DE CASTRO SUBS">DE CASTRO SUBS</option>
                <option value="DE LEON STREET">DE LEON STREET</option>
                <option value="DELFIN STREET">DELFIN STREET</option>
                <option value="DIEGO STREET">DIEGO STREET</option>
                <option value="CF. NATIVIDAD STREET">CF. NATIVIDAD STREET</option>
                <option value="DON RAYMUNDO STREET">DON RAYMUNDO STREET</option>
                <option value="F. BAUTISTA STREET">F. BAUTISTA STREET</option>
                <option value="FLORENTINO STREET">FLORENTINO STREET</option>
                <option value="G. ANGELES STREET">G. ANGELES STREET</option>
                <option value="GOLDEN RD.">GOLDEN RD.</option>
                <option value="HOME CENTRUM SUBD.">HOME CENTRUM SUBD.</option>
                <option value="CENTRUM 1,2,3">CENTRUM 1,2,3</option>
                <option value="KABATUHAN STREET">KABATUHAN STREET</option>
                <option value="MANERO COMPOUND">MANERO COMPOUND</option>
                <option value="METRO VILLA SUNDAY">METRO VILLA SUNDAY</option>
                <option value="MODESTO STREET">MODESTO STREET</option>
                <option value="OROSCO STREET">OROSCO STREET</option>
                <option value="PABAYA STREET">PABAYA STREET</option>
                <option value="PADILLA COMPOUND">PADILLA COMPOUND</option>
                <option value="PASO DE CARLOS STREET">PASO DE CARLOS STREET</option>
                <option value="PEDRO STREET">PEDRO STREET</option>
                <option value="S. FELICIANO STREET">S. FELICIANO STREET</option>
                <option value="S. LIWANAG STREET">S. LIWANAG STREET</option>
                <option value="SAN AGUSTIN VILLAGE">SAN AGUSTIN VILLAGE</option>
                <option value="ST. JOHN VILLAS">ST. JOHN VILLAS</option>
                <option value="STO ROSARIO STREET">STO ROSARIO STREET</option>
                <option value="SERVANDO STREET">SERVANDO STREET</option>
            </select>

            <label for="brgy" id="brgy-label"><font color="red">*</font>Baranggay: </label>
            <input type="text" name="brgy" id="brgy" value="MAPULANG LUPA" readonly>

            <label for="city" id="city-label"><font color="red">*</font>City/Municipal: </label>
            <input type="text" name="city" id="city" value="VALENZUELA CITY" readonly>

            <h2 class="sched-info">Schedule</h2>

            <label for="sched" id="sched-label"><font color="red">*</font>Schudule: </label>
            <input type="date" name="sched" id="sched" required>

            <label for="time" id="time-label"><font color="red">*</font>Time: </label>
            <select type="text" name="time" id="time" required>
                <option value="" selected disabled>SELECT TIME</option>
                <option value="MORNING">MORNING</option>
                <option value="AFTERNOON">AFTERNOON</option>
            </select>

            <label for="slot" id="slot-label">Available Slot's: </label>
            <input type="text" name="slot" id="slot" value="<?php echo $lastSlot; ?>" readonly>
            <label for="slot" id="slot-label1"><font color="red">/ 10</font></label>

            <input type="text" name="status" id="status" value="PENDING...">
            <!-- not visible to the user -->

            <label for="message" id="msg">Message: (Optional)</label>
            <textarea id="message" name="message" rows="4" cols="50"></textarea>

            <input type="button" id="cancel" value="CANCEL" onclick="window.location='request.php'" />
            <input type="submit" name="Submit" id="Submit" value="SUBMIT">
        </form>

        <p class="note">
            Note: Provide a Photocopy of Barangay ID or Any Valid ID,
            <br>Proof of Residence (Utility Bill, Lease
            <br>Agreement, Etc.), and Exact (Amount) Upon
            <br>Claiming.
        </p>


    </div>
    </div>

    <script>
        ScrollReveal({
            reset: true,
            distance: '30px',
            duration: 2500,
            delay: 400
        });
        ScrollReveal().reveal('.back-link', {
            delay: 300,
            origin: 'left'
        });
        ScrollReveal().reveal('.clearanceform', {
            delay: 300,
            origin: 'right'
        });

        const phoneInput = document.getElementById('phone');
        phoneInput.addEventListener('input', (event) => {
        let input = event.target.value.replace(/\D/g,''); // remove non-numeric characters
        let formattedInput = '';
        if (input.length > 0) {
            formattedInput = input.slice(0, 4);
        }
        if (input.length > 4) {
            formattedInput += ' ' + input.slice(4, 7);
        }
        if (input.length > 7) {
            formattedInput += ' ' + input.slice(7, 11);
        }
        phoneInput.value = formattedInput;
        });
    </script>
</body>
</html>