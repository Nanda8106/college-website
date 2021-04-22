<?php include('deleteimageserver.php'); ?>
<?php include('imageserver.php'); ?>
<?php include('userserver.php'); ?>
<?php 
        $username = "";
        if(isset($_SESSION['username'])){
            $username= $_SESSION['username'];
        }
        $fetch_query = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $fetch_query);
        $row = mysqli_fetch_array($result);
        $imageuploaded = $row['imageuploaded'];
        

?>
<?php
    $conn = mysqli_connect('localhost','root','','jntua');
    $select_updation_query = "SELECT * FROM messages";
    $any_updates = mysqli_query($conn, $select_updation_query);
    $show_updates = mysqli_fetch_all($any_updates, MYSQLI_ASSOC);
    
?>

<div class="nav-bar">
    <div class="navbar-center">
        <span class="logo"><a href="index.php">
                <img src="images/jntu-logo1.png" alt="">
            </a>
        </span>

        <div class="nav-tools select-tool1">
            <div class="nav-text"><i class="fa fa-book"></i>Academic Section</div>
            <div class="information1">
                <div class="picture">
                    <img src="images/academic-section.jpg" alt="">
                </div>
                <div class="details">
                    <span>
                        <p class="header">Academic Section</p>
                    </span>
                    <span><i class="fa fa-arrow-right"></i>Regular Exams</span>
                    <span><i class="fa fa-arrow-right"></i>Supply Exams</span>
                    <span><i class="fa fa-arrow-right"></i>College Fee</span>
                    <span><i class="fa fa-arrow-right"></i>New Updates</span>
                </div>
            </div>
        </div>

        <div class="nav-tools select-tool2">
            <div class="nav-text"><i class="fa fa-bed"></i>Hostel</div>
            <div class="information2">
                <div class="picture">
                    <img src="images/hostel-image.jpg" alt="">
                </div>
                <div class="details">
                    <span>
                        <p class="header">Hostel</p>
                    </span>
                    <span><i class="fa fa-arrow-right"></i>Lepakhi</span>
                    <span><i class="fa fa-arrow-right"></i>Ajantha</span>
                    <span><i class="fa fa-arrow-right"></i>Ellora</span>
                    <span><i class="fa fa-arrow-right"></i>Amaravathi</span>
                    <span><i class="fa fa-arrow-right"></i>Shilpa</span>
                </div>
            </div>
        </div>
        <!---------Cse Department----------->
        <div class="nav-tools select-tool3">
            <div class="nav-text"><i class="fa fa-home"></i>Cse Department</div>
            <div class="information3">
                <div class="picture">
                    <img src="images/cse-image.jpg" alt="">
                </div>
                <div class="details">
                    <span>
                        <p class="header">Cse Department</p>
                    </span>
                    <span><a href="schedule.php"><i class="fa fa-arrow-right"></i>Class Shedule</a></span>
                    <span><a href="attendance.php"><i class="fa fa-arrow-right"></i>Attandance</a></span>
                    <span><a href="table.php"><i class="fa fa-arrow-right"></i>Lecturers</a></span>
                    <span><a href="userdetails.php"><i class="fa fa-arrow-right"></i>Student Details</a></span>

                </div>
            </div>
        </div>


        <!---------New Updates---------->
        <div class="nav-tools select-tool4">

            <div class="nav-text">
                <i class="fa fa-pencil-square-o" <?php if(($show_updates) and (isset($_SESSION['username']))): ?> style="color:red;" title="new update" <?php endif ?>></i>New Updates</div>
            <div class="information4">
                <div class="picture">
                    <img src="images/new-update.jpg" alt="">
                </div>
                <div class="details">
                   <!--Main loop-->
                    <?php if(($show_updates) and (isset($_SESSION['username']))): ?>
                        <span>
                            <p class="header1">New Update</p>
                        </span>
                            <!--<?php if($row['newtext']): ?>
                                <span><i class="fa fa-book"></i>You: <b><?php echo $row['newtext']?></b><?php echo "<small> - (".$row['updatedate'].")</small>"; ?></span>
                            <?php endif ?>-->
                        <?php foreach($show_updates as $show_update) :
                             if(strlen($show_update['reciever_name']) == 3): ?>
                                <span><i class="fa fa-comments"></i>All: <?php echo "<b>".$show_update['message']."</b> <small>".$show_update['sender_name']."-on(".$show_update['date']." at ".$show_update['time'].")</small>"; ?></span>
                            <?php else: ?>
                               <?php if($row['admission_no']== $show_update['reciever_name']): ?>
                                <span><i class="fa fa-comments"></i>You: <?php echo "<b>".$show_update['message']."</b> <small>".$show_update['sender_name']."-on(".$show_update['date']." at ".$show_update['time'].")</small>"; ?></span>
                                <?php endif ?>
                            <?php endif;
                        endforeach ?>
                     <!--Else part of main loop-->   
                    <?php else: ?>
                    <span>
                        <p class="header1">No Updates</p>
                    </span>
                    <?php endif ?>
                    <!--End of main loop-->
                </div>
            </div>
        </div>

        <span class="nav-tools"><i class="fa fa-phone"></i>Contact Us</span>

        <span class="search-center">
            <input type="text" placeholder="Search">
            <div class="search-btn">
                <i class="fa fa-search"></i>
            </div>
        </span>

        <div class="nav-tools select-tool5">
            <div class="nav-text1 profile">
                <?php  if (isset($_SESSION['username']) and($imageuploaded  == 1)) : ?>
                <img src="uploads/<?php echo $row['image_file']; ?>" alt="">
                <?php else: ?>
                <img src="images/blank-user.webp" alt="">
                <?php endif ?>
            </div>
            <div class="information5">
                <div class="picture">
                    <?php  if (isset($_SESSION['username']) and($imageuploaded  == 1)) : ?>

                    <img src="uploads/<?php echo $row['image_file']; ?>" alt="">

                    <?php else: ?>
                    <img src="images/blank-user.webp" alt="">
                    <?php endif ?>
                    <div class="uplaoad-reload-img">
                        <div class="remove-img">
                            <span id="goto_deletecard"><i class="fa fa-trash-o" title="Rmove image"></i>Delete image</span>
                        </div>
                        <div class="upload">
                            <?php  if (isset($_SESSION['username'])) : ?>
                            <span id="goto_uploadcard"><i class="fa fa-camera" title="Update image"></i></span>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <div class="details">
                    <?php  if (isset($_SESSION['username'])) : ?>
                    <span>
                        <p class="header"><?php echo $_SESSION['username']; ?></p>
                    </span>
                    <?php else : ?>
                    <span>
                        <p class="header">User</p>
                        <?php endif ?>
                    </span>
                    <span><i class="fa fa-arrow-right"></i>Settings</span>
                    <span><i class="fa fa-arrow-right"></i>Your actions</span>
                    <?php  if (isset($_SESSION['username'])) : ?>
                    <span><a href="index.php?logout='1'"><i class="fa fa-user-times"></i>Logout</a></span>
                    <?php else: ?>
                    <span><a href="login.php"><i class="fa fa-user-times"></i>Login</a></span>
                    <?php endif ?>
                </div>
            </div>
        </div>




        <!--dgt-->
        <div class="menubar2">
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fa fa-bars" id="btn"></i>
                <i class="fa fa-times" id="cancel"></i>
            </label>

            <span class="sidebar">
                <div class="Nav-tool Select-tool1">
                    <div><i class="fa fa-book"></i>Academic Section</div>
                    <div class="Information1">
                        <div class="Picture">
                            <img src="images/academic-section.jpg" alt="">
                        </div>
                        <div class="Details">
                            <span>
                                <p class="Header">Academic Section</p>
                            </span>
                            <span><i class="fa fa-arrow-right"></i>Regular Exams</span>
                            <span><i class="fa fa-arrow-right"></i>Supply Exams</span>
                            <span><i class="fa fa-arrow-right"></i>College Fee</span>
                            <span><i class="fa fa-arrow-right"></i>New Updates</span>

                        </div>
                    </div>
                </div>

                <div class="Nav-tool Select-tool2">
                    <div><i class="fa fa-bed"></i>Hostel</div>
                    <div class="Information2">
                        <div class="Picture">
                            <img src="images/hostel-image.jpg" alt="">
                        </div>
                        <div class="Details">
                            <span>
                                <p class="Header">Hostel</p>
                            </span>
                            <span><i class="fa fa-arrow-right"></i>Lepakhi</span>
                            <span><i class="fa fa-arrow-right"></i>Ajantha</span>
                            <span><i class="fa fa-arrow-right"></i>Ellora</span>
                            <span><i class="fa fa-arrow-right"></i>Amaravathi</span>
                            <span><i class="fa fa-arrow-right"></i>Shilpa</span>
                        </div>
                    </div>

                </div>

                <div class="Nav-tool Select-tool3">
                    <div><i class="fa fa-home"></i>Cse Department</div>

                    <div class="Information3">
                        <div class="Picture">
                            <img src="images/cse-image.jpg" alt="">
                        </div>
                        <div class="Details">
                            <span>
                                <p class="Header">Cse Department</p>
                            </span>
                            <span><a href="schedule.php"><i class="fa fa-arrow-right"></i>Class Shedule</a></span>
                            <span><a href="attendance.php"><i class="fa fa-arrow-right"></i>Atandance</a></span>
                            <span><a href="table.php"><i class="fa fa-arrow-right"></i>Lecturers</a></span>
                            <span><a href="userdetails.php"><i class="fa fa-arrow-right"></i>Student Details</a></span>

                        </div>
                    </div>
                </div>

                <div class="Nav-tool Select-tool4">
                    <div><i class="fa fa-pencil-square-o" <?php if(($show_updates) and (isset($_SESSION['username']))): ?> style="color:red;" title="new update" <?php endif ?>></i>New Updates</div>

                    <div class="Information4">
                        <div class="Picture">
                            <img src="images/new-update.jpg" alt="">
                        </div>
                        <div class="Details">
                            <?php if(($show_updates) and (isset($_SESSION['username']))): ?>
                        <span>
                            <p class="Header1">New Update</p>
                        </span>
                            <!--<?php if($row['newtext']): ?>
                                <span><i class="fa fa-book"></i>You: <b><?php echo $row['newtext']?></b><?php echo "<small> - (".$row['updatedate'].")</small>"; ?></span>
                            <?php endif ?>-->
                        <?php foreach($show_updates as $show_update) :
                             if(strlen($show_update['reciever_name']) == 3): ?>
                                <span><i class="fa fa-comments"></i>All: <?php echo "<b>".$show_update['message']."</b> <small>".$show_update['sender_name']."-on(".$show_update['date'].")</small>"; ?></span>
                            <?php else: ?>
                               <?php if($row['admission_no']== $show_update['reciever_name']): ?>
                                <span><i class="fa fa-comments"></i>You: <?php echo "<b>".$show_update['message']."</b> <small>".$show_update['sender_name']."-on(".$show_update['date'].")</small>"; ?></span>
                                <?php endif ?>
                            <?php endif;
                        endforeach ?>
                     <!--Else part of main loop-->   
                    <?php else: ?>
                    <span>
                        <p class="Header1">No Updates</p>
                    </span>
                    <?php endif ?>
                    <!--End of main loop-->

                        </div>
                    </div>
                </div>

                <div class="Nav-tool Select-tool4">
                    <div><i class="fa fa-phone"></i>Contact Us</div>
                </div>

                <div class="Nav-tool Select-tool5">
                    <div class="Profile">
                        <?php  if (isset($_SESSION['username']) and($imageuploaded  == 1)) : ?>
                        <img src="uploads/<?php echo $row['image_file']; ?>" alt="">
                        <?php else: ?>
                        <img src="images/blank-user.webp" alt="">
                        <?php endif ?>

                    </div>
                    <div class="Information5">
                        <div class="Picture">
                            <?php  if (isset($_SESSION['username']) and($imageuploaded  == 1)) : ?>
                            <img src="uploads/<?php echo $row['image_file']; ?>" alt="">
                            <?php else: ?>
                            <img src="images/blank-user.webp" alt="">
                            <?php endif ?>
                            <div class="Uplaoad-reload-img">
                                <div class="Remove-img">
                                    <span id="Goto_deletecard"><i class="fa fa-trash-o" title="Delete image"></i>Delete image</span>
                                </div>
                                <div class="Upload">

                                    <?php  if (isset($_SESSION['username'])) : ?>
                                    <span id="Goto_uploadcard"><i class="fa fa-camera" title="upload image"></i></span>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="Details">
                            <?php  if (isset($_SESSION['username'])) : ?>
                            <span>
                                <p class="Header"><?php echo $_SESSION['username']; ?></p>
                            </span>
                            <?php else : ?>
                            <span>
                                <p class="Header">User</p>
                                <?php endif ?>
                            </span>
                            <span><i class="fa fa-arrow-right"></i>Settings</span>
                            <span><i class="fa fa-arrow-right"></i>Your actions</span>
                            <?php  if (isset($_SESSION['username'])) : ?>
                            <span><a href="index.php?logout='1'"><i class="fa fa-user-times"></i>Logout</a></span>
                            <?php else: ?>
                            <span><a href="login.php"><i class="fa fa-user-times"></i>Login</a></span>
                            <?php endif ?>
                        </div>
                    </div>
                </div>

                <!-- <span class="Nav-tool"><a href="login.php"><i class="fa fa-user"></i>Login/Register</a></span>-->


            </span>
        </div>
    </div>
