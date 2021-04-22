<?php
    session_start();
    if(!isset($_SESSION['username'])){
        $_SESSION['login']="Pls Login then you can access it";
        header('location:index.php');
    }
?>
<?php include('server.php');
    $select_query1 = "SELECT * FROM year1";
    $result1 = mysqli_query($db, $select_query1);
    $rows = mysqli_fetch_array($result1, MYSQLI_ASSOC);

    $select_query2 = "SELECT * FROM year2";
    $result2 = mysqli_query($db, $select_query2);
    $rows2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);

    $select_query3 = "SELECT * FROM year3";
    $result3 = mysqli_query($db, $select_query3);
    $rows3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);

    $select_query4 = "SELECT * FROM year4";
    $result4 = mysqli_query($db, $select_query4);
    $rows4 = mysqli_fetch_array($result4, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jntua..</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/image-upload.css">
    <link rel="stylesheet" href="styles/schedule.css">
    <link rel="stylesheet" href="styles/loading.css">
    <link rel="stylesheet" href="styles/timetableupdate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="Container">
        <?php   require "include/navbar.php"; ?>
        <?php require "include/loading.php"; ?>


             
        <div class="edit-timetable">
            <div class="select-year">
                <select name="year" id="year" onclick="selectYear(this)">
                    <option value="o" selected disabled>Select year</option>
                    <option value="one">1st year</option>
                    <option value="two">2nd year</option>
                    <option value="three">3rd year</option>
                    <option value="four">4th year</option>
                </select>
            </div>
            <div class="all-classes">
                <div class="see-table1">
                    <p>First Year</p>
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
                            <td align="center" height="50" id="period11"><?php echo $rows['period11']; ?></td>
                            <td align="center" height="50" id="period12"><?php echo $rows['period12']; ?></td>
                            <td rowspan="6" align="center" height="50">
                                <h2>B<br>R<br>E<br>A<br>K</h2>
                            </td>
                            <td align="center" height="50" id="period13"><?php echo $rows['period13']; ?></td>
                            <td rowspan="6" align="center" height="50">
                                <h2>L<br>U<br>N<br>C<br>H</h2>
                            </td>
                            <td align="center" height="50" id="period14"><?php echo $rows['period14']; ?></td>
                            <td align="center" height="50" id="period15"><?php echo $rows['period15']; ?></td>
                            <td align="center" height="50" id="period16"><?php echo $rows['period16']; ?></td>
                            <td align="center" height="50" id="period17"><?php echo $rows['period17']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Tuesday</b>
                            </td>
                            <td align="center" height="50" id="period21"><?php echo $rows['period21']; ?></td>
                            <td align="center" height="50" id="period22"><?php echo $rows['period22']; ?></td>

                            <td align="center" height="50" id="period23"><?php echo $rows['period23']; ?></td>
                            <td align="center" height="50" id="period24"><?php echo $rows['period24']; ?></td>
                            <td align="center" height="50" id="period25"><?php echo $rows['period25']; ?></td>
                            <td align="center" height="50" id="period26"><?php echo $rows['period26']; ?></td>
                            <td align="center" height="50" id="period27"><?php echo $rows['period27']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Wednesday</b>
                            </td>
                            <td align="center" height="50" id="period31"><?php echo $rows['period31']; ?></td>
                            <td align="center" height="50" id="period32"><?php echo $rows['period32']; ?></td>
                            <td align="center" height="50" id="period33"><?php echo $rows['period33']; ?></td>
                            <td align="center" height="50" id="period34"><?php echo $rows['period34']; ?></td>
                            <td align="center" height="50" id="period35"><?php echo $rows['period35']; ?></td>
                            <td align="center" height="50" id="period36"><?php echo $rows['period36']; ?></td>
                            <td align="center" height="50" id="period37"><?php echo $rows['period37']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Thursday</b>
                            </td>
                            <td align="center" height="50" id="period41"><?php echo $rows['period41']; ?></td>
                            <td align="center" height="50" id="period42"><?php echo $rows['period42']; ?></td>
                            <td align="center" height="50" id="period43"><?php echo $rows['period43']; ?></td>
                            <td align="center" height="50" id="period44"><?php echo $rows['period44']; ?></td>
                            <td align="center" height="50" id="period45"><?php echo $rows['period45']; ?></td>
                            <td align="center" height="50" id="period46"><?php echo $rows['period46']; ?></td>
                            <td align="center" height="50" id="period47"><?php echo $rows['period47']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Friday</b>
                            </td>
                            <td align="center" height="50" id="period51"><?php echo $rows['period51']; ?></td>
                            <td align="center" height="50" id="period52"><?php echo $rows['period52']; ?>
                            </td>
                            <td align="center" height="50" id="period53"><?php echo $rows['period53']; ?></td>
                            <td align="center" height="50" id="period54"><?php echo $rows['period54']; ?></td>
                            <td align="center" height="50" id="period55"><?php echo $rows['period55']; ?></td>
                            <td align="center" height="50" id="period56"><?php echo $rows['period56']; ?></td>
                            <td align="center" height="50" id="period57"><?php echo $rows['period57']; ?></td>
                        </tr>
                    </table>

                </div>
                <!--Second Year-->
                <div class="see-table2">
                    <p class="">Second Year</p>

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
                <!--Third year-->
                <div class="see-table3">
                    <p>Third Year</p>
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
                            <td align="center" height="50" id="period1"><?php echo $rows3['period11']; ?></td>
                            <td align="center" height="50" id="period2"><?php echo $rows3['period12']; ?></td>
                            <td rowspan="6" align="center" height="50">
                                <h2>B<br>R<br>E<br>A<br>K</h2>
                            </td>
                            <td align="center" height="50" id="period3"><?php echo $rows3['period13']; ?></td>
                            <td rowspan="6" align="center" height="50">
                                <h2>L<br>U<br>N<br>C<br>H</h2>
                            </td>
                            <td align="center" height="50" id="period4"><?php echo $rows3['period14']; ?></td>
                            <td align="center" height="50" id="period5"><?php echo $rows3['period15']; ?></td>
                            <td align="center" height="50" id="period6"><?php echo $rows3['period16']; ?></td>
                            <td align="center" height="50" id="period7"><?php echo $rows3['period17']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Tuesday</b>
                            </td>
                            <td align="center" height="50"><?php echo $rows3['period21']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period22']; ?></td>

                            <td align="center" height="50"><?php echo $rows3['period23']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period24']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period25']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period26']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period27']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Wednesday</b>
                            </td>
                            <td align="center" height="50"><?php echo $rows3['period31']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period32']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period33']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period34']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period35']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period36']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period37']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Thursday</b>
                            </td>
                            <td align="center" height="50"><?php echo $rows3['period41']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period42']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period43']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period44']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period45']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period46']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period47']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Friday</b>
                            </td>
                            <td align="center" height="50"><?php echo $rows3['period51']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period52']; ?>
                            </td>
                            <td align="center" height="50"><?php echo $rows3['period53']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period54']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period55']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period56']; ?></td>
                            <td align="center" height="50"><?php echo $rows3['period57']; ?></td>
                        </tr>
                    </table>
                </div>
                <!--Fourth year-->
                <div class="see-table4">
                    <p>Fourth Year</p>
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
                            <td align="center" height="50" id="period1"><?php echo $rows4['period11']; ?></td>
                            <td align="center" height="50" id="period2"><?php echo $rows4['period12']; ?></td>
                            <td rowspan="6" align="center" height="50">
                                <h2>B<br>R<br>E<br>A<br>K</h2>
                            </td>
                            <td align="center" height="50" id="period3"><?php echo $rows4['period13']; ?></td>
                            <td rowspan="6" align="center" height="50">
                                <h2>L<br>U<br>N<br>C<br>H</h2>
                            </td>
                            <td align="center" height="50" id="period4"><?php echo $rows4['period14']; ?></td>
                            <td align="center" height="50" id="period5"><?php echo $rows4['period15']; ?></td>
                            <td align="center" height="50" id="period6"><?php echo $rows4['period16']; ?></td>
                            <td align="center" height="50" id="period7"><?php echo $rows4['period17']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Tuesday</b>
                            </td>
                            <td align="center" height="50"><?php echo $rows4['period21']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period22']; ?></td>

                            <td align="center" height="50"><?php echo $rows4['period23']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period24']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period25']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period26']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period27']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Wednesday</b>
                            </td>
                            <td align="center" height="50"><?php echo $rows4['period31']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period32']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period33']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period34']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period35']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period36']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period37']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Thursday</b>
                            </td>
                            <td align="center" height="50"><?php echo $rows4['period41']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period42']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period43']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period44']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period45']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period46']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period47']; ?></td>
                        </tr>
                        <tr>
                            <td align="center" height="50">
                                <b>Friday</b>
                            </td>
                            <td align="center" height="50"><?php echo $rows4['period51']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period52']; ?>
                            </td>
                            <td align="center" height="50"><?php echo $rows4['period53']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period54']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period55']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period56']; ?></td>
                            <td align="center" height="50"><?php echo $rows4['period57']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="Update1">
                <button class="Update-table1" id="Update_table1">Update</button>
            </div>
            <div class="Update2">
                <button class="Update-table2" id="Update_table2">Update</button>
            </div>
            <div class="Update3">
                <button class="Update-table3" id="Update_table3">Update</button>
            </div>
            <div class="Update4">
                <button class="Update-table4" id="Update_table4">Update</button>
            </div>
            <div class="modify1">
                <form method="post" action="table.php">

                    <div class="monday">
                        <label for="monday">Monday: </label>
                        <input type="text" name="period11" placeholder="period1" required>
                        <input type="text" name="period12" placeholder="period2">
                        <input type="text" name="period13" placeholder="period3">
                        <input type="text" name="period14" placeholder="period4">
                        <input type="text" name="period15" placeholder="period5">
                        <input type="text" name="period16" placeholder="period6">
                        <input type="text" name="period17" placeholder="period7">
                    </div>
                    <div class="tuesday">
                        <label for="tuesday">Tuesday: </label>
                        <input type="text" name="period21" placeholder="period1">
                        <input type="text" name="period22" placeholder="period2">
                        <input type="text" name="period23" placeholder="period3">
                        <input type="text" name="period24" placeholder="period4">
                        <input type="text" name="period25" placeholder="period5">
                        <input type="text" name="period26" placeholder="period6">
                        <input type="text" name="period27" placeholder="period7">
                    </div>
                    <div class="wednesday">
                        <label for="wednesday">Wednesday: </label>
                        <input type="text" name="period31" placeholder="period1">
                        <input type="text" name="period32" placeholder="period2">
                        <input type="text" name="period33" placeholder="period3">
                        <input type="text" name="period34" placeholder="period4">
                        <input type="text" name="period35" placeholder="period5">
                        <input type="text" name="period36" placeholder="period6">
                        <input type="text" name="period37" placeholder="period7">
                    </div>
                    <div class="thursday">
                        <label for="thursday">Thursday: </label>
                        <input type="text" name="period41" placeholder="period1">
                        <input type="text" name="period42" placeholder="period2">
                        <input type="text" name="period43" placeholder="period3">
                        <input type="text" name="period44" placeholder="period4">
                        <input type="text" name="period45" placeholder="period5">
                        <input type="text" name="period46" placeholder="period6">
                        <input type="text" name="period47" placeholder="period7">
                    </div>
                    <div class="friday">
                        <label for="friday">Friday: </label>
                        <input type="text" name="period51" placeholder="period1">
                        <input type="text" name="period52" placeholder="period2">
                        <input type="text" name="period53" placeholder="period3">
                        <input type="text" name="period54" placeholder="period4">
                        <input type="text" name="period55" placeholder="period5">
                        <input type="text" name="period56" placeholder="period6">
                        <input type="text" name="period57" placeholder="period7">
                    </div>
                    <div class="update1">
                        <button type="submit" name="update_schedule1" class="final-update1" id="final_update1">Updatefirst</button>
                    </div>
                </form>
            </div>
            
            
            <div class="modify2">
                <form method="post" action="table.php">

                    <div class="monday">
                        <label for="monday">Monday: </label>
                        <input type="text" name="period11" placeholder="period1" required>
                        <input type="text" name="period12" placeholder="period2">
                        <input type="text" name="period13" placeholder="period3">
                        <input type="text" name="period14" placeholder="period4">
                        <input type="text" name="period15" placeholder="period5">
                        <input type="text" name="period16" placeholder="period6">
                        <input type="text" name="period17" placeholder="period7">
                    </div>
                    <div class="tuesday">
                        <label for="tuesday">Tuesday: </label>
                        <input type="text" name="period21" placeholder="period1">
                        <input type="text" name="period22" placeholder="period2">
                        <input type="text" name="period23" placeholder="period3">
                        <input type="text" name="period24" placeholder="period4">
                        <input type="text" name="period25" placeholder="period5">
                        <input type="text" name="period26" placeholder="period6">
                        <input type="text" name="period27" placeholder="period7">
                    </div>
                    <div class="wednesday">
                        <label for="wednesday">Wednesday: </label>
                        <input type="text" name="period31" placeholder="period1">
                        <input type="text" name="period32" placeholder="period2">
                        <input type="text" name="period33" placeholder="period3">
                        <input type="text" name="period34" placeholder="period4">
                        <input type="text" name="period35" placeholder="period5">
                        <input type="text" name="period36" placeholder="period6">
                        <input type="text" name="period37" placeholder="period7">
                    </div>
                    <div class="thursday">
                        <label for="thursday">Thursday: </label>
                        <input type="text" name="period41" placeholder="period1">
                        <input type="text" name="period42" placeholder="period2">
                        <input type="text" name="period43" placeholder="period3">
                        <input type="text" name="period44" placeholder="period4">
                        <input type="text" name="period45" placeholder="period5">
                        <input type="text" name="period46" placeholder="period6">
                        <input type="text" name="period47" placeholder="period7">
                    </div>
                    <div class="friday">
                        <label for="friday">Friday: </label>
                        <input type="text" name="period51" placeholder="period1">
                        <input type="text" name="period52" placeholder="period2">
                        <input type="text" name="period53" placeholder="period3">
                        <input type="text" name="period54" placeholder="period4">
                        <input type="text" name="period55" placeholder="period5">
                        <input type="text" name="period56" placeholder="period6">
                        <input type="text" name="period57" placeholder="period7">
                    </div>
                    <div class="update2">
                        <button type="submit" name="update_schedule2" class="final-update2" id="final_update2">Updatesecond</button>
                    </div>
                </form>
            </div>
            
            <div class="modify3">
                <form method="post" action="table.php">

                    <div class="monday">
                        <label for="monday">Monday: </label>
                        <input type="text" name="period11" placeholder="period1" required>
                        <input type="text" name="period12" placeholder="period2">
                        <input type="text" name="period13" placeholder="period3">
                        <input type="text" name="period14" placeholder="period4">
                        <input type="text" name="period15" placeholder="period5">
                        <input type="text" name="period16" placeholder="period6">
                        <input type="text" name="period17" placeholder="period7">
                    </div>
                    <div class="tuesday">
                        <label for="tuesday">Tuesday: </label>
                        <input type="text" name="period21" placeholder="period1">
                        <input type="text" name="period22" placeholder="period2">
                        <input type="text" name="period23" placeholder="period3">
                        <input type="text" name="period24" placeholder="period4">
                        <input type="text" name="period25" placeholder="period5">
                        <input type="text" name="period26" placeholder="period6">
                        <input type="text" name="period27" placeholder="period7">
                    </div>
                    <div class="wednesday">
                        <label for="wednesday">Wednesday: </label>
                        <input type="text" name="period31" placeholder="period1">
                        <input type="text" name="period32" placeholder="period2">
                        <input type="text" name="period33" placeholder="period3">
                        <input type="text" name="period34" placeholder="period4">
                        <input type="text" name="period35" placeholder="period5">
                        <input type="text" name="period36" placeholder="period6">
                        <input type="text" name="period37" placeholder="period7">
                    </div>
                    <div class="thursday">
                        <label for="thursday">Thursday: </label>
                        <input type="text" name="period41" placeholder="period1">
                        <input type="text" name="period42" placeholder="period2">
                        <input type="text" name="period43" placeholder="period3">
                        <input type="text" name="period44" placeholder="period4">
                        <input type="text" name="period45" placeholder="period5">
                        <input type="text" name="period46" placeholder="period6">
                        <input type="text" name="period47" placeholder="period7">
                    </div>
                    <div class="friday">
                        <label for="friday">Friday: </label>
                        <input type="text" name="period51" placeholder="period1">
                        <input type="text" name="period52" placeholder="period2">
                        <input type="text" name="period53" placeholder="period3">
                        <input type="text" name="period54" placeholder="period4">
                        <input type="text" name="period55" placeholder="period5">
                        <input type="text" name="period56" placeholder="period6">
                        <input type="text" name="period57" placeholder="period7">
                    </div>
                    <div class="update3">
                        <button type="submit" name="update_schedule3" class="final-update3" id="final_update3">Updatethree</button>
                    </div>
                </form>
            </div>
            
            <div class="modify4">
                <form method="post" action="table.php">

                    <div class="monday">
                        <label for="monday">Monday: </label>
                        <input type="text" name="period11" placeholder="period1" required>
                        <input type="text" name="period12" placeholder="period2">
                        <input type="text" name="period13" placeholder="period3">
                        <input type="text" name="period14" placeholder="period4">
                        <input type="text" name="period15" placeholder="period5">
                        <input type="text" name="period16" placeholder="period6">
                        <input type="text" name="period17" placeholder="period7">
                    </div>
                    <div class="tuesday">
                        <label for="tuesday">Tuesday: </label>
                        <input type="text" name="period21" placeholder="period1">
                        <input type="text" name="period22" placeholder="period2">
                        <input type="text" name="period23" placeholder="period3">
                        <input type="text" name="period24" placeholder="period4">
                        <input type="text" name="period25" placeholder="period5">
                        <input type="text" name="period26" placeholder="period6">
                        <input type="text" name="period27" placeholder="period7">
                    </div>
                    <div class="wednesday">
                        <label for="wednesday">Wednesday: </label>
                        <input type="text" name="period31" placeholder="period1">
                        <input type="text" name="period32" placeholder="period2">
                        <input type="text" name="period33" placeholder="period3">
                        <input type="text" name="period34" placeholder="period4">
                        <input type="text" name="period35" placeholder="period5">
                        <input type="text" name="period36" placeholder="period6">
                        <input type="text" name="period37" placeholder="period7">
                    </div>
                    <div class="thursday">
                        <label for="thursday">Thursday: </label>
                        <input type="text" name="period41" placeholder="period1">
                        <input type="text" name="period42" placeholder="period2">
                        <input type="text" name="period43" placeholder="period3">
                        <input type="text" name="period44" placeholder="period4">
                        <input type="text" name="period45" placeholder="period5">
                        <input type="text" name="period46" placeholder="period6">
                        <input type="text" name="period47" placeholder="period7">
                    </div>
                    <div class="friday">
                        <label for="friday">Friday: </label>
                        <input type="text" name="period51" placeholder="period1">
                        <input type="text" name="period52" placeholder="period2">
                        <input type="text" name="period53" placeholder="period3">
                        <input type="text" name="period54" placeholder="period4">
                        <input type="text" name="period55" placeholder="period5">
                        <input type="text" name="period56" placeholder="period6">
                        <input type="text" name="period57" placeholder="period7">
                    </div>
                    <div class="update4">
                        <button type="submit" name="update_schedule4" class="final-update4" id="final_update4">Updatefour</button>
                    </div>
                </form>
            </div>
            
            
        </div>
        <!--About US-->
       <?php require "include/contactdetails.php"; ?>
       

    </div>
    <script src="js/table.js"></script>
</body>

</html>
