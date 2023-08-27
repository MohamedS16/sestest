<?php
require('database.php');
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
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 
    <link rel="stylesheet" href="doctor.css">

    <title>Doctor</title>
  </head>
  <body>
  <?php include('nav.php');

  ?>

<?php
        $email = $_SESSION['email'];
        $hat = "SELECT * from `doctors` WHERE `email` = '$email'";
        $do= mysqli_query($mysqli,$hat);

        $profd = mysqli_fetch_array($do);

        $docname = $profd['name'];
?>

  <li><a href="#popup4">Click Me</a></li>

    <div id="popup4" class="overlayy">
      <div class="popupp">
        <h3>Requests</h3><hr>
        <a class="closee" href="#">&times;</a>
        <div class="contentt">
          <table >
            <tbody class="request">
            <?php
    $query = "SELECT * FROM users WHERE `status`=1 AND `role`='user' AND `doctorname` = '$docname' ";
    $result = mysqli_query($mysqli,$query);
    while($row = mysqli_fetch_array($result)){
?>

            <tr>
             <!-- <td class="id"><p><?php echo $row['id'].' '.$row['id'];?></p></td> -->
              <td class="first"><p><?php echo $row['name']?></p></td>
              <form action ="doctor.php" method ="post">
              <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
              <td><button  name="approve" value="approve" id="appro">Approve</button></td>
              <td><button id="den" name="deny" value="deny">Deny</button> </td>
              </form></tr> 
    <?php 
  } ?> 
          </tbody>
          </table>
                 
        </div>
      </div>
    </div>
    
    <?php 
if(isset($_POST['approve'])){
    $id=$_POST['id'];
    $select = "UPDATE users SET status = '2' WHERE id ='$id'";
$result= mysqli_query($mysqli,$select);
 header('location: doctor.php');
}
if(isset($_POST['deny'])){
    $id=$_POST['id'];
    $select = "DELETE FROM users WHERE id ='$id'";
$result= mysqli_query($mysqli,$select);
 echo '<script type="text/javascript">';
 echo 'alert ("user denied")';
 echo'window.location.href="admin-approval.php"';
 echo'</script>';
}
?>

    <aside>
        <div class="leftside">
          
          <div class="profile">
            <img src="doc.jpg">
            <h4><?php echo $profd['name']?></h4>
            <div class="editinfo">
              <span class="material-symbols-outlined">
                  page_info
                  </span>
            <a href="doctorinfo.php">See your info</a></div>
             



            <div class="modalcontainer">
              <!-- Trigger/Open The Modal -->
              <div class="Schedule">
                <span class="material-symbols-outlined">
                  pace
                  </span>
               <button id="myBtn">Appointments</button></div>
           
                     <!-- The Modal -->
         </div>

          </div>
        </div>
      </aside>
      <div id="myModal" class="modal">
           
        <!-- Modal content -->
  <div class="modal-content">
  <div class="modal-header">


