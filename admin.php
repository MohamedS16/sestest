<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Caveat&family=Dancing+Script&display=swap" rel="stylesheet">

    <title>Admin</title>
   
</head>
<body>
<?php include('nav.php');
      include('database.php');
   ?>
    <div class="adminimg">
        <img src="admin photo 2.jpg">
    </div>
<div class="admintext">
    <h2 > Our Responsibilities</h2>
    
</div>

<div class="adminresp">
<div class="box1">
<div class="useradm">
    <button id="admbtn">User information</button>
    <span id="per" class="material-symbols-outlined">person_pin_circle</span>
</div>
    <!-- The Modal -->
         
     <div id="admmodal" class="modaladm">
     
             <!-- Modal content -->
       <div class="modal-content">
       <div class="modal-header">
    
     <h3>Our Users</h3>
     <span class="close">×</span>
     </div>
     <div class="modal-body">
        <table class="table">
   
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Gender </th>
                <th scope="col"> Phone Number </th>
                <th scope="col">Doctor </th>
              </tr>
            </thead>
           
            <?php
           $hat = "SELECT * from `users` WHERE `status`=2 AND `role`='user' ";
           $dots = mysqli_query($mysqli,$hat); 
           
           
           foreach($dots as $users){?>



 <tbody>   
              <tr>
                <th scope="row"><?php echo($users['name']) ?></th>
                <td><?php echo($users['email']) ?></td>
                <td><?php echo($users['age']) ?></td>
                <td><?php echo($users['gender']) ?></td>
                <td><?php echo($users['phone']) ?></td>
                <td><?php echo($users['doctorname']) ?></td>
                
              </tr>
             
            </tbody>
            <?php
                    }
                  ?>  
          </table>
     </div>
    </div>
    </div>
     </div> </div>
   
    
     
    
     

<div class="box2">
    <div class="docadm">
    <button id="admbtnn">Doctor  information</button>
    <spann id="addoc"class="material-symbols-outlined">medication_liquid</spann>
</div>
    <!-- The Modal -->
         
     <div id="admmodall" class="modaladmm">
     
             <!-- Modal content -->
       <div class="modal-content">
       <div class="modal-header">
    
     <h3>Our Doctors</h3>
     <span class="close">×</span>
     </div>
     <div class="modal-body">
        <table class="table">
            
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col"> Phone Number</th>
                    <th scope="col"> Number of patients </th>
                    

                  </tr>
                </thead>


                
                <?php
           $hat = "SELECT * from `users` WHERE `status`=2 AND `role`='doctor' ";
           $dots = mysqli_query($mysqli,$hat); 
           
           
           foreach($dots as $users){?>
         <tbody>
                  <tr>
                  <th scope="row"><?php echo($users['name']) ?></th>
                <td><?php echo($users['email']) ?></td>
                <td><?php echo($users['age']) ?></td>
                <td><?php echo($users['phone']) ?></td>
                
                <?php
             
                
                //    $doctorrname = $users['doctorname'];
                 $namee=$users['doctorname'];
                 $name=$users['name'];

                 
                    $sql = "SELECT COUNT(id) FROM `users` WHERE '$namee' = '$name' ";
                    $result = mysqli_query($mysqli,$sql);
                    $count = mysqli_num_rows($result);
                    echo $count;
                    foreach($result as $users){?>
                  
                             
                <td><?php echo($count)?></td> <?php
                                               } ?>
                              <tr>
                </tbody>
                <?php
                    }
                  ?> 
              </table>
     </div>
     </div>
    </div>
    </div>

<div class="boxtable">
    <table class="table custom-table">
        <thead>
          <tr>  
            
          

            <th scope="col" class="Name">Name</th>
            <th scope="col" class="host">Host</th>
            <th scope="col" class="date">Date</th>
            <th scope="col" class="date">time</th>
            <th scope="col" class="Location">Location</th>
            <th scope="col" class="price">Price</th>
            
            <th scope="col" class="editevent">Edit</th>
            <th scope="col" class="deleteevent">Delete</th>


          </tr>
        
        </thead>
        <tbody>
        <!-- <tr scope="row"> -->
<?php
           $hats = "SELECT * from `events`";
           $dotss = mysqli_query($mysqli,$hats); 
           
           
       foreach($dotss as $events){?>
            <td id="name"><?php echo($events['name']) ?></td>
            <td><?php echo($events['host']) ?></td>
            <td><?php echo($events['date']) ?></td>
            <td><?php echo($events['time']) ?></td>
            <td><?php echo($events['location']) ?></td>
            <td><?php echo($events['price']) ?></td>

           
            <form method="post">
            <td><a href="EditEvent.php?eventname=<?php echo($events['name'])?>">Edit Event</a></td>
            <td><a href="<?php echo 'admin.php?del=' . $events['name'] ?>" class="material-symbols-outlined">Delete</a></td>
            </form>
              
            <?php } ?>
             
              <?php
                     
if(isset($_GET['del'])){
    $eventname = $_GET['del'];   

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
                
                $delete=mysqli_query($mysqli,"DELETE FROM`events`WHERE`name`='$eventname'");

                ob_end_flush();
            
                header('location:admin.php');
        } ?>


          <!-- </tr> -->

     
          <tr class="spacer"><td colspan="100"></td></tr>
          <tr class="spacer"><td colspan="100"></td></tr>
 

          
        
          
          
        </tbody>
      </table>

</div>
<a href="Addevent.php" class="btn">Add</a>


     






<script>
        var koko = document.querySelector('.koko');
        var cancel = document.querySelector('.can');
        var hio = document.querySelector('.hio');

        cancel.addEventListener('click', function(){
            koko.classList.add('hide')
        })
    </script>
          <?php } ?>


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
    // Get the modal and the button that opens it
var admmodal = document.getElementById("admmodal");

var admbtn = document.getElementById("admbtn");

var admmodall = document.getElementById("admmodall");

var admbtnn = document.getElementById("admbtnn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

var spann = document.getElementsByClassName("close")[1];
// When the user clicks the button, open the modal
admbtn.onclick = function() {
  admmodal.style.display = "block";
}

admbtnn.onclick = function() {
  admmodall.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  admmodal.style.display = "none";
}

spann.onclick = function() {
  admmodall.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == admmodal) {
    admmodal.style.display = "none";
  }
}

window.onclick = function(event) {
  if (event.target == admmodall) {
    admmodall.style.display = "none";
  }
}

  
  
    
    </script>
    </body>
</html>