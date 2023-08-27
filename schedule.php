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


<body>
    
</body>
</html>
<?php include('nav.php') ?>

      <h3>Your Schedule</h3>
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
           $ev=$_GET['eventhost'];
           $en = $_GET['eventname'];

       if(isset($_POST["book"])) {
       $hat = "SELECT * from `events` WHERE `name` = '$en' ";
       $dots = mysqli_query($mysqli,$hat); 
     
      foreach($dots as $event){?> 
   


        <td><?php echo($event['date']) ?><br> 11/2/2023 </td>
        <td><?php echo($event['time']) ?></td>
        <td><?php echo($event['type']) ?></td>
      </tr>

     <?php
     }
 }?>
    </tbody>
  </table>
    </div>


















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