<?php

session_start();


$db = mysqli_connect('localhost', 'root','','jntua');

if(isset($_POST['update_schedule1'])){
    $oneone = mysqli_real_escape_string($db, $_POST['period11']);
    $onetwo = mysqli_real_escape_string($db, $_POST['period12']);
    $onethree = mysqli_real_escape_string($db, $_POST['period13']);
    $onefour = mysqli_real_escape_string($db, $_POST['period14']);
    $onefive = mysqli_real_escape_string($db, $_POST['period15']);
    $onesix = mysqli_real_escape_string($db, $_POST['period16']);
    $oneseven = mysqli_real_escape_string($db, $_POST['period17']);
    
    $twoone = mysqli_real_escape_string($db, $_POST['period21']);
    $twotwo = mysqli_real_escape_string($db, $_POST['period22']);
    $twothree = mysqli_real_escape_string($db, $_POST['period23']);
    $twofour = mysqli_real_escape_string($db, $_POST['period24']);
    $twofive = mysqli_real_escape_string($db, $_POST['period25']);
    $twosix = mysqli_real_escape_string($db, $_POST['period26']);
    $twoseven = mysqli_real_escape_string($db, $_POST['period27']);
    
    $threeone = mysqli_real_escape_string($db, $_POST['period31']);
    $threetwo = mysqli_real_escape_string($db, $_POST['period32']);
    $threethree = mysqli_real_escape_string($db, $_POST['period33']);
    $threefour = mysqli_real_escape_string($db, $_POST['period34']);
    $threefive = mysqli_real_escape_string($db, $_POST['period35']);
    $threesix = mysqli_real_escape_string($db, $_POST['period36']);
    $threeseven = mysqli_real_escape_string($db, $_POST['period37']);
    
    $fourone = mysqli_real_escape_string($db, $_POST['period41']);
    $fourtwo = mysqli_real_escape_string($db, $_POST['period42']);
    $fourthree = mysqli_real_escape_string($db, $_POST['period43']);
    $fourfour = mysqli_real_escape_string($db, $_POST['period44']);
    $fourfive = mysqli_real_escape_string($db, $_POST['period45']);
    $foursix = mysqli_real_escape_string($db, $_POST['period46']);
    $fourseven = mysqli_real_escape_string($db, $_POST['period47']);
    
    $fiveone = mysqli_real_escape_string($db, $_POST['period51']);
    $fivetwo = mysqli_real_escape_string($db, $_POST['period52']);
    $fivethree = mysqli_real_escape_string($db, $_POST['period53']);
    $fivefour = mysqli_real_escape_string($db, $_POST['period54']);
    $fivefive = mysqli_real_escape_string($db, $_POST['period55']);
    $fivesix = mysqli_real_escape_string($db, $_POST['period56']);
    $fiveseven = mysqli_real_escape_string($db, $_POST['period57']);

    
    $query_forcheck1 = "SELECT * FROM year1";
    $result1 = mysqli_query($db, $query_forcheck1);
    $rows1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
    if($rows1 == 0){
        $insert_query1 = "INSERT INTO year1( period11, period12, period13, period14, period15, period16, period17, period21, period22, period23, period24, period25, period26, period27, period31, period32, period33, period34, period35, period36, period37, period41, period42, period43, period44, period45, period46, period47, period51, period52, period53, period54, period55, period56,period57) VALUES ('$oneone','$onetwo','$onethree','$onefour','$onefive','$onesix','$oneseven','$twoone','$twotwo','$twothree','$twofour','$twofive','$twosix','$twoseven','$threeone','$threetwo','$threethree','$threefour','$threefive','$threesix','$threeseven','$fourone','$fourtwo','$fourthree','$fourfour','$fourfive','$foursix','$fourseven','$fiveone','$fivetwo','$fivethree','$fivefour','$fivefive','$fivesix','$fiveseven')";
        
        mysqli_query($db, $insert_query1);
        header('location: table.php');
    }else{
    
    
     $updte_query1 = "UPDATE year1 SET period11='$oneone',period12='$onetwo', period13='$onethree', period14='$onefour', period15='$onefive', period16='$onesix', period17='$oneseven',period21='$twoone',period22='$twotwo',period23='$twothree',period24='$twofour',period25='$twofive',period26='$twosix',period27='$twoseven',period31='$threeone',period32='$threetwo',period33='$threethree',period34='$threefour',period35='$threefive',period36='$threesix',period37='$threeseven',period41='$fourone',period42='$fourtwo',period43='$fourthree',period44='$fourfour',period45='$fourfive',period46='$foursix',period47='$fourseven',period51='$fiveone',period52='$fivetwo', period53='$fivethree',period54='$fivefour',period55='$fivefive',period56='$fivesix',period57='$fiveseven'";


     mysqli_query($db, $updte_query1);
 
    header('location: table.php');
    }
    

        

}

