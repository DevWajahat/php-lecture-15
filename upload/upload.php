<?php
require_once 'conn.php';

if(isset($_POST['upload'])){
    $image = $_FILES['image']['name'];
    $file_temp = $_FILES['image']['tmp_name'];
    $date_upload=date('y/m/d');
    $allow_ext = array('jpeg','jpg', 'gif', 'png');
    $exp = explode (".", $image);
    $ext = end($exp);
    $path = "upload/".$image;
    if(in_array($ext, $allow_ext)){
        if(move_uploaded_file($file_temp,$path)){
            mysqli_query($con, "INSERT INTO `image` VALUES('','$image','$date_upload')") or die(mysqli_error());
            echo "<center><h5 class='text-success'> Image uploaded! </h5>";

    }
    else{
        echo "<center><h5 class='text-danger'> Image only is allowed!</h5> </center>";

    }
    
}
}
?>