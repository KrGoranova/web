<?php
    include("./db/config.php");
    if(isset($_GET["id"])){
    
        $id=$_GET["id"]; 
 
        $query=mysqli_query($con,"SELECT subs FROM db WHERE id='$id'") or die('Error, query failed');
        $result=mysqli_fetch_assoc($query);
        $subs_name=$result['subs'];

        $query=mysqli_query($con,"SELECT subs_location FROM db WHERE id='$id'") or die('Error, query failed');
        $result=mysqli_fetch_assoc($query);
        $subs_location=$result['subs_location'];
      
        if(!empty($subs_name) && file_exists($subs_location)){
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$subs_name");
            header("Content-Type: application/zip");
            header("Content-Transfer-Emcoding: binary");

            readfile($subs_location);
            exit;
        }
            else {
                echo "This file does not exist";
            }
            echo $subs_name;
        }
        
?>