if(isset($_POST['update_schedule2'])){
    $oneone = mysqli_real_escape_string($db, $_POST['period11']);
    $onetwo = mysqli_real_escape_string($db, $_POST['period12']);
    $onethree = mysqli_real_escape_string($db, $_POST['period13']);
    $onefour = mysqli_real_escape_string($db, $_POST['period14']);
    $onefive = mysqli_real_escape_string($db, $_POST['period15']);
    $onesix = mysqli_real_escape_string($db, $_POST['period16']);
    $oneseven = mysqli_real_escape_string($db, $_POST['period17']);
    
    $twoone = mysqli_real_escape_string($db, $_POST['period21']);
    $twotwo = mysqli_real_escape_string($db, $_POST['period22']);
    $twothree = mysqli_real_escape_string($db, $_POST['period23']);
    $twofour = mysqli_real_escape_string($db, $_POST['period24']);
    $twofive = mysqli_real_escape_string($db, $_POST['period25']);
    $twosix = mysqli_real_escape_string($db, $_POST['period26']);
    $twoseven = mysqli_real_escape_string($db, $_POST['period27']);
    
    $threeone = mysqli_real_escape_string($db, $_POST['period31']);
    $threetwo = mysqli_real_escape_string($db, $_POST['period32']);
    $threethree = mysqli_real_escape_string($db, $_POST['period33']);
    $threefour = mysqli_real_escape_string($db, $_POST['period34']);
    $threefive = mysqli_real_escape_string($db, $_POST['period35']);
    $threesix = mysqli_real_escape_string($db, $_POST['period36']);
    $threeseven = mysqli_real_escape_string($db, $_POST['period37']);
    
    $fourone = mysqli_real_escape_string($db, $_POST['period41']);
    $fourtwo = mysqli_real_escape_string($db, $_POST['period42']);
    $fourthree = mysqli_real_escape_string($db, $_POST['period43']);
    $fourfour = mysqli_real_escape_string($db, $_POST['period44']);
    $fourfive = mysqli_real_escape_string($db, $_POST['period45']);
    $foursix = mysqli_real_escape_string($db, $_POST['period46']);
    $fourseven = mysqli_real_escape_string($db, $_POST['period47']);
    
    $fiveone = mysqli_real_escape_string($db, $_POST['period51']);
    $fivetwo = mysqli_real_escape_string($db, $_POST['period52']);
    $fivethree = mysqli_real_escape_string($db, $_POST['period53']);
    $fivefour = mysqli_real_escape_string($db, $_POST['period54']);
    $fivefive = mysqli_real_escape_string($db, $_POST['period55']);
    $fivesix = mysqli_real_escape_string($db, $_POST['period56']);
    $fiveseven = mysqli_real_escape_string($db, $_POST['period57']);

    
    
    $query_forcheck2 = "SELECT * FROM year2";
    $result2 = mysqli_query($db, $query_forcheck2);
    $rows2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    if($rows2 == 0){
        $insert_query2 = "INSERT INTO year2( period11, period12, period13, period14, period15, period16, period17, period21, period22, period23, period24, period25, period26, period27, period31, period32, period33, period34, period35, period36, period37, period41, period42, period43, period44, period45, period46, period47, period51, period52, period53, period54, period55, period56,period57) VALUES ('$oneone','$onetwo','$onethree','$onefour','$onefive','$onesix','$oneseven','$twoone','$twotwo','$twothree','$twofour','$twofive','$twosix','$twoseven','$threeone','$threetwo','$threethree','$threefour','$threefive','$threesix','$threeseven','$fourone','$fourtwo','$fourthree','$fourfour','$fourfive','$foursix','$fourseven','$fiveone','$fivetwo','$fivethree','$fivefour','$fivefive','$fivesix','$fiveseven')";
        
        mysqli_query($db, $insert_query2);
        header('location: table.php');
    }else{
    
     $updte_query2 = "UPDATE year2 SET period11='$oneone',period12='$onetwo', period13='$onethree', period14='$onefour', period15='$onefive', period16='$onesix', period17='$oneseven',period21='$twoone',period22='$twotwo',period23='$twothree',period24='$twofour',period25='$twofive',period26='$twosix',period27='$twoseven',period31='$threeone',period32='$threetwo',period33='$threethree',period34='$threefour',period35='$threefive',period36='$threesix',period37='$threeseven',period41='$fourone',period42='$fourtwo',period43='$fourthree',period44='$fourfour',period45='$fourfive',period46='$foursix',period47='$fourseven',period51='$fiveone',period52='$fivetwo', period53='$fivethree',period54='$fivefour',period55='$fivefive',period56='$fivesix',period57='$fiveseven'";


     mysqli_query($db, $updte_query2);
 
    header('location: table.php');
    }
}


