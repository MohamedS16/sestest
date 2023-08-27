<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddEvent</title>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="addevent.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
  
</head>
<body>
<?php include('nav.php');
      include('database.php');

      $ma = $_GET['eventname'];

      $stm = "SELECT * FROM events WHERE name = '$ma' ";
      $events = mysqli_query($mysqli , $stm);
      $events =  mysqli_fetch_assoc($events); {
    ?>
        

    <div class="container1">
        <div class="container2">
            <h1>Edit Event</h1>
            <form method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="inputname4">Event's Name</label>
                        <input type="text" name="name" value="<?php echo($events['name']) ?>" class="form-control" id="inputname4" placeholder="Name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="Host">Host's Name</label>
                        <input type="text" name="host" value="<?php echo($events['host']) ?> "class="form-control" id="Host" placeholder="Host Name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="datetime">Date & Time</label>
                        <input type="date" class="form-control" name="date" value="<?php echo($events['date']) ?>" id="datetime" placeholder="Date & Time">
                        <input type="time" class="form-control" name="time" value="<?php echo($events['time']) ?>" id="datetime" placeholder="Date & Time">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="Location">Location</label>
                        <input type="text" class="form-control" name="location" value="<?php echo($events['location']) ?>" id="Location" placeholder="Location">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" value="<?php echo($events['price']) ?>" class="form-control" id="price" placeholder="Price">
                    </div>
                </div>
            </div>
            <?php
      }?>
            <button type="submit" name="editevents" class="btn">Send</button>
          
                </form>
        </div>
</div> 

<?php
if(isset($_POST['editevents'])){


 $ma = $_GET['eventname'];
 $name = $_POST['name'];
 $host = $_POST['host'];
 $date = $_POST['date'];
 $time = $_POST['time'];
 $location = $_POST['location'];
 $price = $_POST['price'];

 

 $sendd = "UPDATE `events` SET `name`='$name',`host`='$host', `date`='$date',`time`='$time', `location`='$location' , `price`='$price' WHERE name = '$ma'";
 $emm = mysqli_query($mysqli,$sendd);
echo '<script>alert("event has been edited")</script>';

}





include('footer.php');
?>
    <button id="backtotop"><span class="material-symbols-outlined">
    arrow_upward
    </span></button>
</div> 
    
    
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
