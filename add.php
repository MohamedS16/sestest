<?php
  include('database.php');

  if(isset($_POST['submit'])){
    
    $namee = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['pass']);
    $age = htmlspecialchars($_POST['age']);
    $gender = htmlspecialchars($_POST['gender']);
    $phone = htmlspecialchars($_POST['phone']);
    $location = htmlspecialchars($_POST['location']);
    $price = htmlspecialchars($_POST['price']);
    $speciality = htmlspecialchars($_POST['speciality']);
    // $photo = htmlspecialchars($_FILES['photo']);


    $sqq = "INSERT INTO `doctors`(`name`,`email`,`password`,`age`,`gender`,`phone`,`status`,`role`,`location`,`price`,`speciality`,`patients`,`photo`) VALUES('$namee','$email','$pass','$age','$gender','$phone','2','doctor','$location','$price','$speciality',0,'r')";
    $doo = mysqli_query($mysqli,$sqq);


  }





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add.css">

    <title>Document</title>
</head>
<body>




<form method="POST" enctype="multipart/form-data">
   
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
      </div>
     <div>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
  </div>
  <div>
    <label for="pass">password:</label>
    <input type="text" id="pass" name="pass">
  </div>
  <div>
    <label for="age">age:</label>
    <input type="text" id="age" name="age">
  </div>
  <div>
    <label for="gender">gender:</label>
    <input type="text" id="gender" name="gender">
  </div>
  <div>
    <label for="phone">phone:</label>
    <input type="text" id="phone" name="phone">
  </div>
  <div>
    <label for="location">location:</label>
    <input type="text" id="location" name="location">
  </div>
  <div>
    <label for="price">price:</label>
    <input type="text" id="price" name="price">
  </div>
  <div>
    <label for="speciality">speciality:</label>
    <input type="text" id="speciality" name="speciality">
  </div>
   <div>
    <label for="photo">photo</label>
    <input type="file" id="photo" name="photo">
  </div> 
 
  <div>

  <input type="submit" name="submit" value="Add Doctor" />
</form>





</body>
</html>