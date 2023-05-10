<?php

@include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

   $email = ($_POST['email']);
   $pass = ($_POST['password']);

   $sql = "SELECT * FROM `users` WHERE email='$email';";
   $result = mysqli_query($conn, $sql);

   if ($row = mysqli_fetch_assoc($result)) {
      $hash = $row['password'];
      if (password_verify($password, $hash)) {

         // Login Sucessfull
         session_start();
         $user = $_SESSION["name"] = $row["name"];
         if ($row['user_type'] == 'admin') {
            header('location:admin.php');
            exit;
         } elseif ($row['user_type'] == 'member') {
            header('location:user.php');
            exit;
         }
      } // Login failure
      else {
         $error[] = 'incorrect email or password!';
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
   <link rel="stylesheet" href="css/style1.css">

</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>login now</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="email" name="email" required placeholder="enter your email">
         <input type="password" name="password" required placeholder="enter your password">
         <input type="submit" name="submit" value="login now" class="form-btn">
         <p>don't have an account? <a href="register.php">register now</a></p>
      </form>

   </div>

</body>

</html>