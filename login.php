<?php
include("connect.php");
session_start();
if(isset($_POST['submit'])){
  $email = htmlspecialchars(strtolower(trim($_POST['email']))); 
  $password = htmlspecialchars(strtolower(trim(md5($_POST['password']))));
  $query = "SELECT * FROM signup WHERE email='$email' && password='$password'";
  if(mysqli_num_rows(mysqli_query($con,$query))>0){
    $_SESSION['email']=$user;
    header("Location:admin.php");
  }else{
    echo "ifoo";
  }

  }


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="container">
<a href="/siteweb/index.php" class="logo3" >
                <img href="/siteweb/index.php" src="img/logo.png" alt="" />
</a>
    </div>
  
    <div class="center">
        
      <h1>Login</h1>
      <form action="" method="post">
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>

        <input type="submit" name="submit" value="Login">
       
      </form>
    </div>

  </body>
</html>
