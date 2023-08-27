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
   ?>
   
    <div class="container1">
        <div class="container2">
            <h1>Add Event</h1>
            <form method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="inputname4">Event's Name</label>
                        <input type="text" name="name" value="<?php if(empty($name)){}else{echo $name;}; ?>" class="form-control" id="inputname4" placeholder="Name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="Host">Host's Name</label>
                        <input type="text" name="host" value="<?php if(empty($host)){}else{echo $host;}; ?>" class="form-control" id="Host" placeholder="Host Name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="datetime">Date & Time</label>
                        <input type="date" class="form-control" name="date" value="<?php if(empty($date)){}else{echo $date;}; ?>" id="datetime" placeholder="Date & Time">
                        <input type="time" class="form-control" name="time" value="<?php if(empty($time)){}else{echo $time;}; ?>" id="datetime" placeholder="Date & Time">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="Location">Location</label>
                        <input type="text" class="form-control" name="location" value="<?php if(empty($location)){}else{echo $location;}; ?>" id="Location" placeholder="Location">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" value="<?php if(empty($price)){}else{echo $price;}; ?>" class="form-control" id="price" placeholder="Price">
                    </div>
                </div>
            </div>
            <button type="submit" name="sendevent" class="btn">Send</button>
          
                </form>
        </div>
</div>

<?php
if(isset($_POST['sendevent'])){
 

 $name = $_POST['name'];
 $host = $_POST['host'];
 $date = $_POST['date'];
 $time = $_POST['time'];

 $location = $_POST['location'];
 $price = $_POST['price'];

 

 $sendd = "INSERT INTO `events`( `name`,`host`, `date`,`time`, `location`, `price`) VALUES ('$name','$host','$date','$time','$location','$price')";
 $emm = mysqli_query($mysqli,$sendd);

header('location:admin.php');

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
