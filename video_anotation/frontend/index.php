<?php
include("../backend/db/config.php");
?>
<DOCTYPE html>
    
<html>
    <head>
        <title> Video Annotation</title>
        <link rel="stylesheet" href="./style.css">
    
 </head>
    <body>
        <a id="upload_vedo" href="../backend/upload_video.php" class="href-btn">
             Upload video
        </a>
        <?php
        $fetchVideos = mysqli_query($con, "SELECT * FROM db ORDER BY id ASC");
        while($row = mysqli_fetch_assoc($fetchVideos)){
        $location = $row['video_location'];
        $name = $row['video'];
        $id=$row['id'];
        $subs_name=$row['subs'];
        $subs_location=$row['subs_location'];
        echo 
        "<div>
            <h1>".$name."</h1>
            <video  src='../videos/".$location."' controls >
                <track src='../subtitles/".$subs_name."' kind=\"subtitles\" srclang=\"en\" label=\"English\" default> 
            </video>
            <a href=\"../backend/upload_subs.php?id=".$id."\" class=\"href-btn\">
                Upload subtitles
            </a>

            <a href=\"../backend/download_subs.php?id=".$id."\" class=\"href-btn\">
            Download subtitles
        </a>
        </div>";
        }
        ?>
    </body>
   <!--<script src="./script.js"></script>-->

</html>
