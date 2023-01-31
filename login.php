<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
    <div class="container bg-dark">
      <h2 class="text-center text-success">Login Form</h2>
    <form method="POST">
      <div class="row">
        <label for="name" class="text-danger">Name:</label>
        <input class="text" name="name">
      </div>
    
      <div class="row">
        <label for="G-mail" class="text-danger">G-mail</label>
        <input class="text" name="gmail">
      </div>
      <div class="row">
        <label for="password" class="text-danger">Password</label>
        <input type="password" name="password">
      </div>
      <br>
      <div class="text-center">
        <button type="submit" class="btn btn-primary"name="login">Login</button>
      </div>
    <a href= "login.php">
    <button type="button" class="btn btn-primary m-3" >Login</button></a>
    <a href= "register.php">
    <button type="button" class="btn btn-success m-3">Register</button></a>
    <a href= "logout.php">
    <button type="button" class="btn btn-danger m-3">Logout</button></a>
  </form>
  </div>

  <?php
     session_start();
    
     if(isset($_POST['login'])){
      $username = $_POST['name'];
      $usergmail = $_POST['gmail'];
      $userpassword = $_POST['password'];
      
      if($username == $_SESSION['name'] && $usergmail == $_SESSION['gmail'] && password_verify($userpassword,$_SESSION['password'])){
        echo"Login Success";
      }else{
        echo"login fail";
      }
    
    }

  ?> 
</body>
</html>