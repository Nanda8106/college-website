<?php
    session_start();
    if(!isset($_SESSION['username'])){
        $_SESSION['login']="Pls Login then you can access it";
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Your Attandance</title>
    <link rel="stylesheet" href="styles/schedule.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/loading.css">
    <link rel="stylesheet" href="styles/image-upload.css">
    <link rel="stylesheet" href="styles/users.css">
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
                    <p><span class="display-txt">Marks - </span><span id="minutes">540</span></p>
                </div>
                <div class="present-class">
                    <p>Grade: <span id="present_class">7.3</span></p>
                </div>
            </div>
            <div class="see-hide">
                <button class="see" onclick="letsee()">Show MarkSheet</button>
                <button class="hide" onclick="lethide()">Close Marksheet</button>
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
                        <td colspan="2" align="center" height="50">Linux</td>
                        <td rowspan="6" align="center" height="50">
                            <h2>B<br>R<br>E<br>A<br>K</h2>
                        </td>
                        <td align="center" height="50">OS</td>
                        <td rowspan="6" align="center" height="50">
                            <h2>L<br>U<br>N<br>C<br>H</h2>
                        </td>
                        <td colspan="4" align="center" height="50">OS LAB</td>
                    </tr>
                    <tr>
                        <td align="center" height="50">
                            <b>Tuesday</b>
                        </td>
                        <td colspan="2" align="center" height="50">CO
                        </td>
                        <td align="center" height="50">DBMS</td>
                        <td colspan="4" align="center" height="50">DBMS LAB</td>
                    </tr>
                    <tr>
                        <td align="center" height="50">
                            <b>Wednesday</b>
                        </td>
                        <td align="center" height="50">OS</td>
                        <td align="center" height="50">DBMS</td>
                        <td align="center" height="50">Linux</td>
                        <td colspan="4" align="center" height="50">Linux Lab</td>
                    </tr>
                    <tr>
                        <td align="center" height="50">
                            <b>Thursday</b>
                        </td>
                        <td colspan="2" align="center" height="50">P&S</td>
                        <td align="center" height="50">CO</td>
                        <td colspan="4" align="center" height="50">Physics Lab</td>
                    </tr>
                    <tr>
                        <td align="center" height="50">
                            <b>Friday</b>
                        </td>
                        <td align="center" height="50">DBMS
                        <td align="center" height="50">OS
                        </td>
                        <td align="center" height="50">P&S</td>
                        <td colspan="2" align="center" height="50">Library</td>
                        <td colspan="2" align="center" height="50">ICON</td>
                    </tr>
                </table>
            </div>

        </div>
        <!--About US-->
        <?php   require "include/contactdetails.php"; ?>


    </div>

    <script src="js/main.js"></script>
</body>

</html>
