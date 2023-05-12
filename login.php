<?php
@include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
   $email = ($_POST['email']);
   $pass = ($_POST['password']);

   $sql = "SELECT * FROM `users` WHERE email='$email';";
   $result = mysqli_query($conn, $sql);
   $hash = password_hash($pass, PASSWORD_DEFAULT);

   if ($row = mysqli_fetch_assoc($result)) {
      $hash = $row['password'];
      if (password_verify($pass, $hash)) {

         // Login Successful
         session_start();
         if ($row['user_type'] == 'admin') {
            $_SESSION["admin"] = $row["email"];
            header('location: mapulanglupa.php');
            exit;
         } elseif ($row['user_type'] == 'member') {
            $_SESSION["member"] = $row["email"];
            header('location: mapulanglupa.php');
            exit;
         }
      } // Login Failure
      else {
         $error[] = 'Incorrect email or password!';
      }
   }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Now!</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">
</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>LOGIN NOW</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="email" name="email" required placeholder="Enter your email">
         <input type="password" name="password" required placeholder="Enter your password">
         <input type="submit" name="submit" value="Login Now" class="form-btn">
         <p>Don't Have An Account? <a href="register.php">Register Now</a></p>
      </form>

   </div>

</body>

</html>