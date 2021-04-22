<?php 
        error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
        $username = "";
        if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];
        }
        $conn = mysqli_connect('localhost','root','','jntua');
        $select_query = "SELECT * FROM users WHERE username='$username'";
        $details = mysqli_query($conn, $select_query);
        $fetch_details = mysqli_fetch_array($details);
        $image_name= $fetch_details['image_file'];
        $imageupload = 0;
        $path= "uploads";

        if(isset($_POST['remove_img'])){
            unlink($path . "/" . $image_name);
            $imageuploaded_query = "UPDATE users SET image_file='NULL', imageuploaded='$imageupload' WHERE username='$username'";
            mysqli_query($conn, $imageuploaded_query);
        }

?>