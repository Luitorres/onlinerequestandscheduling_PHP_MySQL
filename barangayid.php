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

    <a href="certificaterequest.php" class="back-link">
        <span class="back-icon">&lt;</span>
    </a>

    <div class="clearanceformidBG">
    <div class="clearanceformid">
        <h2 class="namerequest">
            Barangay Id
        </h2>

        <hr class="lining">

        <form action="# " method="post">
            <h2 class="infoid">
                Personal Information
            </h2>
            <label for="fnameid" id="firstnameid">First Name: </label><br>
            <input type="text" id="fnameid" name="fnameid" required><br><br>

            <label for="lnameid" id="lastnameid">Last Name: </label><br>
            <input type="text" id="lnameid" name="lnameid" required><br><br>

            <label for="mnameid" id="middlenameid">Middle Name: </label><br>
            <input type="text" id="mnameid" name="mnameid" required><br><br>

            <label for="snameid" id="suffixnameid">Suffix Name: </label><br>
            <input type="text" id="snameid" name="snameid" required><br><br>

            <label for="birthdayid" id="bdayid">Birthday: </label><br>
            <input type="text" id="birthdayid" name="birthdayid" required><br><br>

            <label for="placeofbirth" id="birthid">Place of Birth: </label><br>
            <input type="text" id="placeofbirthid" name="placeofbirthid" required><br><br>

            <label for="civilstatusid" id="civilid">Civil Status: </label><br>
            <input type="text" id="civilstatusid" name="civilstatusid" required><br><br>

            <label for="sexid" id="genderid">Sex: </label><br>
            <input type="text" id="sexid" name="sexid" required><br><br>

            <label for="Nationalityid" id="nationalid">Nationality: </label><br>
            <input type="text" id="Nationalityid" name="Nationalityid" required><br><br>

            <label for="PWDid" id="pdid">PWD: </label><br>
            <input type="text" id="PWDid" name="PWDid" placeholder="YES/NO" required><br><br>

            <label for="bloodtypeid" id="bdtypeid">Blood Type: </label><br>
            <input type="text" id="bloodtypeid" name="bloodtypeid" required><br><br>

            <label for="phoneid" id="cpid">Contact No:</label>
            <input type="tel" id="phoneid" name="phone" pattern="^(09|\+639)\d{9}$" required>

            <label for="emailid" id="eaddid">Email Address (Optional):</label>
            <input type="email" id="emailid" name="email">

            <label for="addressid" id="addid"> Address:</label>
            <input type="text" id="addressid" name="addressid" required>



            <label for="streeidt" id="Strtid">Street:</label>
            <select id="streetid" name="streetid">
                <option value="Adont st.">Adont st.</option>
                <option value="Agapito st.">Agapito st.</option>
                <option value="Apolonia st.">Apolonia st.</option>
                <option value="Benito hao st.">Benito hao st.</option>
                <option value="Cf. Natividad st.">Cf. Natividad st.</option>
                <option value="Candido compound">Candido compound</option>
                <option value="Cunanan st.">Cunanan st.</option>
                <option value="D. Bautista st.">D. Bautista st.</option>
                <option value="De Castro subs">De Castro subs</option>
                <option value="De Leon st.">De Leon st.</option>
                <option value="Delfin st.">Delfin st.</option>
                <option value="Diego St.">Diego St..</option>
                <option value="Cf. Natividad st.">Cf. Natividad st.</option>
                <option value="Don Raymundo st.">Don Raymundo st.</option>
                <option value="F. Bautista st.">F. Bautista st.</option>
                <option value="Florentino St.">Florentino St.</option>
                <option value="G. Angeles St.">G. Angeles St.</option>
                <option value="Golden Rd.">Golden Rd.</option>
                <option value="Home Centrum Subd.">Home Centrum Subd.</option>
                <option value="Centrum 1,2,3">Centrum 1,2,3</option>
                <option value="Kabatuhan st.">Kabatuhan st.</option>
                <option value="Manero compound">Manero compound</option>
                <option value="Metro villa Sunday">Metro villa Sunday</option>
                <option value="Modesto st.">Modesto st.</option>
                <option value="Orosco st.">Orosco st.</option>
                <option value="Pabaya st">Pabaya st</option>
                <option value="Padilla compound">Padilla compound</option>
                <option value="Paso de Carlos st.">Paso de Carlos st.</option>
                <option value="Pedro st ">Pedro st </option>
                <option value="S. Feliciano st.">DS. Feliciano st.</option>
                <option value="S. Liwanag  st ">S. Liwanag st </option>
                <option value="San Agustin village">San Agustin village</option>
                <option value="St. John villas">St. John villas.</option>
                <option value="Sto Rosario St ">Sto Rosario St </option>
                <option value="Servando St.">Servando St.</option>
            </select>

            <input type="text" name="textbox1id" id="txtbox1id">
            <input type="text" name="textbox2id" id="txtbox2id">

            <label for="TINid" id="tnid"> TIN:</label>
            <input type="text" id="TINid" name="TIN" required>


            <label for="Occupationid" id="occupid"> Occupation:</label>
            <input type="text" id="Occupationid" name="Occupationid" required>


            <h2 class="emergencyinfo">
                Emergency Contact Information
            </h2>


            <label for="firstnameinfo" id="fnameinfo"> Firstname:</label>
            <input type="text" id="firstnameinfo" name="firstname" required>


            <label for="lastnameinfo" id="lnameinfo"> Lastname:</label>
            <input type="text" id="lastnameinfo" name="lastname" required>


            <label for="middlenameinfo" id="mnameinfo"> Middlename:</label>
            <input type="text" id="middlenameinfo" name="middlename" required>


            <label for="suffixnameinfo" id="snameinfo"> Suffix Name:</label>
            <input type="text" id="suffixnameinfo" name="suffixname" required>

            <label for="phoneninfo" id="cpinfo"> Contact No:</label>
            <input type="text" id="phoneinfo" name="phoneinfo" pattern="^(09|\+639)\d{9}$" required>

            <label for="relationshipinfo" id="relationinfo"> Relationship:</label>
            <input type="text" id="relationshipinfo" name="relationship" required>


            <label for="addressnameinfo" id="anameinfo"> Address:</label>
            <input type="text" id="addressnameinfo" name="address" required>

            <p class="noteinfo">
                Note: Provide a Photocopy of Barangay ID or Any Valid ID,
                <br>Proof of Residence (Utility Bill, Lease
                <br>Agreement, Etc.), and Exact Amount Upon
                <br>Claiming.
            </p>


            <label for="messageid" id="msgid">Message(Optional)</label>
            <textarea id="messageid" name="message" rows="4" cols="50"></textarea>

            <input type="button" id="cancelid" value="CANCEL" onclick="window.location='user.php'" />
            <input type="submit" name="Submit" id="submitid" value="SUBMIT">
        </form>
    </div>
    </div>
</body>

</html>