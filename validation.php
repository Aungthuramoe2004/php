<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
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
  <?php
  $errorname = $errorgmail = $errorphone = $erroraddress = "";
  $name = $gmail = $phone = $address = "";
  if (isset($_POST['savebtn'])){
    if($_POST['name']==null || $_POST['name']=="" || empty($_POST['name'])){
      $errorname = "Please fill your name!";
    }else{
      $name = $_POST['name'];
    }

    if($_POST['gmail']==null || $_POST['gmail']=="" || empty($_POST['gmail'])){
      $errorgmail = "Please fill your gmail!";
    }else{
      $gmail = $_POST['gmail'];
    }

    if($_POST['phone']==null || $_POST['phone']=="" || empty($_POST['phone'])){
      $errorphone = "Please fill your phone!";
    }else{
      $phone = $_POST['phone'];
    }

    if($_POST['address']==null || $_POST['address']=="" || empty($_POST['address'])){
      $erroraddress = "Please fill your address!";
    }else{
      $address = $_POST['address'];
    }

    if ($name != "" && $gmail != "" && $phone != "" && $address != ""){
      echo $name ."<br>";
      echo $gmail ."<br>";
      echo $phone ."<br>";
      echo $address ."<br>";
    }
    
  }
  ?>
    <div class="container">
       <div clss="row">
        <div class="col-6 offset-4 shadow">
            <form method="POST">
           <div class="my-3 mx-3">
               <label for="">Name:</label>
               <input type="text" name="name" class="form-control" placeholder="Enter name...">
               <small class="text-danger"><?php echo $errorname; ?></small>
           </div>
           <div class="my-3 mx-3">
          <label for="">Phone:</label>
          <input type="text" name="phone" class="form-control" placeholder="Enter Phone...(eg.09......)">
          <small class="text-danger"><?php echo $errorphone; ?></small>
           </div>
           <div class="my-3 mx-3">
          <label for="">Gmail:</label>
          <input type="text" name="gmail" class="form-control" placeholder="Enter gmail...eg(Example1234@)">
          <small class="text-danger"><?php echo $errorgmail; ?></small>
           </div>
           <div class="my-3 mx-3">
          <label for="">Address:</label>
          <textarea type="text" name="address" class="form-control" placeholder="Enter address..."></textarea>
          <small class="text-danger"><?php echo $erroraddress; ?></small>
           </div>
           <div class=" pe-0 mx-5 p-3">
               <button type="submit" class="form-control" name="savebtn">Save</button>
           </div>
        </form>  
        </div> 
       </div>
    </div>
</body>
</html>