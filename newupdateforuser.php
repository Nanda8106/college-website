<?php
    session_start();
    if(!isset($_SESSION['username'])){
        $_SESSION['login']="Pls Login then you can access it";
        header('location:index.php');
    }
?>
<?php 
    error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
        $users = "";
        $errortext = array();
        $id = $_GET['student'];
        $reciever_name = "";
        $conn = mysqli_connect('localhost', 'root','','jntua');
        if(isset($_GET['student'])){
        
            $select_query = "SELECT * FROM users WHERE id='$id'";
            $result =  mysqli_query($conn, $select_query);
            $users = mysqli_fetch_array($result);
        }
        if(isset($_GET['forall'])){
            $reciever_name = "All";
        }
        else{
            $reciever_name = $users['admission_no'];
        }

        if(isset($_POST['send_text'])){
            $date = date("Y-m-d h.i.sa");
            $text = $_POST['text'];
            $name = mysqli_real_escape_string($conn, $_POST['teacher']);
            if(empty($text)){
                $emptytext = "**Text is empty";
                array_push($errortext, $emptytext);
            }
             if(empty($name)){
                $emptyname = "**Name is empty";
                array_push($errortext, $emptyname);
            }
            if(count($errortext) == 0){
            $insert_text_query = "INSERT INTO messages (message,sender_name,reciever_name,date)VALUES('$text','$name','$reciever_name','$date')";
            if(mysqli_query($conn, $insert_text_query)){
                header('location: userdetails.php');
                
            }
            }
        }
        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jntua..</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/image-upload.css">
    <link rel="stylesheet" href="styles/errors.css">
    <link rel="stylesheet" href="styles/userdetails.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="Container">
        <?php   require "include/navbar.php"; ?>

        
        <div class="set-updates">
           <!--errors-->
           <?php  if (count($errortext) > 0) : ?>
                <div class="error">
                    <?php foreach ($errortext as $error) : ?>
                    <p><?php echo $error ?></p>
                    <?php endforeach ?>
                </div>
            <?php  endif ?>
          <!--end of errors-->
           
            <div class="his-details">
               <?php if(!isset($_GET['forall'])):?>
                    
                    <span>
                        <h3>Sending To:</h3><p><?php echo $users['firstname']." ".$users['lastname']."(".$users['admission_no'].")" ;?></p>
                    </span>
                <?php endif ?>
                
            </div>
            <div class="add-text">
                <form action="" method="post">
                   <div>
                        <label for="text" title="name of the lecturer">Name: </label>
                        <input type="text" name="teacher" placeholder="Enter your name">
                    </div>
                    <textarea name="text" id="" cols="20" rows="10" placeholder="Enter text here what you want to send inforamtion for this student"></textarea><br>
                    <div class="user-update-confirmation">
                        <button type="submit" name="send_text" id="send_txt">Send</button>
                        <a href="userdetails.php" style="text-decoration:none;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
