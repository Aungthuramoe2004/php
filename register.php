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
      <h2 class="text-center text-success">Register Form</h2>
    <form method="POST">
      <div class="row">
        <label for="name" class="text-danger">Name:</label>
        <input class="text" name="name">
      </div>
      <div class="row">
        <label for="G-mail" class="text-danger">G-mail:</label>
        <input class="text" name="gmail">
      </div>
      <div class="row">
        <label for="password" class="text-danger">Password:</label>
        <input type="password" name="password">
      </div>
      <div class="row">
        <label for="password" class="text-danger">Confirm Password:</label>
        <input type="password" name="confirmpassword">
      </div>
      <br>
      <div class="text-center">
      <button type="submit" class="btn btn-success" name="register">Register</button>
      </div>
    <a href= "login.php">
    <button type="button" class="btn btn-primary m-3">Login</button></a>
    <a href= "register.php">
    <button type="button" class="btn btn-success m-3">Register</button></a>
    <a href= "logout.php">
    <button type="button" class="btn btn-danger m-3">Logout</button></a>
  </form>  
  </div>
        
  <?php
  session_start();

   function checkStrongPassword($password){
    $upperStatus = false;
    $lowerStatus = false;
    $numberStatus = false;
    $specialStatus = false;

    if(preg_match('/[A-Z]/',$password)){
        $upperStatus = true;
    }
    if(preg_match('/[a-z]/',$password)){
        $lowerStatus = true;
    }
    if(preg_match('/[0-9]/',$password)){
        $numberStatus = true;
    }
    if(preg_match("/[@#$&]/",$password)){
        $specialStatus = true;
    }
    if($upperStatus && $lowerStatus && $numberStatus&& $specialStatus){
        return true;
    }else{
        return false;
    }
  };
  if(isset($_POST['register'])){
    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

   if($name !="" && $gmail !="" && $password !=""){
    if(strlen($password)>=6 && strlen($confirmpassword)>=6){
       if($password==$confirmpassword){
        $Status = checkStrongPassword($password);
        if($Status){
           $_SESSION['name'] = $name;
           $_SESSION['gmail']=$gmail;
           $_SESSION['password']= password_hash($password, PASSWORD_BCRYPT);
           echo "Register Success";
        }else{
            echo"You need a strong password (contain A-Z a-z 0-9 @#$&)";
        }
    }else{
        echo"Password not same.Try Again";
       }
   }else{
    echo"Password must be greather than 6";
}
}else{
    echo"Need to fill";
   } 
}
  ?>

</body>
</html>




           <div class="my-3 mx-3">
          <label for="">Phone:</label>
          <input type="text" name="" class="form-control" placeholder="Enter Phone...(eg.09......)">
          <small class="text-danger">*Need to Fill...*</small>
           </div>
           <div class="my-3 mx-3">
          <label for="">Gmail:</label>
          <input type="text" name="" class="form-control" placeholder="Enter gmail...eg(Example1234@)">
          <small class="text-danger">*Need to Fill...*</small>
           </div>
           <div class="my-3 mx-3">
          <label for="">Address:</label>
          <textarea type="text" name="" class="form-control" placeholder="Enter address..."></textarea>
          <small class="text-danger">*Need to Fill...*</small>
           </div>
           <div class="my-3 mx-3 float-end">
               <button type="submit" class="form-control">Save</button>
           </div>
             