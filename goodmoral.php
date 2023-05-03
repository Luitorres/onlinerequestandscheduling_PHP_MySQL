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
    
    
    $insert_request = mysqli_query($conn, "INSERT INTO `request_goodmoral`(`first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `occupation`, `contact`, `email`, `address`, `street`, `message`) 
    VALUES ('$fname','$lname','$mname','$sname','$nbirthday','$placeofbirth','$civil','$sex','$nationality','$pwd','$occupation','$phone','$email','$address','$street','$message')");
     
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Moral</title>
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
            Barangay Certificate of Good Moral Character
        </h2>

        <hr class="lining"> 

        <form action="# " method="post">
            <h2 class="info">
                Personal Information
            </h2>
            <label for="fname" id="firstname">First Name: </label><br>
            <input type="text" name= "fname" id="fname" ><br><br>

            <label for="lname" id="lastname">Last Name: </label><br>
            <input type="text" name= "lname" id="lname" ><br><br>

            <label for="mname" id="middlename">Middle Name: </label><br>
            <input type="text" name= "mname" id="mname" ><br><br>

            <label for="sname" id="suffixname">Suffix Name: </label><br>
            <input type="text" name= "sname" id="sname" ><br><br>

            <label for="nbirthday" id="bday">Birthday: </label><br>
            <input type="text" name="bday" id="nbirthday" ><br><br>

            <label for="placeofbirth" id="birth">Place of Birth: </label><br>
            <input type="text" name= "placeofbirth" id="placeofbirth" ><br><br>

            <label for="civilstatus" id="civil">Civil Status: </label><br>
            <input type="text" name="civilstatus" id="civilstatus" ><br><br>

            <label for="sex" id="gender">Sex: </label><br>
            <input type="text" name="sex" id="sex" ><br><br>

            <label for="Nationality" id="national">Nationality: </label><br>
            <input type="text" name="Nationality" id="Nationality" ><br><br>

            <label for="PWD" id="pd">PWD: </label><br>
            <input type="text" name="PWD" id="PWD" placeholder="YES/NO" ><br><br>

            <label for="Occupation" id="occup">Occupation: </label><br>
            <input type="text" id="Occupation" name= "Occupation" ><br><br>

            <label for="phone" id="cp">Contact No:</label>
            <input type="tel" id="phone" name="phone" pattern="^(09|\+639)\d{9}$" >

            <label for="email" id="eadd">Email Address (Optional):</label>
            <input type="email" id="email" name="email">

            <label for="address" id="add"> Address:</label>
            <input type="text" id="address" name="address" >

            <label for="street" id="Strt">Street:</label>
            <select id="street" name="street">
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
           
            


            <label for="message" id="msg">Message(Optional:)</label>
            <textarea id="message" name="message" rows="4" cols="50"></textarea>

            <input type="button" id="cancel" value="CANCEL" onclick="window.location='user.php'" />
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