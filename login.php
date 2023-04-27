<?php

@include 'config.php';

session_start();

// if(isset($_POST['submit'])){
//  $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $pass = mysqli_real_escape_string($conn,$_POST['password']);
//    $pass = password_hash($pass,PASSWORD_DEFAULT);
  

//    $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

//    $result = mysqli_query($conn, $select);

//    if($result > 0 ){

//       $row = mysqli_fetch_array($result);

//       if($row['user_type'] == 'admin'){

//          $_SESSION['admin_name'] = $row['name'];
//          header('location:admin.php');

//       }elseif($row['user_type'] == 'user'){

//          $_SESSION['user_name'] = $row['name'];
//          header('location:user.php');

//       }
     
//    }else{
//       $error[] = 'incorrect email or password!';
//    }


// };

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]))
    {
        
      $email = ($_POST['email']);
      $pass = ($_POST['password']);

        $sql = "SELECT * FROM `users` WHERE email='$email';";
        $result = mysqli_query($conn, $sql);

        if($row = mysqli_fetch_assoc($result))
        {
            $hash = $row['password'];
            if(password_verify($password, $hash))
            {

                // Login Sucessfull
                session_start();
                $user = $_SESSION["id"] = $row["id"];
                if($row['user_type']=='admin')
                {
                  header('location:admin.php');
                    exit;
                }
                elseif($row['user_type']=='user')
                {
                  header('location:user.php');
                    exit;
                }
               
            }
                
                 // Login failure
                 else{
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
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
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