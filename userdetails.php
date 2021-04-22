<?php
    session_start();
    if(!isset($_SESSION['username'])){
        $_SESSION['login']="Pls Login then you can access it";
        header('location:index.php');
    }
?>
<?php 
        $conn = mysqli_connect('localhost', 'root','','jntua');
        $select_query = "SELECT * FROM users";
        $result = mysqli_query($conn, $select_query);
        $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jntua..</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/image-upload.css">
    <link rel="stylesheet" href="styles/errors.css">
    <link rel="stylesheet" href="styles/loading.css">
    <link rel="stylesheet" href="styles/userdetails.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="Container">
        <?php   require "include/navbar.php"; ?>
        <?php require "include/loading.php"; ?>
        <div class="no-users">
            <div class="total">
                <p>Total no Users: <span><?php echo $count ; ?></span></p>
            </div>
            <div class="new-update-all">
                <a href="newupdateforuser.php?forall=1">Send Update</a>
            </div>
        </div>
        <div class="see-all-update-list">
            <span><a href="viewallupdates.php">See all Updates</a></span>
        </div>
        
        <div class="det-container">
            <div class="headers">
                <table border="1" cellspacing="0" align="center" class="timetable">
                    <tr>
                      <td align="center" height="50" width="50" class="main-header">S.No</td>
                       <td align="center" height="50" width="95" class="main-header">Profile</td>
                        <td align="center" height="50" width="250" class="main-header">Admission No</td>
                        <td align="center" height="50" width="250" class="main-header">Name</td>
                        <td align="center" height="50" width="200" class="main-header">Send Updates</td>
                    </tr>
                    
                    <?php
                        $no = 0;
                    foreach ($students as $student) : ?>
                    <tr>
                      <td align="center" height="60" width="50" class="add-no"><p><?php echo ++$no; ?></p></td>
                       <?php if($student['imageuploaded'] == 1): ?>
                            <td align="center" height="60" width="90" class="image-user"><img src="uploads/<?php echo $student['image_file']; ?>" alt=""></td>
                        <?php else: ?>
                            <td align="center" height="60" width="90" class="image-user"><img src="images/blank-user.webp" alt="" title="image not uploaded"></td>
                        <?php endif ?>
                        <td align="center" height="60" width="250" class="add-no"><p><?php echo $student['admission_no']; ?></p></td>
                        <td align="center" height="60" width="250" class="name"><p><?php echo $student['firstname']." ".$student['lastname']; ?></p></td>
                        <td align="center" height="60" width="250" class="note-update"><a href="newupdateforuser.php?student=<?php echo $student['id']; ?>" title="select this button to tell something to this student">Send message</a></td>
                    </tr>
                    <?php endforeach ?>
                    
                </table>
            </div>
        </div>
        
        
    </div>
    
    
    </body>
</html>

        