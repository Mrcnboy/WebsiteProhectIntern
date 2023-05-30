<?php
include("connect.php");
if(isset($_POST['submit'])){
    $name = htmlspecialchars(strtolower(trim($_POST['name']))); 
    $email = htmlspecialchars(strtolower(trim($_POST['email']))); 
    $password = htmlspecialchars(strtolower(trim(md5($_POST['password']))));
    $query = "INSERT INTO signup(name,email,password)VALUE('$name','$email','$password')";
    if(mysqli_query($con,$query)){
        echo"houss";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css">
  </head>
  <body>
    <div class="container">
<a href="/siteweb/index.php" class="logo3" >
                <img href="/siteweb/index.php" src="img/logo.png" alt="" />
</a>
    </div>
  
    <div class="center">
        
      <h1>Signup</h1>
      <form action="" method="post">
      <div class="txt_field">
          <input type="text" name="name" required>
          <span></span>
          <label>Name</label>
        </div>
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

        <input type="submit" name="submit" value="Signup">
       
      </form>
    </div>

  </body>
</html>
