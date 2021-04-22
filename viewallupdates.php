<?php
    session_start();
    if(!isset($_SESSION['username'])){
        $_SESSION['login']="Pls Login then you can access it";
        header('location:index.php');
    }
?>
<?php
   $conn = mysqli_connect('localhost','root','','jntua');
    $select_query = "SELECT * FROM messages";
    $result = mysqli_query($conn,$select_query);
    $no_of_updates = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jntua..</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/image-upload.css">
    <link rel="stylesheet" href="styles/users.css">
    <link rel="stylesheet" href="styles/seeallupdates.css">
    <link rel="stylesheet" href="styles/loading.css">
    <link rel="stylesheet" href="styles/errors.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="Container">
        <?php   require "include/navbar.php"; ?>
        <?php require "include/loading.php"; ?>
    </div>
    <div class="update-container">
            <table border="" cellspacing="0" align="center" class="all-messages">
                        <!--<caption>Timetable</caption>-->
                        <tr class="heading-messages">
                            <td align="center" height="40" width="50">
                                <b>S.no</b>
                            </td>
                            <td align="center" height="40" width="100">
                                <b>Date</b>
                            </td>
                            <td align="center" height="40" width="100">
                                <b>Time</b>
                            </td>
                            <td align="center" height="40" width="300">
                                <b>Message</b>
                            </td>
                            <td align="center" height="40" width="100">
                                <b>From</b>
                            </td>
                            <td align="center" height="40" width="100">
                                <b>To</b>
                            </td>
                            <td align="center" height="40" width="100">
                                <b>Delete</b>
                            </td>
                            
                        </tr>

                        <tr class="list-all-updates">
                          <?php
                            $s_no =0;
                           foreach($no_of_updates as $no_of_update):
                            ?>
                            <td align="center" height="50" title="Serial No">
                                <p><?php echo ++$s_no; ?></p>
                            </td>
                            <td align="center" height="50" title="In which date message sent">
                                <p><?php echo $no_of_update['date'];?></p>
                            </td>
                            <td align="center" height="50" title="At which time message sent">
                                <p><?php echo $no_of_update['time'];?></p>
                            </td>
                            <td align="center" height="50" title="Message">
                               <div class="message-box-overflow">
                                   <p><?php echo $no_of_update['message'];?></p>
                                    
                                </div>
                            </td>
                            <td align="center" height="50" title="Who send this message">
                                <p><?php echo $no_of_update['sender_name'];?></p>
                            </td>
                            <td align="center" height="50" title="For which student">
                                <p><?php echo $no_of_update['reciever_name'];?></p>
                            </td>
                            <td align="center" height="50" title="Delete message">
                                <a href="">Delete</a>
                            </td>
                            
                            
                        </tr>
                        
                        <?php endforeach ?>
            </table>
        </div>
        <div class="move-back" style="text-align:center;">
            <a href="userdetails.php" style="text-decoration:none;">Go back to details</a>
        </div>
        
</body>
</html>
