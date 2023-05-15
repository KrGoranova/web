
<?php
include("./db/config.php");
 
if(isset($_POST['but_upload'])){
   $maxsize = 26214400; // 25MB
   if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
       $name = $_FILES['file']['name'];
       $target_dir = "../videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       if( in_array($extension,$extensions_arr) ){
 
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
             $_SESSION['message'] = "File too large. File must be less than 25MB.";
          }else{
             if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
               $query = "INSERT INTO db(video,video_location) VALUES('".$name."','".$target_file."')";

               mysqli_query($con,$query);
               $_SESSION['message'] = "Upload successfully.";
             }
          }

       }else{
          $_SESSION['message'] = "Invalid file extension.";
       }
   }else{
       $_SESSION['message'] = "Please select a file.";
   }
   header('location: upload_video.php');
   exit;
} 
?>
<!doctype html> 
<html> 
  <head>
     <title>Upload video </title>
  </head>
  <body>

    <?php 
    if(isset($_SESSION['message'])){
       echo $_SESSION['message'];
       unset($_SESSION['message']);
    }
    ?>
    <form method="post" action="" enctype='multipart/form-data'>
      <input type='file' name='file' />
      <input type='submit' value='Upload video' name='but_upload'>
    </form>

  </body>
</html>