if(isset($_POST['update_schedule3'])){
    $oneone = mysqli_real_escape_string($db, $_POST['period11']);
    $onetwo = mysqli_real_escape_string($db, $_POST['period12']);
    $onethree = mysqli_real_escape_string($db, $_POST['period13']);
    $onefour = mysqli_real_escape_string($db, $_POST['period14']);
    $onefive = mysqli_real_escape_string($db, $_POST['period15']);
    $onesix = mysqli_real_escape_string($db, $_POST['period16']);
    $oneseven = mysqli_real_escape_string($db, $_POST['period17']);
    
    $twoone = mysqli_real_escape_string($db, $_POST['period21']);
    $twotwo = mysqli_real_escape_string($db, $_POST['period22']);
    $twothree = mysqli_real_escape_string($db, $_POST['period23']);
    $twofour = mysqli_real_escape_string($db, $_POST['period24']);
    $twofive = mysqli_real_escape_string($db, $_POST['period25']);
    $twosix = mysqli_real_escape_string($db, $_POST['period26']);
    $twoseven = mysqli_real_escape_string($db, $_POST['period27']);
    
    $threeone = mysqli_real_escape_string($db, $_POST['period31']);
    $threetwo = mysqli_real_escape_string($db, $_POST['period32']);
    $threethree = mysqli_real_escape_string($db, $_POST['period33']);
    $threefour = mysqli_real_escape_string($db, $_POST['period34']);
    $threefive = mysqli_real_escape_string($db, $_POST['period35']);
    $threesix = mysqli_real_escape_string($db, $_POST['period36']);
    $threeseven = mysqli_real_escape_string($db, $_POST['period37']);
    
    $fourone = mysqli_real_escape_string($db, $_POST['period41']);
    $fourtwo = mysqli_real_escape_string($db, $_POST['period42']);
    $fourthree = mysqli_real_escape_string($db, $_POST['period43']);
    $fourfour = mysqli_real_escape_string($db, $_POST['period44']);
    $fourfive = mysqli_real_escape_string($db, $_POST['period45']);
    $foursix = mysqli_real_escape_string($db, $_POST['period46']);
    $fourseven = mysqli_real_escape_string($db, $_POST['period47']);
    
    $fiveone = mysqli_real_escape_string($db, $_POST['period51']);
    $fivetwo = mysqli_real_escape_string($db, $_POST['period52']);
    $fivethree = mysqli_real_escape_string($db, $_POST['period53']);
    $fivefour = mysqli_real_escape_string($db, $_POST['period54']);
    $fivefive = mysqli_real_escape_string($db, $_POST['period55']);
    $fivesix = mysqli_real_escape_string($db, $_POST['period56']);
    $fiveseven = mysqli_real_escape_string($db, $_POST['period57']);

    
    
    $query_forcheck3 = "SELECT * FROM year3";
    $result3 = mysqli_query($db, $query_forcheck3);
    $rows3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);
    if($rows3 == 0){
        $insert_query3 = "INSERT INTO year3( period11, period12, period13, period14, period15, period16, period17, period21, period22, period23, period24, period25, period26, period27, period31, period32, period33, period34, period35, period36, period37, period41, period42, period43, period44, period45, period46, period47, period51, period52, period53, period54, period55, period56,period57) VALUES ('$oneone','$onetwo','$onethree','$onefour','$onefive','$onesix','$oneseven','$twoone','$twotwo','$twothree','$twofour','$twofive','$twosix','$twoseven','$threeone','$threetwo','$threethree','$threefour','$threefive','$threesix','$threeseven','$fourone','$fourtwo','$fourthree','$fourfour','$fourfive','$foursix','$fourseven','$fiveone','$fivetwo','$fivethree','$fivefour','$fivefive','$fivesix','$fiveseven')";
        
        mysqli_query($db, $insert_query3);
        header('location: table.php');
    }else{
    
     $updte_query3 = "UPDATE year3 SET period11='$oneone',period12='$onetwo', period13='$onethree', period14='$onefour', period15='$onefive', period16='$onesix', period17='$oneseven',period21='$twoone',period22='$twotwo',period23='$twothree',period24='$twofour',period25='$twofive',period26='$twosix',period27='$twoseven',period31='$threeone',period32='$threetwo',period33='$threethree',period34='$threefour',period35='$threefive',period36='$threesix',period37='$threeseven',period41='$fourone',period42='$fourtwo',period43='$fourthree',period44='$fourfour',period45='$fourfive',period46='$foursix',period47='$fourseven',period51='$fiveone',period52='$fivetwo', period53='$fivethree',period54='$fivefour',period55='$fivefive',period56='$fivesix',period57='$fiveseven'";


     mysqli_query($db, $updte_query3);
 
    header('location: table.php');
    }
}


