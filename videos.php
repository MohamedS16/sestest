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
    <link rel="stylesheet" href="user1.css">
    <link rel="stylesheet" href="videos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 

    <title>Videos</title>
  </head>
  <body>
    
    <?php
    // include('nav.php');
    include('database.php');

    ?>
   <header>
      <div class="main">
          <nav id="navbar" class="bgcolor" >
              <div class="logo">
              <a href="home.html" class="log">Thera</a>
              <a href="home.html" class="logg">piva</a>
              </div>
              <form class="search" method="post">
                  <button ><i class="material-symbols-outlined" type="submit" name="submit">search</i></button>
                <input type="search" placeholder="Search Video" name="src"></form>

              
              <ul>
                  
                 <li><a href="#">HOME</a></li>
                 <li><a href="#">ABOUT US</a></li>
                 <li><a href="#">SERVICE</a></li>
                 <li><a href="#">DOCTORS</a></li>
                 <li><a href="medical.html">MEDICAL HISTORY</a></li>

                 <li><a href="#">ACCOUNT</a></li>
                 <li><a class="active" href="#">LOGOUT</a></li>
      
              </ul>
          </nav>
  
      </div>

  </header>
  </div></div>

   


   <?php 
      $sql="SELECT * FROM  `video`";

       if (isset($_POST['submit'])){
       $src= mysqli_real_escape_string($mysqli,$_POST['src']);
       $sql="SELECT * FROM  `video` where name like '%$src%'";
       $result= mysqli_query($mysqli,$sql);
       $queryResult= mysqli_num_rows($result);

       if ( $queryResult>0){
        while($row = mysqli_fetch_array($result)){
            
            $location = $row['location'];


           echo "<video src='".$location."' controls width='500px' height='300px'>";

        }
         
         
        }
    
    else{
        echo" There is no results matching your search";
    }
}
else{
    
    $result= mysqli_query($mysqli,$sql);

    

  foreach($result as $videoss) {
 ?>

        <video controls width="500px" height="300px" class="row col-md-6 ">
        <source src="<?php echo($videoss['location']) ?>" type="video/mp4" >

        </video>
        <p class="titless"><?php echo($videoss['name']) ?></p>
        
             <?php
                  }}
    
                   ?>




    
    
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