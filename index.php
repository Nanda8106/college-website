<!--<?php 
        $no = "21001A0901";
        $year = (int)substr($no,0,2);
        $course = substr($no,5,1);
        $branch = substr($no,7,1);
        $branch_available = array(1,2,3,4,5,8);
        $course_available = array("A","F","B");
        $roll_no =(int) substr($no,8,2);
        echo $branch;
        echo $roll_no;
        if(($roll_no>0) and ($roll_no<=80)){
            echo "ok rool number";
        }
        if(($year >15) and ($year<21)){
            echo "this year is present<br>";
        }else{
            echo "starting with ".$year." is not present pls try again<br>";
        }
        
        $branch_present = "False";
        for($x = 0; $x<6; $x++){
             if($branch == $branch_available[$x]){
                    $branch_present = "True";
                    break;
             }
        }
        if($branch_present =="False"){
            echo "There is no such branch in this college";
        }
        
?>-->
<?php 
     
  session_start(); 
  if (isset($_GET['logout'])) {
  	session_destroy();
    $_SESSION['log_out'] = "Loged Out";
  	unset($_SESSION['username']);
  	

  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jntua..</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/image-upload.css">
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
        <!----- Main Image ----->
        <div class="main-image">

            
            <div class="paragraph">
                <p>Welcome to Jntua, Anathapur</p>
                
                <?php if(!isset($_SESSION['username'])): ?>
                    <div class="main-page-login-popup">
                    <?php
                    if(isset($_SESSION['login'])){
                        echo '<h3>'.$_SESSION["login"].'</h3>';
                    }
                    else{
                        echo '<h3>Pls Login</h3>';
                    }
                    echo '<a href="login.php">Login</a>';
                endif
                        ?>
                
            </div>
            </div>
            

        </div>

    </div>
    <!--login popup-->
     <script src="js/sweetalert.min.js"></script>
    <?php if(isset($_SESSION['success'])) : ?>
   
    <script>
        swal({
            title: "<?php echo $_SESSION['username']; ?>",
            text: "<?php echo $_SESSION['success']; ?>",
            icon: "success",
        });
    </script>
    <?php unset($_SESSION['success']);
    endif
    ?>
    <!--image popup-->
   
    
</body>

</html>