if(isset($_POST['update_schedule4'])){
    $oneone = mysqli_real_escape_string($db, $_POST['period11']);
    $onetwo = mysqli_real_escape_string($db, $_POST['period12']);
    $onethree = mysqli_real_escape_string($db, $_POST['period13']);
    $onefour = mysqli_real_escape_string($db, $_POST['period14']);
    $onefive = mysqli_real_escape_string($db, $_POST['period15']);
    $onesix = mysqli_real_escape_string($db, $_POST['period16']);
    $oneseven = mysqli_real_escape_string($db, $_POST['period17']);
    
    $twoone = mysqli_real_escape_string($db, $_POST['period21']);
    $twotwo = mysqli_real_escape_string($db, $_POST['period22']);
    $twothree = mysqli_real_escape_string($db, $_POST['period23']);
    $twofour = mysqli_real_escape_string($db, $_POST['period24']);
    $twofive = mysqli_real_escape_string($db, $_POST['period25']);
    $twosix = mysqli_real_escape_string($db, $_POST['period26']);
    $twoseven = mysqli_real_escape_string($db, $_POST['period27']);
    
    $threeone = mysqli_real_escape_string($db, $_POST['period31']);
    $threetwo = mysqli_real_escape_string($db, $_POST['period32']);
    $threethree = mysqli_real_escape_string($db, $_POST['period33']);
    $threefour = mysqli_real_escape_string($db, $_POST['period34']);
    $threefive = mysqli_real_escape_string($db, $_POST['period35']);
    $threesix = mysqli_real_escape_string($db, $_POST['period36']);
    $threeseven = mysqli_real_escape_string($db, $_POST['period37']);
    
    $fourone = mysqli_real_escape_string($db, $_POST['period41']);
    $fourtwo = mysqli_real_escape_string($db, $_POST['period42']);
    $fourthree = mysqli_real_escape_string($db, $_POST['period43']);
    $fourfour = mysqli_real_escape_string($db, $_POST['period44']);
    $fourfive = mysqli_real_escape_string($db, $_POST['period45']);
    $foursix = mysqli_real_escape_string($db, $_POST['period46']);
    $fourseven = mysqli_real_escape_string($db, $_POST['period47']);
    
    $fiveone = mysqli_real_escape_string($db, $_POST['period51']);
    $fivetwo = mysqli_real_escape_string($db, $_POST['period52']);
    $fivethree = mysqli_real_escape_string($db, $_POST['period53']);
    $fivefour = mysqli_real_escape_string($db, $_POST['period54']);
    $fivefive = mysqli_real_escape_string($db, $_POST['period55']);
    $fivesix = mysqli_real_escape_string($db, $_POST['period56']);
    $fiveseven = mysqli_real_escape_string($db, $_POST['period57']);

    
    
    $query_forcheck4 = "SELECT * FROM year4";
    $result4 = mysqli_query($db, $query_forcheck4);
    $rows4 = mysqli_fetch_array($result4, MYSQLI_ASSOC);
    if($rows4 == 0){
        $insert_query4 = "INSERT INTO year4( period11, period12, period13, period14, period15, period16, period17, period21, period22, period23, period24, period25, period26, period27, period31, period32, period33, period34, period35, period36, period37, period41, period42, period43, period44, period45, period46, period47, period51, period52, period53, period54, period55, period56,period57) VALUES ('$oneone','$onetwo','$onethree','$onefour','$onefive','$onesix','$oneseven','$twoone','$twotwo','$twothree','$twofour','$twofive','$twosix','$twoseven','$threeone','$threetwo','$threethree','$threefour','$threefive','$threesix','$threeseven','$fourone','$fourtwo','$fourthree','$fourfour','$fourfive','$foursix','$fourseven','$fiveone','$fivetwo','$fivethree','$fivefour','$fivefive','$fivesix','$fiveseven')";
        
        mysqli_query($db, $insert_query4);
        header('location: table.php');
    }else{
    
     $updte_query4 = "UPDATE year4 SET period11='$oneone',period12='$onetwo', period13='$onethree', period14='$onefour', period15='$onefive', period16='$onesix', period17='$oneseven',period21='$twoone',period22='$twotwo',period23='$twothree',period24='$twofour',period25='$twofive',period26='$twosix',period27='$twoseven',period31='$threeone',period32='$threetwo',period33='$threethree',period34='$threefour',period35='$threefive',period36='$threesix',period37='$threeseven',period41='$fourone',period42='$fourtwo',period43='$fourthree',period44='$fourfour',period45='$fourfive',period46='$foursix',period47='$fourseven',period51='$fiveone',period52='$fivetwo', period53='$fivethree',period54='$fivefour',period55='$fivefive',period56='$fivesix',period57='$fiveseven'";


     mysqli_query($db, $updte_query4);
 
    header('location: table.php');
    }
}

?>
