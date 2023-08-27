<?php
include("database.php");





?>
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
    <link rel="stylesheet" href="css/user1.css">
    <link rel="stylesheet" href="css/edit.css">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>User</title>
</head>
<style>


   input[type=text]{
      background-color: floralwhite;
      height: 200px;
      width: 400px;
      outline: none;
      border-radius: 20px;
      border: none;


   }
</style>

<body>
    <div class="allcontant">
        <?php include('nav.php');
        $email = $_SESSION['email'];

        $hat = "SELECT * from `users` WHERE `email` = '$email'";
        $do= mysqli_query($mysqli,$hat);

        $profd = mysqli_fetch_array($do);



?>

        <aside>






            <div class="leftside">

                <div class="profile">
                    <img src="avatar7.png">
                    <h4><?php echo $profd['name'] ?></h4>
                    <div class="editinfo">
                        <span class="material-symbols-outlined">
                            page_info
                        </span>
                        <a href="edit.php">See your info</a>
                
                    </div>




                </div>

            </div>
        </aside>
        <!----------------------------- 1st Modal ------------------------------>

        <div class="modalcontainer">
     <!-- Trigger/Open The Modal -->
     <div class="Schedule">
      <span class="material-symbols-outlined">chat</span>
      <button id="myBtn">Notes</button></div>
  
            <!-- The Modal -->
  <div id="myModal" class="modal">
  
          <!-- Modal content -->
    <div class="modal-content">
    <div class="modal-header">
 
  <h3>How you feel right now ?</h3><!--Your Feelings Matter !-->
  <span class="close">×</span>
  </div>
  <div class="modal-body">
    
  <!-- <p>اااااااااااااااااااااااااه</p> -->
  <div class="messages">

<form method="post">

<textarea  rows="11" cols="135" type="text" name="notetext" placeholder="Feel free to open up here..."></textarea>
</div>
<input type="submit" name="submitnote">
</form>


<?php 
   if(isset($_POST['submitnote'])){

      $notetext = $_POST['notetext'];
      $patientname = $profd['name'];
      $patientemail = $profd['email'];
      $doctorname = $profd['doctorname'];

      $sendd = "INSERT INTO `notes`(`doctorname`,`email`,`username`,`note`) VALUES ('$doctorname','$patientemail','$patientname','$notetext')";
      $emm = mysqli_query($mysqli,$sendd);

   }