<span class="close">×</span>
</div>
<div class="modal-body">
  
  <div class="contai">


    <form method="post">

    <div class="row">

  <div class="col">
            <div class="form-group">
                <label for="inputEmail4">Name</label>
                <input type="name" name="usernamee" value="<?php if(empty($usernamee)){}else{echo $usernamee;}; ?>"  class="form-control" id="inputEmail4" placeholder="Name">
            </div>
        </div>

  <div class="col">
            <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" name="useremail" value="<?php if(empty($useremail)){}else{echo $useremail;}; ?>"  class="form-control" id="inputEmail4" placeholder="Email">
            </div>
        </div>


      
    </div>
        
    <div class="row">
        <div class="col">
            <div class="form-group"> 
                <label class="flabel" for="day">Day</label>
                <input type="date" name="day" value="<?php if(empty($day)){}else{echo $day;}; ?>" class="form-control" id="day" placeholder="Day">
                

                
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label class="flabel" for="time">Time</label>
                <input type="time" name="time" value="<?php if(empty($time)){}else{echo $time;}; ?>" class="form-control" id="time" placeholder="Time">

            </div>
        </div>
    </div>
   
    <div class="row">
    <div class="col"> 
        <div class="form-group">
            <label class="" for="typee">Type</label>
            <select class="custom-select" name="type" id="typee">
                <option selected>Choose...</option>
                <option name="type" value="session" <?php if(empty($type)){}else if($type == 'session'){echo 'checked';}; ?>>Session</option>
                <option name="type" value="group therapy" <?php if(empty($type)){}else if($type == 'group therapy'){echo 'checked';}; ?>>Group Therapy</option>
            </select>
        </div></div>
    </div>
    <div class="row">
    <div class="col">
        <div class="form-group">
            <label class="" for="Statuss">Status</label>
            <select class="custom-select" name="statuss" id="Statuss">
                <option selected>Choose...</option>
                <option name="statuss" value="online" <?php if(empty($statuss)){}else if($statuss == 'online'){echo 'checked';}; ?>>Online</option>
                <option name="statuss" value="offline" <?php if(empty($statuss)){}else if($statuss == 'offline'){echo 'checked';}; ?>>Offline</option>
        
            </select>
        </div></div>
    </div>
    
    <button type="submit" name="sendsession" class="btn">submit</button>
    
        </form>
</div>
  <?php 

                         if(isset($_POST['sendsession'])){

                             $useremail = $_POST['useremail'];
                             $usernamee = $_POST['usernamee'];

                             $day = $_POST['day'];
                             $time = $_POST['time'];
                             $type = $_POST['type'];
                             $statuss = $_POST['statuss'];

                            //  $usernamee = $patient['name'];
                             $doctorrname = $docname;

                             $senddsession = "INSERT INTO `daysession`(`doctorrname`,`useremail`,`usernamee`,`day`,`time`,`type`,`statuss`) VALUES ('$docname','$useremail','$usernamee','$day','$time','$type','$statuss')";
                             $emm = mysqli_query($mysqli,$senddsession);
                             echo '<script>alert("session recorded")</script>';
   }

?>
 

</div>
<!-- <div class="modal-footer">
<h3>Modal Footer</h3>
</div> -->
</div>
</div>

      <div class="rightside">
        <div class="table2">
            <div class="content">
              <div class="containertable1">
                  
                  
            
                <div  class="table-responsive custom-table-responsive">
          
                  <table id="table2" class="table custom-table">
                    <thead>
                      <tr>  
          
          
                        
                        <th scope="col" class="name">Name</th>
                        <th scope="col" class="date">Date & Time</th>
                        <th scope="col" class="type">Type</th>
                        <th scope="col" class="status">Status</th>
                        
          
                      </tr>
                    </thead>
                    <tbody>
                     

                        <?php
                    

                      $sess = "SELECT * FROM `daysession` WHERE `doctorrname` = '$docname'";
                      $dots = mysqli_query($mysqli,$sess); 

                      foreach($dots as $senddsession){?>
                      <tr  scope="row">
                        <td> <?php echo($senddsession['usernamee']) ?></td>
                        <td class="timedate"><?php echo($senddsession['day']) ?><br><?php echo($senddsession['time']) ?></td>
                        <td> <?php echo($senddsession['type']) ?></td>
                        <td> <?php echo($senddsession['statuss']) ?></td>
                        
                        <!-- <td><button class="material-symbols-outlined" name="deletesess"> close </button></td> -->
                        <td><a href="<?php echo 'doctor.php?del=' . $senddsession['useremail'] ?>" class="material-symbols-outlined">Delete</a></td>
                    </tr>
                        <?php
                    } ?>

                            <?php
                                               
               if(isset($_GET['del'])){
                 $useremail = $_GET['del'];   
                   ?>  
          <div class="koko" >
              <div class="kokos">
                  <form  method="post">
                      <p>Are You Sure Want to Delete this Part ?</p>
                      <div class="btnn">
                          <input type="submit" name="delete" value="Delete" class="hio">
                          <p class="can">Cancel</p>
                      </div>
                  </form>
              </div>
          </div>
          <?php
      
              
          if(isset($_POST['delete'])){
              
              // $delete=mysqli_query($mysqli,"DELETE FROM`events`WHERE`name`='$eventname'");
              $delete=mysqli_query($mysqli,"DELETE FROM `daysession` WHERE `useremail` = '$useremail'");
          // echo "Session deleted";
          // header('location: doctor.php');

          echo '<script>alert("session deleted")</script>';
              
          ob_end_flush();
      } ?>


                  
                      <tr class="spacer"><td colspan="100"></td></tr>
                      <tr class="spacer"><td colspan="100"></td></tr>
                     

     <script>
        var koko = document.querySelector('.koko');
        var cancel = document.querySelector('.can');
        var hio = document.querySelector('.hio');

        cancel.addEventListener('click', function(){
            koko.classList.add('hide')
        })
    </script>
                      <?php
    }
