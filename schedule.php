<?php
    session_start();
    if(!isset($_SESSION['username'])){
        $_SESSION['login']="Pls Login then you can access it";
        header('location:index.php');
    }
?>
<?php include('server.php');

    $select_query2 = "SELECT * FROM year1";
    $result2 = mysqli_query($db, $select_query2);
    $rows2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Schedule</title>
    <link rel="stylesheet" href="styles/schedule.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/loading.css">
    <link rel="stylesheet" href="styles/image-upload.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">

</head>

<body onload="startTime()">
    <div class="Container">
        <?php   require "include/navbar.php"; ?>
        <?php require "include/loading.php"; ?>
        <!--Class Schedule-->
        <div class="schedule-container">
            <div class="time-class">
                <div class="time">
                    <p><span class="display-txt">Present Time - </span><span id="hours"></span>:<span id="minutes"></span>:<span id="seconds"></span></p>
                </div>
                <div class="present-class">
                    <p>Present Class: <span id="present_class">Linux Programmming</span></p>
                </div>
            </div>
            <div class="see-hide">
                <button class="see" id="showtime-table" onclick="letsee()">Show Timetable</button>
                <button class="hide" onclick="lethide()">Close Timetable</button>
                
            </div>
                <div class="see-tb">

                    <table border="5" cellspacing="0" align="center" class="timetable">
                        <!--<caption>Timetable</caption>-->
                        <tr>
                            <td align="center" height="50" width="100"><br>
                                <b>Day/Period</b><br>
                            </td>
                            <td align="center" height="50" width="100">
                                <b>I<br>9:15-10:15</b>
                            </td>
                            <td align="center" height="50" width="100">
                                <b>II<br>10:15-11:15</b>
                            </td>
                            <td align="center" height="50" width="100">
                                <b>III<br>11:15-11:30</b>
                            </td>
                            <td align="center" height="50" width="100">
                                <b>11:30-12:30</b>
                            </td>
                            <td align="center" height="50" width="100">
                                <b>IV<br>12:30-1:30</b>
                            </td>
                            <td align="center" height="50" width="100">
                                <b>V<br>1:30-2:30</b>
                            </td>
                            <td align="center" height="50" width="100">
                                <b>VI<br>2:30-3:30</b>
                            </td>
                            <td align="center" height="50" width="100">
                                <b>VII<br>3:30-4:30</b>
                            </td>
                            <td align="center" height="50" width="100">
                                <b>VIII<br>4:30-5:30</b>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Monday</b></td>
                            <td align="center" height="50" id="period1"><?php echo $rows2['period11']; ?></td>
                            <td align="center" height="50" id="period2"><?php echo $rows2['period12']; ?></td>
                            <td rowspan="6" align="center" height="50">
                                <h2>B<br>R<br>E<br>A<br>K</h2>
                            </td>
                            <td align="center" height="50" id="period3"><?php echo $rows2['period13']; ?></td>
                            <td rowspan="6" align="center" height="50">
                                <h2>L<br>U<br>N<br>C<br>H</h2>
                            </td>
                            <td align="center" height="50" id="period4"><?php echo $rows2['period14']; ?></td>
                            <td align="center" height="50" id="period5"><?php echo $rows2['period15']; ?></td>
                            <td align="center" height="50" id="period6"><?php echo $rows2['period16']; ?></td>
                            <td align="center" height="50" id="period7"><?php echo $rows2['period17']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Tuesday</b>
                            </td>
                            <td align="center" height="50"><?php echo $rows2['period21']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period22']; ?></td>

                            <td align="center" height="50"><?php echo $rows2['period23']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period24']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period25']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period26']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period27']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Wednesday</b>
                            </td>
                            <td align="center" height="50"><?php echo $rows2['period31']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period32']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period33']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period34']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period35']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period36']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period37']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Thursday</b>
                            </td>
                            <td align="center" height="50"><?php echo $rows2['period41']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period42']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period43']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period44']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period45']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period46']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period47']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Friday</b>
                            </td>
                            <td align="center" height="50"><?php echo $rows2['period51']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period52']; ?>
                            </td>
                            <td align="center" height="50"><?php echo $rows2['period53']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period54']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period55']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period56']; ?></td>
                            <td align="center" height="50"><?php echo $rows2['period57']; ?></td>
                        </tr>
                    </table>
                </div>

        </div>
        <!--About US-->
        <?php   require "include/contactdetails.php"; ?>


    </div>
    
  <script src="js/timetable.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