?>
 
  </div>
  <!-- <div class="modal-footer">
  <h3>Modal Footer</h3>
  </div> -->
  </div>
  </div>
   <!------------------------ 2st Modal ------------------------------------->

  <!-- Trigger/Open The Modal -->
  <div class="Schedule">
    <span class="material-symbols-outlined">flash_on</span>
    <button id="myBtnn" name="viewtask">Tasks</button>
     
            






  </div>

 
  
  <!-- The Modal -->
  <div id="myModall" class="modal">
  
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <h3>Your Tasks </h3>

        <span class="close">×</span>
        
      </div>

        
      
      <div class="modal-body">
          <?php

       
          $geeb = "SELECT * from `tasks` where `useremail` =  '$email'";
          $rhat = mysqli_query($mysqli,$geeb);
          foreach($rhat as $task){
            
            ?>

            <div>
               <p><?php echo($task['task']) ?></p>
            </div>


<?php 
          }


          ?>







        <div class="rate">
          <h4 class="startext">Do you find your uploaded tasks helpful?</h4>
          <input type="radio" id="star5" name="rate" value="5" />
          <label for="star5" title="text">5 stars</label>
          <input type="radio" id="star4" name="rate" value="4" />
          <label for="star4" title="text">4 stars</label>
          <input type="radio" id="star3" name="rate" value="3" />
          <label for="star3" title="text">3 stars</label>
          <input type="radio" id="star2" name="rate" value="2" />
          <label for="star2" title="text">2 stars</label>
          <input type="radio" id="star1" name="rate" value="1" />
          <label for="star1" title="text">1 star</label>
        </div>
       
        
      </div>
      



      <!-- <div class="modal-footer">
        <h3>Modal Footer</h3>
      </div> -->
    </div>
  </div>

  <!----------------------------- 3rd Modal --------------------------------------->

  <!-- Trigger/Open The Modal -->
  <div class="Schedule">
    <span class="material-symbols-outlined">
      date_range
      </span>
    <button id="myBtnnn">Schedule</button></div>
    
    <!-- The Modal -->
    <div id="myModalll" class="modal">
    
    <!-- Modal content -->
    <div class="modal-content">
    <div class="modal-header">
      <h3>Your Schedule</h3>
  
    <span class="close">×</span>
    </div>
    <div class="modal-body">
      <table class="table">
    <thead>

  
      <tr>
        <th scope="col">#</th>
        <th scope="col">Day</th>
        <th scope="col">Time</th>
        <th scope="col">Type </th>
      </tr>
    </thead>
    <tbody>
      
      <tr>
        <th scope="row">1</th> 
        <?php
  $eventname='name';
   if(isset($_POST["book"])) {
       $hat = "SELECT * from `events` WHERE `name` = '$eventname' ";
       $dots = mysqli_query($mysqli,$hat); 
     
      foreach($dots as $event){?> 
   




        

        <td><?php echo($event['date']) ?><br> 11/2/2023 </td>
        <td>7:00 PM</td>
        <td>Session</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Monday <br> 5/3/2023</td>
        <td>3:00 PM</td>
        <td>Session</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Friday <br> 11/3/2023</td>
        <td>1:30 PM</td>
        <td>Session</td>
      </tr>
     <?php
     }
 }?>
    </tbody>
  </table>
    </div>


    <!-- <div class="modal-footer">
    <h3>Modal Footer</h3>
    </div> -->
    </div>
    </div> 
</div>
    <div class="allspan">
  <span id="span" class="material-symbols-outlined">
    waving_hand
    </span>
   
    <?php
    $even = "SELECT * from `events`";
    $events = mysqli_query($mysqli,$even); 
    $events =  mysqli_fetch_assoc($events); {


   ?>
  <div class="popup2" onclick="myFunction()">Events
    
    <span class="popuptext" id="myPopup"> Date & Time<br>  <p> Meet our host  <?php echo($events['host']) ?> at  <?php echo($events['date']) ?> at  <?php echo($events['time']) ?> </p>
     <a href="#" name="book">Book Now</a> </span>
   
     

    <?php
    }?>
  </div>
</div>
<div class="rightside">

  <div class="content">

    <div class="testimonial_section layout_padding">

      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <!-- <h1 class="testimonial_taital">Customers Says</h1> -->
            </div>
         </div>
    <div id="my_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="testimonial_section_2">
               <div class="row">
                  <div class="col-sm-">
                     <p class="many_text"><img src="5.jpg" alt="" style="height: 250px; width: 190px;" ></p>
                  </div>
                  <div class="col-sm-">
                     <p class="many_text"><img src="2.webp" alt="" style="height: 250px; width: 190px;"></p>
                  </div>
                  <div class="col-sm-">
                     <p class="many_text"><img src="1.jpg" alt="" style="height: 250px; width: 190px;"></p>
                  </div>
                  <div class="col-sm-">
                     <p class="many_text"><img src="4.jpg" alt="" style="height: 250px; width: 190px;"></p>
                  </div>
               </div>
              </div>
         </div>
              <div class="carousel-item ">
                 <div class="testimonial_section_2">
                    <div class="row">
                       <div class="col-sm-">
                          <p class="many_text"><img src="3.jpg" alt="" style="height: 250px; width: 190px;"></p>
                       </div>
                       <div class="col-sm-">
                          <p class="many_text"><img src="6.jpg" alt="" style="height: 250px; width: 190px;"></p>
                       </div>
                       <div class="col-sm-">
                          <p class="many_text"><img src="7.jpg" alt="" style="height: 250px; width: 190px;"></p>
                       </div>
                       <div class="col-sm-">
                          <p class="many_text"><img src="8.jpg" alt="" style="height: 250px; width: 190px;"></p>
                       </div>
                      
                    </div>
                 </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial_section_2">
                   <div class="row">
                      <div class="col-sm-">
                         <p class="many_text"><img src="9.jpg" alt="" style="height: 250px; width: 190px;"></p>
                      </div>
                      <div class="col-sm-">
                         <p class="many_text"><img src="10.jpg" alt="" style="height: 250px; width: 190px;"></p>
                      </div>
                      <div class="col-sm-">
                         <p class="many_text"><img src="11.jpg" alt="" style="height: 250px; width: 190px;"></p>
                      </div>
                      <div class="col-sm-">
                         <p class="many_text"><img src="12.jpg" alt="" style="height: 250px; width: 190px;"></p>
                      </div>
                      
                   </div>
                </div>
             </div>
          </div>
          <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
            </a>
         </div>
      </div>
   </div> <hr>
   <div class="text">
    <p> Obsessive compulsive disorder (OCD) is a common, chronic, and long-lasting disorder in which a person has uncontrollable, reoccurring thoughts ("obsessions") and behaviors ("compulsions") that he or she feels the urge to repeat over and over.<br><br>
        You may try to ignore or stop your obsessions, but that only increases your distress and anxiety. Ultimately, you feel driven to perform compulsive acts to try to ease your stress.
    </p>

    <a id="medical" class="button" href="medical.php?useremail=<?php echo($profd['email'])?>&doctor=<?php echo $profd['doctorname']; ?>">Medical History</a>


   </div>







  </div>
