
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include("database.php");

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
<body>
    <form action="" method="post" enctype="multipart/form-data" style="padding-left:30%; color: red;">
       <input type='file' name='file'>
       <input type='submit' name="btn_upload" value="Upload Video">
    </form>   


</body>
</html>