</div>
<!--Open popup-->
<div class="popup-card">
    <div class="upload-img">

        <form action="index.php" method="post" enctype="multipart/form-data">
            <?php include('errorsimg.php'); ?>
            <div>
                <label for="fil"><i class="fa fa-camera"> Select Image:</i></label><br>
                <input type="file" name="image" id="file_img" accept="image/*">
            </div>
            <div class="updtcancel">
                <button type="submit" name="img_upload" id="upimg" class="upimg">Upload Image</button>
                <button type="cancel" id="cancelpopup" class="cancel">Cancel</button>
            </div>

        </form>

    </div>
</div>
<!--End of Popup-->
<div class="popup-card-delete">
    <div class="confirm">
        <div class="header">
            <P>Are you sure you want to delete image</P>
        </div>
        <div class="confirmation">
            <span>
                <form action="index.php" method="post" enctype="multipart/form-data"><button class="yes" name="remove_img" type="submit">Yes</button></form>
            </span>
            <span><button class="no" id="no">No</button></span>
        </div>
    </div>
</div>
<!--Delete popup card-->

<!---->
<script>
    <?php if(count($errorsimg) > 0): ?>
        document.querySelector(".popup-card").style.display = "block";
    <?php else: ?>
        document.querySelector(".popup-card").style.display = "none";
    <?php endif ?>
    document.getElementById("goto_uploadcard").addEventListener('click', openpopupupload);
    document.getElementById("Goto_uploadcard").addEventListener('click', openpopup);
    document.getElementById("cancelpopup").addEventListener('click', closepopupupload);

    /*Delete popup*/
    document.getElementById("goto_deletecard").addEventListener('click', openpopupdelete);
    document.getElementById("Goto_deletecard").addEventListener('click', openpopupDelete);
    /* End ofDelete popup*/
    <?php if($imageuploaded == 1): ?>
    document.querySelector(".Remove-img").style.display = "block";
    document.querySelector(".remove-img").style.display = "block";
    <?php else: ?>
    document.querySelector(".Remove-img").style.display = "none";
    document.querySelector(".remove-img").style.display = "none";
    <?php endif ?>

    function openpopupupload() {
        document.querySelector(".popup-card").style.display = "block";
    }

    function openpopup() {
        document.querySelector(".popup-card").style.display = "block";
    }

    function openpopupdelete() {
        document.querySelector(".popup-card-delete").style.display = "block";
        document.getElementById("no").addEventListener('click', closepopupdelete);
    }

    function openpopupDelete() {
        document.querySelector(".popup-card-delete").style.display = "block";
        document.getElementById("no").addEventListener('click', closepopupdelete);
    }

    function closepopupupload() {
        document.querySelector(".popup-card").style.display = "none";
    }

    function closepopupdelete() {
        document.querySelector(".popup-card-delete").style.display = "none";
    }

</script>