</div>
<div class="downside">
  <div class="videos">
    <div class="hp">
        <!-- <p class="lock1"></p> -->
    <h3>Mental self care ideas</h3>
    <p class="lock1"></p></div>
    <hr>
    <section class="containerr" >
      <span id="left-arrow" class="arrow">&lsaquo;</span>
      <span id="right-arrow" class="arrow">&rsaquo;</span>
      <div class="slider" id="slider">


      <?php 
     $sql="SELECT * FROM  `video`";
 
        
        $sql="SELECT * FROM  `video`";
        $result= mysqli_query($mysqli,$sql);
        $queryResult= mysqli_num_rows($result);


        $i = 0;
       foreach($result as $videoss) {
           if (++$i == 5) {
               break;
             }?>
       <div class="box"><video controls style=" height: 100%;  width:100% ;">
               <source src="<?php echo($videoss['location']) ?>" type="video/mp4" >
       </video></div>

           <?php
           
                  }
    
                   ?>
           

                     
                


                           
           <div class="dummy"> <a href="videos.php">See More</a>
            <span class="material-symbols-outlined">
            play_arrow</span></div>
       </div>
    </section>
 </div>
 <button id="backtotop"><span class="material-symbols-outlined"> arrow_upward </span></button>
</div>  



        
    </div>
    <div class="allpopup">
        <div class="popup">
            <button id="close">&times;</button>
            <h2>Go check our premium offers</h2>
            <p>
                Join us to know more about our <b>mental health events </b> & <b>group therapy sessions</b> enjoying our special promo codes.
            </p>
            <a href="payment.html">Let's Go</a>
        </div>
    </div>
    <button id="backtotop"><span class="material-symbols-outlined"> arrow_upward </span></button>
        <?php include('footer.php') ?>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>



    <script>
        var modal = document.getElementById('myModal');
        var modall = document.getElementById('myModall');
        var modalll = document.getElementById('myModalll');


        var btn = document.getElementById("myBtn");
        var btnn = document.getElementById("myBtnn");
        var btnnn = document.getElementById("myBtnnn");

        var span = document.getElementsByClassName("close")[0];
        var spann = document.getElementsByClassName("close")[1];
        var spannn = document.getElementsByClassName("close")[2];


        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        btnn.onclick = function() {
            modall.style.display = "block";
        }

        spann.onclick = function() {
            modall.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modall) {
                modall.style.display = "none";
            }
        }
        btnnn.onclick = function() {
            modalll.style.display = "block";
        }

        spannn.onclick = function() {
            modalll.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modalll) {
                modalll.style.display = "none";
            }
        }
    </script>




</body>

</html>