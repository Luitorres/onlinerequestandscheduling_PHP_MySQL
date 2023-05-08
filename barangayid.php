<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['name'])){
   header('location:Login.php');
};

if(isset($_POST['Submit'])){
    $fname = $_POST['fnameid'];
    $lname = $_POST['lnameid'];
    $mname = $_POST['mnameid'];
    $sname = $_POST['snameid'];
    $nbirthday = $_POST['bdayid'];
    $placeofbirth = $_POST['placeofbirthid'];
    $civil = $_POST['civilstatusid'];
    $sex = $_POST['sexid'];
    $nationality = $_POST['Nationalityid'];
    $pwd = $_POST['PWDid'];
    $blood = $_POST['bloodtypeid'];
    $tin = $_POST['TINid'];
    $occupation = $_POST['Occupationid'];
    $phone = $_POST['phoneid'];
    $email = $_POST['emailid'];
    $address = $_POST['addressid'];
    $street = $_POST['streetid'];
    $brgy = $_POST['brgyid'];
    $city = $_POST['cityid'];
    $efname = $_POST['fnameidem'];
    $elname = $_POST['lnameidem'];
    $emname = $_POST['mnameidem'];
    $esname = $_POST['snameidem'];
    $relationship = $_POST['rshipidem'];
    $ephone = $_POST['phoneidem'];
    $eaddress = $_POST['addressidem'];
    $sched = $_POST['schedid'];
    $time = $_POST['timeid'];
    $slot = $_POST['slotid'];
    $message = $_POST['messageid'];
    $status = $_POST['status'];
        
    $insert_request = mysqli_query($conn, "INSERT INTO `request_id`(`first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `blood_type`, `tin`, `occupation`, `contact`, `email`, `address`, `street`, `brgy`, `city`, `em_first_name`, `em_last_name`, `em_middle_name`, `em_suffix_name`, `em_contact`, `em_relationship`, `em_address`, `schedule`, `time`, `slot`, `message`, `status`) 
    VALUES ('$fname','$lname','$mname','$sname','$nbirthday','$placeofbirth','$civil','$sex','$nationality','$pwd','$blood','$tin','$occupation','$phone','$email','$address','$street','$brgy','$city','$efname','$elname','$emname','$esname','$ephone','$relationship','$eaddress','$sched','$time','$slot','$message','$status')");

    if ($insert_request) {
        echo "<script>alert('Success submitting request.');</script>";
    } else {
        echo "<script>alert('Error submitting request.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangayid</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
    <header class="sticky-header">
        <div class="logo">
            <a href="user.php">
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

    <a href="certificaterequest.php" class="back-link"><h4>< BACK</h4></a>

    <div class="clearanceformidBG">
    <div class="clearanceformid">
        <h2 class="namerequest">Barangay ID</h2>
        <hr class="lining">

        <form action="#" method="post">
            <h2 class="info-id">Personal Information</h2>

            <label for="fnameid" id="firstname-id"><font color="red">*</font>First Name: </label>
            <input type="text" name= "fnameid" id="fnameid" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="lnameid" id="lastname-id"><font color="red">*</font>Last Name: </label>
            <input type="text" name= "lnameid" id="lnameid" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="mnameid" id="middlename-id">Middle Name: </label>
            <input type="text" name= "mnameid" id="mnameid" onkeyup="this.value = this.value.toUpperCase();">

            <label for="snameid" id="suffixname-id">Suffix Name: </label>
            <input type="text" name= "snameid" id="snameid" onkeyup="this.value = this.value.toUpperCase();">

            <label for="nbirthdayid" id="bday-id"><font color="red">*</font>Birthday: </label>
            <input type="date" name="bdayid" id="nbirthdayid" required>

            <label for="placeofbirthid" id="birth-id"><font color="red">*</font>Place of Birth: </label>
            <input type="text" name="placeofbirthid" id="placeofbirthid" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="civilstatusid" id="civil-id"><font color="red">*</font>Civil Status: </label>
            <select type="text" name="civilstatusid" id="civilstatusid" required>
                <option value="" selected disabled>SELECT STATUS</option>
                <option value="SINGLE">SINGLE</option>
                <option value="MARRIED">MARRIED</option>
                <option value="WIDOWED">WIDOWED</option>
                <option value="SEPARATED">SEPARATED</option>
                <option value="ANNULLED">ANNULLED</option>
                <option value="COMMON-LAW PARTNER">COMMON-LAW PARTNER</option>
                <option value="CIVIL UNION">CIVIL UNION</option>
            </select>

            <label for="sexid" id="gender-id"><font color="red">*</font>Sex: </label>
            <select name="sexid" id="sexid" required>
                <option value="" selected disabled>SELECT GENDER</option>
                <option value="FEMALE">FEMALE</option>
                <option value="MALE">MALE</option>
                <option value="OTHERS">OTHER</option>
            </select>

            <label for="Nationalityid" id="national-id"><font color="red">*</font>Nationality: <br>
            <small>(For dual citizenship, please choose Filipino)</small></label>
            <select type="text" name="Nationalityid" id="Nationalityid" required>
                <option value="" selected disabled>SELECT NATIONALITY</option>
                <option value="FILIPINO">FILIPINO</option>
                <option value="OTHER">OTHER</option>
            </select>

            <label for="PWDid" id="pd-id"><font color="red">*</font>PWD: </label>
            <select type="text" name="PWDid" id="PWDid" required>
                <option value="" selected disabled>YES/NO?</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option>
            </select>

            <label for="bloodtypeid" id="bdtype-id">Blood Type: <small>(If Applicabble)</small></label><br>
            <input type="text" id="bloodtypeid" name="bloodtypeid" required><br><br>

            <label for="TINid" id="tin-id">TIN: <small>(If Applicable)</small></label>
            <input type="text" id="TINid" name="TINid" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="XXX-XXX-XXX-XXXX">

            <label for="Occupationid" id="occup-id"><font color="red">*</font>Occupation: </label>
            <input type="text" id="Occupationid" name= "Occupationid" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="phoneid" id="cp-id"><font color="red">*</font>Contact No:</label>
            <input type="tel" id="phoneid" name="phoneid" placeholder="09XX XXX XXXX" required>

            <label for="emailid" id="eadd-id">Email Address: <small>(Optional)</small></label>
            <input type="email" id="emailid" name="emailid">

            <label for="addressid" id="add-id">Address:</label>
            <input type="text" id="addressid" name="addressid" placeholder="house#, block, lot, unit, etc:" onkeyup="this.value = this.value.toUpperCase();">

            <label for="streetid" id="Strt-id"><font color="red">*</font>Street:</label>
            <select id="streetid" name="streetid" required>
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

            <label for="brgyid" id="brgy-label-id"><font color="red">*</font>Baranggay: </label>
            <input type="text" name="brgyid" id="brgyid" value="MAPULANG LUPA" readonly>

            <label for="cityid" id="city-label-id"><font color="red">*</font>City/Municipal: </label>
            <input type="text" name="cityid" id="cityid" value="VALENZUELA CITY" readonly>

            <h2 class="emerg-info-id">Emergency Contact Information</h2>

            <label for="fnameidem" id="firstname-id-em"><font color="red">*</font>First Name: </label>
            <input type="text" name= "fnameidem" id="fnameidem" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="lnameidem" id="lastname-id-em"><font color="red">*</font>Last Name: </label>
            <input type="text" name= "lnameidem" id="lnameidem" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="mnameidem" id="middlename-id-em">Middle Name: </label>
            <input type="text" name= "mnameidem" id="mnameidem" onkeyup="this.value = this.value.toUpperCase();">

            <label for="snameidem" id="suffixname-id-em">Suffix Name: </label>
            <input type="text" name= "snameidem" id="snameidem" onkeyup="this.value = this.value.toUpperCase();">

            <label for="phoneidem" id="cp-id-em"><font color="red">*</font>Contact No:</label>
            <input type="tel" id="phoneidem" name="phoneidem" placeholder="09XX XXX XXXX" required>

            <label for="rshipidem" id="relation-id-em"><font color="red">*</font>Relationship:</label>
            <input type="text" id="rshipidem" name="rshipidem" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="addressidem" id="add-rship-id-em"><font color="red">*</font>Address:</label>
            <input type="text" id="addressidem" name="addressidem" onkeyup="this.value = this.value.toUpperCase();" required>

            <h2 class="sched-info-id">Schedule</h2>

            <label for="schedid" id="sched-label-id"><font color="red">*</font>Schudule: </label>
            <input type="date" name="schedid" id="schedid" required>

            <label for="timeid" id="time-label-id"><font color="red">*</font>Time: </label>
            <select type="text" name="timeid" id="timeid" required>
                <option value="" selected disabled>SELECT TIME</option>
                <option value="MORNING">MORNING</option>
                <option value="AFTERNOON">AFTERNOON</option>
            </select>

            <label for="slotid" id="slot-label-id">Available Slot's: </label>
            <input type="text" name="slotid" id="slotid" readonly>
            <label for="slot" id="slot-label1-id"><font color="red">/ 10</font></label>

            <input type="text" name="status" id="status" value="PENDING...">

            <label for="messageid" id="msg-id">Message: <small>(Optional)</small></label>
            <textarea id="messageid" name="messageid" rows="4" cols="50"></textarea>

            <input type="button" id="cancel-id" value="CANCEL" onclick="window.location='user.php'" />
            <input type="submit" name="Submit" id="Submitid" value="SUBMIT">
        </form>

        <p class="note-id">
            Note: Provide a Photocopy of Barangay ID or Any Valid ID,
            <br>Proof of Residence (Utility Bill, Lease
            <br>Agreement, Etc.), 1 ID Picture(2x2), and Exact (Amount) Upon
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
        ScrollReveal().reveal('.sticky-header', {
            delay: 100,
            origin: 'top'
        });
        ScrollReveal().reveal('.back-link', {
            delay: 300,
            origin: 'left'
        });
        ScrollReveal().reveal('.clearanceformid', {
            delay: 300,
            origin: 'right'
        });

        const phoneInputs = document.querySelectorAll('#phoneid, #phoneidem');
        phoneInputs.forEach(phoneInput => {
            phoneInput.addEventListener('input', event => {
            let input = event.target.value.replace(/\D/g,'');
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
            event.target.value = formattedInput;
            });
        });

        const tinInput = document.getElementById('TINid');
        tinInput.addEventListener('input', event => {
            let input = event.target.value.replace(/\D/g,'');
            let formattedInput = '';
            if (input.length > 0) {
                formattedInput = input.slice(0, 3);
            }
            if (input.length > 3) {
                formattedInput += '-' + input.slice(3, 6);
            }
            if (input.length > 6) {
                formattedInput += '-' + input.slice(6, 9);
            }
            if (input.length > 9) {
                formattedInput += '-' + input.slice(9, 13);
            }
            event.target.value = formattedInput;
        });
    </script>
</body>
</html>