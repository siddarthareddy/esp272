<?php
  require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include "framework/head.html"; ?>
    <meta charset="utf-8">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header class="header">
      <?php include "framework/nav.php"; ?>
      <div class="container" id="main-wrapper">
    <center>
       <h2>Registration Form</h2>
       <img src="imgs/login.jpg" class ="avatar"/>
    </center>

    <form class="myform" action="Register.php" method="post">
      <label><b>First name:</b></label><br>
      <input name ="fname" type="text" class="inputvalues" placeholder="Type Your Firstname" required/><br>
      <label><b>Last name:</b></label><br>
      <input name ="lname" type="text" class="inputvalues" placeholder="Type Your Lastname" required/><br>
      <label><b>Password:</b></label><br>
      <input name ="password" type="password" class="inputvalues" placeholder="Type your password" required/><br>
      <label><b>Confirm Password:</b></label><br>
      <input name ="cpassword" type="password" class="inputvalues" placeholder="Confirm" required/><br>
      <label><b>Email:</b></label><br>
      <input name ="email" type="email" class="inputvalues" placeholder="Type Your Email" required/><br>
      <label><b>Home Address:</b></label><br>
      <input name ="address" type="text" class="inputvalues" placeholder="Type Your Address" required/><br>
      <label><b>Home Phone:</b></label><br>
      <input name ="hphone" type="text" class="inputvalues" placeholder="Type Your Home Number" required/><br>
      <label><b>Cell Phone:</b></label><br>
      <input name ="cphone" type="text" class="inputvalues" placeholder="Type Your Cell Number" required/><br>
      <input name ="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
      <a href="index.php"><input type="button" id="back_btn" value="Back"/></a>
    </form>
    <?php
        if(isset($_POST['submit_btn']))
        {
          $fname =$_POST['fname'];
          $lname =$_POST['lname'];
          $password =$_POST['password'];
          $cpassword =$_POST['cpassword'];
          $email =$_POST['email'];
          $address =$_POST['address'];
          $hphone =$_POST['hphone'];
          $cphone =$_POST['cphone'];

          if ($password==$cpassword)
          {
            $query="select * from users WHERE email='$email'";
            $query_run = mysqli_query($con, $query);
            if (mysqli_num_rows($query_run)>0) {
              echo '<script type="text/javascript">alert("User already exists... try another username")</script>';
            }
            else {
              $query="insert into users values('$fname','$lname','$password','$email','$address','$hphone','$cphone')";
              $query_run = mysqli_query($con, $query);
              if($query_run){
                echo '<script type="text/javascript">alert("User registered.. Go to login page to login")</script>';
              }
              else {
                // code...
                echo '<script type="text/javascript">alert("Error!")</script>';
              }
            }
          }
          else {
            // code...
            echo '<script type="text/javascript">alert("Password and confirm password does not match!")</script>';
          }
        }
     ?>
        </div>
  </body>
</html>
