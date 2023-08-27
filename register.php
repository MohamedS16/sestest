<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/reg.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <title>Registration</title>
</head>

<body>
    <?php include('nav.php');
    include('database.php');
    $moberror=[];
    $nerror=[];
    $passerror=[];
    $emerror=[];

                    
    $nerror = $emerror = $moberror = $passerror = "";


    $sel = "SELECT `email`,`phone` from `users`";
    $do = mysqli_query($mysqli, $sel);
 

    

   if (isset($_POST['submit'])) {

       $name = htmlspecialchars($_POST['name']);
       $email = htmlspecialchars($_POST['email']);
       $pass = htmlspecialchars($_POST['password']);
       $confpass = htmlspecialchars($_POST['confirmpassword']);
       $age = htmlspecialchars($_POST['age']);
       $gender = htmlspecialchars($_POST['gender']);
       $doctor = htmlspecialchars($_POST['doctorname']);
       $phone = htmlspecialchars($_POST['phoneno']);


       foreach($do as $use) {
            if($email == $use['email']) {
               $emerror = "Email Already in Use";
           };

           if($phone == $use['phone']) {
               $moberror = "Mobile Number Already in Use";
           };
        }
       
//validation
       if ($pass !== $confpass) {
           $passerror = "Passwords not matching";
       } 
       else {};




       if ($nerror == "" && $emerror == "" && $moberror == "" && $passerror == "") {

           $quer = "INSERT INTO 
           `users` (`name` , `email`, `password`, `age`, `gender`, `doctorname`, `phone`, `status`,`role`) VALUES 
               ('$name','$email','$pass','$age','$gender','$doctor','$phone','1', 'user')";
            $does = mysqli_query($mysqli, $quer);
            echo '<script>alert("your account is pending for approval")</script>';
            
       if ($does) {
        ?>
                 <div class="success">
                    <div class="contt">
    
                        <a href="login.php"> Login </a>
                    </div>
                </div> 
     
     
        <?php } 
        else {
                echo '<div class="success"><div class="contt"> <p> Sorry, Erorr Creating Your Account, Please Try Again Later </p> <a href="register.php"> Done </a></div> </div>';
           }
         }
       } 


   ?>


    <div class="allcontant">
        <div class="container1">
            <form  method="POST">
                <div class="contai">
                    <h1>Sign Up</h1>
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="flabel" for="first">Full Name</label>
                                    <input type="text" name="name" required value="<?php if(empty($name)){}else{echo $name;}; ?>" required="true" class="form-control" id="first" placeholder=" Full Name">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" required name="email" value="<?php if(empty($email)){}else{echo $email;}; ?>" class="form-control" id="inputEmail4" placeholder="Email">
                                    <?php  if($emerror == "Email Already in Use"){echo '<p class="error">'.$emerror.'</p>';}else{}; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="flabel" for="pass">Password</label>
                                    <input type="password" required minlength="5" name="password" class="form-control" id="pass" placeholder="Password" value="<?php if(empty($pass)){}else{echo $pass;}; ?>">
                                    <?php  if($passerror == "Passwords not matching"){echo '<p class="error">'.$passerror.'</p>';}else{}; ?>
                                    <i class="fa-regular far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>

                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="flabel" for="conpass" >Confirm Password</label>
                                    <input type="password" required minlength="5" name="confirmpassword" class="form-control" id="conpass" placeholder="Confirm Password" value="<?php if(empty($confpass)){}else{echo $confpass;}; ?>">
                                    <i class="fa-regular far fa-eye" id="togglePassword1" style="margin-left: -30px; cursor: pointer;"></i>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="text" name="age" value="<?php if(empty($age)){}else{echo $age;}; ?>" class="form-control" id="age" placeholder="Enter your Age">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="" for="gender">Gender</label>
                                    <select class="custom-select" id="gender" name="gender">
                                        <option selected>Choose...</option>
                                        <option name="gender" value="male" required <?php if(empty($gender)){}else if($gender == 'male'){echo 'checked';}; ?>>Male</option>
                                        <option  name="gender" value="female" required <?php if(empty($gender)){}else if($gender == 'female'){echo 'checked';}; ?>>female</option> 
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="" for="doctorname">Doctor name</label>
                                    <select class="custom-select" id="doctorname" name="doctorname" value="">
                                        <option selected>Choose your Doctor</option>
                                        <option name="doctorname" value="Hussien aly" required <?php if(empty($doctor)){}else if($doctor == 'Hussien aly'){echo 'checked';}; ?>>Hussien aly</option> 
                                        <option  name="doctorname" value="Mariam amr" required <?php if(empty($doctor)){}else if($doctor == 'Mariam amr'){echo 'checked';}; ?>>Mariam amr</option> 
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="phoneno">Phone Number</label>
                                    <input type="number" required class="form-control" id="phoneno" name="phoneno" placeholder="Enter your Number" value="<?php if(empty($phone)){}else{echo $phone;}; ?>">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn" name="submit" value="Register">Sign Up</button>
                        <p>Already have an account ?<a href="login.html">Sign In</a> </p>
                    </form>






























                </div>
        </div>
        <button id="backtotop"><span class="material-symbols-outlined"> arrow_upward </span></button>
        <?php include('footer.php') ?>
    </div>












    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/main.js"></script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const togglePassword1 = document.querySelector('#togglePassword1');
        const password = document.querySelector('#pass');
        const conpassword = document.querySelector('#conpass');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        })

        togglePassword1.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = conpassword.getAttribute('type') === 'password' ? 'text' : 'password';
            conpassword.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        })
    </script>
</body>

</html>