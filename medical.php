<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="css/medical.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Caveat&family=Dancing+Script&display=swap" rel="stylesheet">

    <title>Medical History</title>
  </head>
  <body>
     
  <?php
   include('nav.php');
   include('database.php');

   $email = $_SESSION['email'];
   $hat = "SELECT * from `users` WHERE `email` = '$email'";
   $do= mysqli_query($mysqli,$hat);
   $profd = mysqli_fetch_array($do);

$ms=$_GET['doctor'];
$mm = $_GET['useremail'];
   $geeb = "SELECT * from `history` WHERE `useremail` = '$mm'";
   $rhat = mysqli_query($mysqli,$geeb);
   foreach($rhat as $history){
     
     ?>


       <div class="mainn">
    <div class="medical">
        <h2>Medical History</h2>
        <p class="lock"></p>

        <div class="men">
            <h5>Mental Illness :</h5>
            <p><?php echo($history['illness']) ?></p>
        </div>
        <div class="men">
            <h5>Treatment :</h5>
            <p><?php echo($history['treatment']) ?></p>
        </div>
        <div class="men">
            <h5>Chronic Diseases :</h5>
            <p><?php echo($history['disease']) ?></p>
        </div>
        <div class="men">
            <h5>Blood Type :</h5>
            <p><?php echo($history['blood']) ?></p>
        </div>
        <div class="men">
            <h5>Allergic Reaction :</h5>
            <p><?php echo($history['allergic']) ?></p>

        </div>
        <div class="men">
            <h5>Previous Pills :</h5>
            <p><?php echo($history['pills']) ?></p>

        </div>
       
        

    </div>
        

    </div>

    <?php 
          }


          ?>



 <button id="backtotop"><span class="material-symbols-outlined"> arrow_upward </span></button>






    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="jquery-3.6.4.js"></script>
    <script src="main.js"></script>
    <script src = "script.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
  </body>
</html>
