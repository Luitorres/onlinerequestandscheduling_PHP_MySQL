<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Residency</title>
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
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </nav>
    </header>

    <img src="images/barangay.jpg" alt="barangaypic" class="imageclearance">

    <a href="certificaterequest.php" class="back-link">
        <span class="back-icon">&lt;</span>
    </a>

    <div class="clearanceform">
        <h2 class="nameclearance">
            Barangay Residency

        </h2>
        <hr class="lining">

        <h2 class="info">
            Personal Information
        </h2>


        <form action="" method="">
            <label for="fname" id="firstname">First Name: </label><br>
            <input type="text" id="fname" required><br><br>

            <label for="lname" id="lastname">Last Name: </label><br>
            <input type="text" id="lname" required><br><br>

            <label for="mname" id="middlename">Middle Name: </label><br>
            <input type="text" id="mname" required><br><br>

            <label for="sname" id="suffixname">Suffix Name: </label><br>
            <input type="text" id="sname" required><br><br>

            <label for="birthday" id="bday">Birthday: </label><br>
            <input type="date" id="birthday" required><br><br>

            <label for="placeofbirth" id="birth">Place of Birth: </label><br>
            <input type="text" id="placeofbirth" required><br><br>

            <label for="civilstatus" id="civil">Civil Status: </label><br>
            <input type="text" id="civilstatus" required><br><br>

            <label for="sex" id="gender">Sex: </label><br>
            <input type="text" id="sex" required><br><br>

            <label for="Nationality" id="national">Nationality: </label><br>
            <input type="text" id="Nationality" required><br><br>

            <label for="PWD" id="pd">PWD: </label><br>
            <input type="text" id="PWD" placeholder="YES/NO" required><br><br>

            <label for="Occupation" id="occup">Occupation: </label><br>
            <input type="text" id="Occupation" required><br><br>

            <label for="phone" id="cp">Contact No:</label>
            <input type="tel" id="phone" name="phone" pattern="^(09|\+639)\d{9}$" required>

            <label for="email" id="eadd">Email Address (Optional):</label>
            <input type="email" id="email" name="email">

            <label for="address" id="add"> Address:</label>
            <input type="text" id="address" name="address" required>

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

            <input type="text" name="textbox1" id="txtbox1">
            <input type="text" name="textbox2" id="txtbox2">



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

</body>

</html>