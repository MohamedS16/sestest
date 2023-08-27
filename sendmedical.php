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

    <title>Send Medical History</title>
</head>
<body>
    <?php 
    
    include('database.php');
    include('nav.php');

    // $hattly = "SELECT * FROM `users` WHERE `doctorname` = '$docname'";
    // $dot = mysqli_query($mysqli,$hattly);
    // foreach($dot as $patient){
        ?>

  



    
      <div class="mainn">
    <div class="medical">
        <h2>Medical History</h2>
        <p class="lock"></p>
        <form method="post">
        <div class="men">
            <h5 style="margin-bottom: 550px;">Mental Illness :</h5>
            <textarea rows="18" cols="180" name="illness" <?php if(empty($illness)){}else{echo $illness;}; ?> ></textarea>

        </div>
        <div class="men">
            <h5 style="margin-bottom: 116px;">Treatment :</h5>
            <textarea rows="4" cols="170"  name="treatment"<?php if(empty($treatment)){}else{echo $treatment;}; ?> > </textarea>
        </div>
        <div class="men">
            <h5>Chronic Diseases :</h5>
            <textarea rows="1" cols="170"  name="disease" <?php if(empty($disease)){}else{echo $disease;}; ?> > </textarea>

        </div>
        <div class="men">
            <h5>Blood Type :</h5>
            <textarea rows="1" cols="170"  name="blood" <?php if(empty($blood)){}else{echo $blood;}; ?> ></textarea>

        </div>
        <div class="men">
            <h5>Allergic Reaction :</h5>
            <textarea rows="1" cols="170" name="allergic"<?php if(empty($allergic)){}else{echo $allergic;}; ?> ></textarea>

        </div>
        <div class="men">
            <h5>Previous Pills :</h5>
            <textarea  rows="1" cols="170" name="pills" <?php if(empty($pills)){}else{echo $pills;}; ?>> </textarea>

        </div>
        
        <input type="submit" name="sendhistory" id="myBtn"  ></input>
       </form>
 
 <?php


    $email = $_SESSION['email'];
    
    $hat = "SELECT * from `users` WHERE `email` = '$email'";
    $do= mysqli_query($mysqli,$hat);

    $profd = mysqli_fetch_array($do);



        // $allergic=[];
        // $disease=[];
        // $treatment=[];
        // $pills=[];
        // $illness=[];
        //  $blood=[];

       if(isset($_POST['sendhistory'])){
 

           $illness = $_POST['illness'];
           $treatment = $_POST['treatment'];
           $disease = $_POST['disease'];
           $blood = $_POST['blood'];
           $allergic = $_POST['allergic'];
           $pills = $_POST['pills'];
           $ms=$_GET['doctor'];
           $mm = $_GET['useremail'];
           

           $sendd = "INSERT INTO `history`( `doctorname`,`useremail`, `illness`, `treatment`, `disease`, `blood`, `allergic`, `pills`) VALUES ('$ms','$mm','$illness','$treatment','$disease','$blood','$allergic','$pills')";
           $emm = mysqli_query($mysqli,$sendd);
          
          echo '<script>alert("Illness history sent")</script>';
}

?>


    </div>
        

    </div>




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