?>   

                    </tbody>
                  </table>
                </div>
            </div>
              </div>
        </div>
      </div>
    
      <div class="downside">
        <div class="dailytable">
          <div class="containertable">
            <div id="table1" class="table-responsive custom-table-responsive">
              <table class="table custom-table">
                <thead>
                  <tr>  
      
                    <th scope="col" class="name">Name</th>
                    <th scope="col" class="date">Email</th>
                    <th scope="col" class="medical">Medical History</th>
                    <th scope="col" class="note">Notes</th>
                    <th scope="col" class="task">Tasks</th>
      
                  </tr>

                  <?php 
                    $hattly = "SELECT * FROM `users` WHERE `doctorname` = '$docname' AND `status`= 2";
                    $dot = mysqli_query($mysqli,$hattly);

                    foreach($dot as $patient){?>
                      <tr  scope="row">
                        <td id="name"><?php echo($patient['name']) ?></td>
                        <td class="timedate"><?php echo($patient['email']) ?></td>
                        <td>
                        <div class="box">
                          <a id="medical" class="button" href="sendmedical.php?useremail=<?php echo($patient['email'])?>&doctor=<?php echo($docname) ?>">Medical History</a>
                        </div>
                      </td>
                      <td>
                  
                       <div class="box">
                      <a id="notes" href="#popup2?useremail=<?php echo($patient['email'])?>" class="button">View Notes</a></div>
                      </div>
 <?php
                      // $_GET = $patient['email'];
                      $patemail = $patient['email'];

                      $hatmsg = "SELECT * FROM `notes` WHERE `email` = '$patemail'";
                      $doess = mysqli_query($mysqli,$hatmsg);
                      foreach($doess as $notemsg){
                      
                     
                        
                         ?>

                    
                  
                      
                    <div id="popup2" class="overlay"> 
                  
                          <div class="popup">
                            <h4><?php echo($patient['name']) ?></h4>
                            <a class="close" href="#">&times;</a>
                            <div class="content" id="chat">
                              <div class="container">
                                <img src="avatar7.png" alt="Avatar" style="width:100%;">
                                <p><?php echo($notemsg['note']);?> </p>
                              </div> 
                    
                              <div class="container">
                  
                  </div>
                        <?php } ?>
                    <td>
                      <div class="box">
                        <button class="tasksbtn" onclick="window.location.href='#popup3'">Send Tasks</button></div>

                        <div id="popup3" class="overlay">
                          <div class="popup">
                            <h2>Requested Task</h2>
                            <a class="close" href="#">&times;</a>
                            <div class="content">
                              <!-- <textarea name="sendtask" id="tasktext" cols="60" rows="8"></textarea> -->
                              <form method="post">
                              <input type="text" name="sendtaskform" id="tasktext"  cols="60" rows="8">
                              <input type="submit" name="sendtask" id="texttttt">
                              </form>


                              <?php 
                         if(isset($_POST['sendtask'])){

                             $sendtaskform = $_POST['sendtaskform'];
                             $patientname = $patient['name'];
                             $patientemail = $patient['email'];
                             $doctorname = $docname;
                             $sendtask = "INSERT INTO `tasks`(`doctorname`,`username`,`useremail`,`task`) VALUES ('$doctorname','$patientname','$patientemail','$sendtaskform')";
                             $emm = mysqli_query($mysqli,$sendtask);
                             echo '<script>alert("Task sent")</script>';
   }
?>
                            </div>
                          </div>
                        </div>
                    </td>
                    <td  ></td> 
            
                     <!-- <td><input type="submit" name="delete" value="Delete" class="material-symbols-outlined"></td> -->
                     <td><a href="<?php echo 'doctor.php?dell=' . $patient['email']; ?>" class="material-symbols-outlined">Delete</a></td>
                    </tr>
                        <?php
                    } ?>

                            <?php
                                               
               if(isset($_GET['dell'])){
                 $patientemail = $_GET['dell'];   
                   ?>  
          <div class="koko" >
              <div class="kokos">
                  <form  method="post">
                      <p>Are You Sure Want to Delete this patient ?</p>
                      <div class="btnn">
                          <input type="submit" name="deletee" value="Delete" class="hio">
                          <p class="can">Cancel</p>
                      </div>
                  </form>
              </div>
          </div>
          <?php
      
              
          if(isset($_POST['deletee'])){
              
              $delete=mysqli_query($mysqli,"DELETE FROM `users` WHERE `email` = '$patientemail'");

          // echo "Session deleted";
          // header('location: doctor.php');

          echo '<script>alert("session deleted")</script>';
              
          ob_end_flush();
      } ?>
                    
                    <!--
                         $dots = mysqli_query($mysqli,$hats);
                         $username = $patient['name'];
                         
                    if(isset($_POST['delete'])){
                    
                     header('location: doctor.php'); -->
                
              

                   
                    <!-- <td><span class="material-symbols-outlined" name="delete"> delete </span></td> -->

                    
        



                      <?php
                    }
                  ?>


                  
                  <tr  scope="row">
                  
                </tbody>
              </table>
            </div>
      
      
          </div>

          
<?php
          if (isset($_POST['btn_upload'])){
        $maxsize = 104857600; //5   mb  

        $name = $_FILES['file']['name'];
        $target_dir = "videos/";
        $target_file = $target_dir . $_FILES["file"]["name"];

        //VALID FILE EXTENSTION
           $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        //valid file extenstions
            $extensions_arr = array("mp4","mp3","ogg","avi","3gp","mov","mpeg","mp4v");

        //check extenstion
           if(in_array($videoFileType, $extensions_arr))
           {
        //check file size
            if (($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)){
               echo "File is too large. File must be less than 5MB.";
            } else {
            if (move_uploaded_file($_FILES['file']['tmp_name'],$target_file)) {
                    //insert record
                    $query = "INSERT INTO video (name,location) VALUES ('$name','$target_file' )";

                    mysqli_query($mysqli,$query);

                    echo "Uploaded successfully";
                }
            }

           }
           else {
                echo "Invalid extenstion";
            }
       }
       ?>
       </head>

    <form action="" method="post" enctype="multipart/form-data" style="padding-left:30%; color: red;">
       <input type='file' name='file'>
       <input type='submit' name="btn_upload" value="Upload Video">
    </form>   
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



    <script>
  
      var modal = document.getElementById('myModal');
      var modall = document.getElementById('myModall');
      var modalll = document.getElementById('myModalll');
    
    
      var btn = document.getElementById("myBtn");
      var btnn = document.getElementById("myBtnn");
      var btnnn = document.getElementById("myBtnnn");
    
      var span = document.getElementsByClassName("close")[0];
      var spann = document.getElementsByClassName("closee")[1];
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