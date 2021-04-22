<?php 
                    error_reporting (E_ALL ^ E_NOTICE);
                    $username = "";
                    $errorsimg = array();
                    $imageuploaded = 0;
                    if(isset($_SESSION['username'])){
                        $username = $_SESSION['username'];
                    }
                
                    $select_query = "SELECT * FROM users WHERE username='$username'";
                    $details = mysqli_query($conn, $select_query);
                    $fetch_details = mysqli_fetch_array($details);
                    $image_name= $fetch_details['image_file'];
                    $path= "uploads";

                    $conn = mysqli_connect('localhost','root','','jntua');
                    if(isset($_POST['img_upload'])){
                        /*to delete old image*/
                        unlink($path . "/" . $image_name);
                        /*End of delete old image*/
                            
                        $filename = $_FILES['image']['name'];
                        if(empty($filename)){
                            $imageerror = "**Image is empty, select image";
                            array_push($errorsimg, $imageerror);
                        }
                        $temname = $_FILES['image']['tmp_name'];
                        $folder = "uploads/".$filename;

                        if(count($errorsimg) == 0){
                            if(move_uploaded_file($temname, $folder)){
                                echo '<script>alert("Successfully uploaded")</script>';
                                ++$imageuploaded;
                            }
                            else{
                                echo '<script>alert("not uploaded")</script>';
                            }



                            $img_insert_query = "UPDATE users SET image_file='$filename', imageuploaded='$imageuploaded' WHERE username = '$username' ";

                            mysqli_query($conn, $img_insert_query);
                            $_SESSION['success'] = "Successfully updated profile";

                            header('location: index.php');

                            }
                    }
                    
                    
?>