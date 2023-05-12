<?php
@include 'config.php';

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn,$_POST['password']);
   $cpass = mysqli_real_escape_string($conn,$_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = "SELECT * FROM users WHERE email = '$email'";
   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {
      $error[] = 'User Already Exists!';
   }else{
      if($pass != $cpass){
         $error[] = 'Password Not Matched!';
      }else{
         $hash = password_hash($pass, PASSWORD_DEFAULT);
         $insert = "INSERT INTO users(name, email, password, user_type) VALUES('$name','$email','$hash','$user_type')";
         mysqli_query($conn, $insert);
         header('location:Login.php');
      }
   }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Now</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>REGISTER NOW</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter your name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="password" name="cpassword" required placeholder="Confirm your password">
      <select name="user_type">
         <option value="member">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="Register Now" class="form-btn">
      <p>Already Have An Account? <a href="login.php">Login Now</a></p>
   </form>

</div>

</body>
</html>