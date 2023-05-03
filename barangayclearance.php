<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['name'])){
   header('location:Login.php');
};

if(isset($_POST['Submit'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $sname = $_POST['sname'];
    $nbirthday = $_POST['bday'];
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
    $message = $_POST['message'];
    
    
    $insert_request = mysqli_query($conn, "INSERT INTO `request_barangay_clearance`(`first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `occupation`, `contact`, `email`, `address`, `street`, `message`) 
    VALUES ('$fname','$lname','$mname','$sname','$nbirthday','$placeofbirth','$civil','$sex','$nationality','$pwd','$occupation','$phone','$email','$address','$street','$message')");
     
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Clearance</title>
    <link rel="stylesheet" href="main.css">
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

    <div class="clearanceformBG">
    <div class="clearanceform">
        <h2 class="namerequest">
            Barangay Clearance
        </h2>
        <hr class="lining">

        <form action="#" method="post">
            <h2 class="info">Personal Information</h2>

            <label for="fname" id="firstname">First Name: </label>
            <input type="text" name= "fname" id="fname" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="lname" id="lastname">Last Name: </label>
            <input type="text" name= "lname" id="lname" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="mname" id="middlename">Middle Name: </label>
            <input type="text" name= "mname" id="mname" onkeyup="this.value = this.value.toUpperCase();">

            <label for="sname" id="suffixname">Suffix Name: </label>
            <input type="text" name= "sname" id="sname" onkeyup="this.value = this.value.toUpperCase();">

            <label for="nbirthday" id="bday">Birthday: </label>
            <input type="date" name="bday" id="nbirthday" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="placeofbirth" id="birth">Place of Birth: </label>
            <input type="text" name= "placeofbirth" id="placeofbirth" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="civilstatus" id="civil">Civil Status: </label>
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

            <label for="sex" id="gender">Sex: </label>
            <select name="sex" id="sex" required>
                <option value="" selected disabled>SELECT GENDER</option>
                <option value="FEMALE">FEMALE</option>
                <option value="MALE">MALE</option>
                <option value="OTHERS">OTHER</option>
            </select>

            <label for="Nationality" id="national">Nationality: <br>
            <small>(For dual citizenship, please choose Filipino)</small></label>
            <select type="text" name="Nationality" id="Nationality" required>
                <option value="" selected disabled>SELECT NATIONALITY</option>
                <option value="FILIPINO">FILIPINO</option>
                <option value="OTHER">OTHER</option>
            </select>

            <label for="PWD" id="pd">PWD: </label>
            <select type="text" name="PWD" id="PWD" required>
                <option value="" selected disabled>YES/NO?</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option>
            </select>

            <label for="Occupation" id="occup">Occupation: </label>
            <input type="text" id="Occupation" name= "Occupation" onkeyup="this.value = this.value.toUpperCase();">

            <label for="phone" id="cp">Contact No:</label>
            <input type="tel" id="phone" name="phone" placeholder="09XX XXX XXXX" pattern="^(09|\+639)\d{9}$" required>

            <label for="email" id="eadd">Email Address: (Optional)</label>
            <input type="email" id="email" name="email" onkeyup="this.value = this.value.toUpperCase();">

            <label for="address" id="add"> Address:</label>
            <input type="tel" id="address" name="address" placeholder="house#, block, lot, unit, etc:" onkeyup="this.value = this.value.toUpperCase();" required>

            <label for="street" id="Strt">Street:</label>
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

            <label for="message" id="msg">Message: (Optional)</label>
            <textarea id="message" name="message" rows="4" cols="50"></textarea>

            <input type="button" id="cancel" value="CANCEL" onclick="window.location='certificaterequest.php'" />
            <input type="submit" name="Submit" id="Submit" value="SUBMIT">

        </form>

        <p class="note">
            Note: Provide a Photocopy of Barangay ID or Any Valid ID,
            <br>Proof of Residence (Utility Bill, Lease
            <br>Agreement, Etc.), and Exact Amount Upon
            <br>Claiming.
        </p>


    </div>
    </div>
</body>

</html>