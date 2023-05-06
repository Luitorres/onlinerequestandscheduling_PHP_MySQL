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
    $nbirthday = $_POST['birthdayid'];
    $placeofbirth = $_POST['placeofbirthid'];
    $civil = $_POST['civilstatusid'];
    $sex = $_POST['sexid'];
    $nationality = $_POST['Nationalityid'];
    $pwd = $_POST['PWDid'];
    $occupation = $_POST['Occupationid'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['addressid'];
    $street = $_POST['streetid'];
    $tin = $_POST['TIN'];
    $blood = $_POST['bloodtypeid'];
    $efname = $_POST['firstname'];
    $elname = $_POST['lastname'];
    $emname = $_POST['middlename'];
    $econtact = $_POST['phoneinfo'];
    $esname = $_POST['suffixname'];
    $erelationship = $_POST['relationship'];
    $eaddress = $_POST['address'];
    $message = $_POST['message'];

    
    
    $insert_request = mysqli_query($conn, "INSERT INTO `request_id`(`first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `occupation`, `contact`, `email`, `address`, `street`, `tin`, `blood_type`, `emergency_first_name`, `emergency_last_name`, `emergency_middle_name`, `emergency_contact`, `emergency_suffix_name`, `emergency_relationship`, `emergency_address`, `message`) 
    VALUES ('$fname','$lname','$mname','$sname','$nbirthday','$placeofbirth','$civil','$sex','$nationality','$pwd','$occupation','$phone','$email','$address','$street', '$tin', '$blood', '$efname', '$elname', '$emname', '$econtact', '$esname', '$erelationship', '$eaddress', '$message')");
     


     
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

            <label for="fname-id" id="firstname-id"><font color="red">*</font>First Name: </label>
            <input type="text" name= "fname-id" id="fname-id" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="lname-id" id="lastname-id"><font color="red">*</font>Last Name: </label>
            <input type="text" name= "lname-id" id="lname-id" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="mname-id" id="middlename-id">Middle Name: </label>
            <input type="text" name= "mname-id" id="mname-id" onkeyup="this.value = this.value.toUpperCase();">

            <label for="sname-id" id="suffixname-id">Suffix Name: </label>
            <input type="text" name= "sname-id" id="sname-id" onkeyup="this.value = this.value.toUpperCase();">

            <label for="nbirthday-id" id="bday-id"><font color="red">*</font>Birthday: </label>
            <input type="date" name="nbirthday-id" id="nbirthday-id" required>

            <label for="placeofbirth-id" id="birth-id"><font color="red">*</font>Place of Birth: </label>
            <input type="text" name= "placeofbirth-id" id="placeofbirth-id" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="civilstatus-id" id="civil-id"><font color="red">*</font>Civil Status: </label>
            <select type="text" name="civilstatus-id" id="civilstatus-id" required>
                <option value="" selected disabled>SELECT STATUS</option>
                <option value="SINGLE">SINGLE</option>
                <option value="MARRIED">MARRIED</option>
                <option value="WIDOWED">WIDOWED</option>
                <option value="SEPARATED">SEPARATED</option>
                <option value="ANNULLED">ANNULLED</option>
                <option value="COMMON-LAW PARTNER">COMMON-LAW PARTNER</option>
                <option value="CIVIL UNION">CIVIL UNION</option>
            </select>

            <label for="sex-id" id="gender-id"><font color="red">*</font>Sex: </label>
            <select name="sex-id" id="sex-id" required>
                <option value="" selected disabled>SELECT GENDER</option>
                <option value="FEMALE">FEMALE</option>
                <option value="MALE">MALE</option>
                <option value="OTHERS">OTHER</option>
            </select>

            <label for="Nationality-id" id="national-id"><font color="red">*</font>Nationality: <br>
            <small>(For dual citizenship, please choose Filipino)</small></label>
            <select type="text" name="Nationality-id" id="Nationality-id" required>
                <option value="" selected disabled>SELECT NATIONALITY</option>
                <option value="FILIPINO">FILIPINO</option>
                <option value="OTHER">OTHER</option>
            </select>

            <label for="PWD-id" id="pd-id"><font color="red">*</font>PWD: </label>
            <select type="text" name="PWD-id" id="PWD-id" required>
                <option value="" selected disabled>YES/NO?</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option>
            </select>

            <label for="bloodtype-id" id="bdtype-id">Blood Type: <small>(If Applicabble)</small></label><br>
            <input type="text" id="bloodtype-id" name="bloodtype-id" required><br><br>

            <label for="TIN-id" id="tin-id">TIN: <small>(If Applicable)</small></label>
            <input type="text" id="TIN-id" name="TIN-id" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="XXX-XXX-XXX-XXXX">

            <label for="Occupation-id" id="occup-id"><font color="red">*</font>Occupation: </label>
            <input type="text" id="Occupation-id" name= "Occupation-id" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="phone-id" id="cp-id"><font color="red">*</font>Contact No:</label>
            <input type="tel" id="phone-id" name="phone-id" placeholder="09XX XXX XXXX" pattern="^(09|\+639)\d{9}$" required>

            <label for="email-id" id="eadd-id">Email Address: <small>(Optional)</small></label>
            <input type="email" id="email-id" name="email-id">

            <label for="address-id" id="add-id">Address:</label>
            <input type="text" id="address-id" name="address-id" placeholder="house#, block, lot, unit, etc:" onkeyup="this.value = this.value.toUpperCase();">

            <label for="street-id" id="Strt-id"><font color="red">*</font>Street:</label>
            <select id="street-id" name="street-id" required>
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

            <label for="brgy-id" id="brgy-label-id"><font color="red">*</font>Baranggay: </label>
            <input type="text" name="brgy-id" id="brgy-id" value="MAPULANG LUPA" readonly>

            <label for="city-id" id="city-label-id"><font color="red">*</font>City/Municipal: </label>
            <input type="text" name="city-id" id="city-id" value="VALENZUELA CITY" readonly>

            <h2 class="emerg-info-id">Emergency Contact Information</h2>

            <label for="fname-id-em" id="firstname-id-em"><font color="red">*</font>First Name: </label>
            <input type="text" name= "fname-id-em" id="fname-id-em" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="lname-id-em" id="lastname-id-em"><font color="red">*</font>Last Name: </label>
            <input type="text" name= "lname-id-em" id="lname-id-em" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="mname-id-em" id="middlename-id-em">Middle Name: </label>
            <input type="text" name= "mname-id-em" id="mname-id-em" onkeyup="this.value = this.value.toUpperCase();">

            <label for="sname-id-em" id="suffixname-id-em">Suffix Name: </label>
            <input type="text" name= "sname-id-em" id="sname-id-em" onkeyup="this.value = this.value.toUpperCase();">

            <label for="phone-id-em" id="cp-id-em"><font color="red">*</font>Contact No:</label>
            <input type="tel" id="phone-id-em" name="phone-id-em" placeholder="09XX XXX XXXX" pattern="^(09|\+639)\d{9}$" required>

            <label for="rship-id-em" id="relation-id-em"><font color="red">*</font>Relationship:</label>
            <input type="text" id="rship-id-em" name="rship-id-em" required>

            <label for="address-id-em" id="add-rship-id-em"><font color="red">*</font>Address:</label>
            <input type="text" id="address-id-em" name="address-id-em" required>

            <h2 class="sched-info-id">Schedule</h2>

            <label for="sched-id" id="sched-label-id"><font color="red">*</font>Schudule: </label>
            <input type="date" name="sched-id" id="sched-id" required>

            <label for="time-id" id="time-label-id"><font color="red">*</font>Time: </label>
            <select type="text" name="time-id" id="time-id" required>
                <option value="" selected disabled>SELECT TIME</option>
                <option value="MORNING">MORNING</option>
                <option value="AFTERNOON">AFTERNOON</option>
            </select>

            <label for="slot-id" id="slot-label-id">Available Slot's: </label>
            <input type="text" name="slot-id" id="slot-id" readonly>
            <label for="slot" id="slot-label1-id"><font color="red">/ 10</font></label>

            <input type="text" name="status" id="status" value="PENDING...">

            <label for="message-id" id="msg-id">Message: <small>(Optional)</small></label>
            <textarea id="message-id" name="message-id" rows="4" cols="50"></textarea>

            <input type="button" id="cancel-id" value="CANCEL" onclick="window.location='user.php'" />
            <input type="submit" name="Submit-id" id="Submit-id" value="SUBMIT">
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

        const phoneInputs = document.querySelectorAll('#phone-id, #phone-id-em');
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

        const tinInput = document.getElementById('TIN-id');
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