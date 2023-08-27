<?php 
session_start();
    ?>
<header>
    <div class="main" >
        <nav id="navbar" class="bgcolor" >
            <div class="logo">
            <a href="index.php" class="log">Thera</a>
            <a href="index.php" class="logg">piva</a>
            </div>
            <ul>
                
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">SERVICE</a></li>
                <li><a href="#">DOCTORS</a></li>
                <?php   
                    if(!empty($_SESSION['login'])){
                    if($_SESSION['login'] == "True"){
                        
                        echo '<a href="profile.php?username='.$_SESSION['email'].'" class="logout"><li class="navli"> Account </li></a>';
                        echo '<a href="logout.php" class="logout"><li class="navli"> Logout </li></a>';
                    } }
                    else{
                        echo '<a href="login.php"><li class="navli"> Login </li></a>
                            <a href="register.php"><li class="navli"> Register </li></a>';
                    }
                    ?>
    
            </ul>
        </nav>

    </div>
</header>