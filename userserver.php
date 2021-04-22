<?php 

session_start();
 error_reporting (E_ALL ^ E_NOTICE);
$errors = array();
$errorslog = array();
$logindate= date("Y-m-d");
$logintime= date("h:i:sa");

// initialize
$firstname = "";
$lastname = "";
$gender = "";
$ad_no = "";
$email = "";
$phone = "";
$username = "";
$image = "";
$imageuploaded = 0;
// db
$localhost = "localhost";
$root ="root";
$dbname = "jntua";
$conn = mysqli_connect($localhost,$root,'',$dbname);

if(!$conn){
    die("Connection failed: " .mysqli_connect_errno());
}

if(isset($_POST['register_user'])){
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $ad_no = mysqli_real_escape_string($conn, $_POST['ad_no']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
    $password2 = mysqli_real_escape_string($conn, $_POST['password2']);
    $imageuploaded = 0;
    
    if(empty($firstname)){
        $fnameerror = "*Firstname is required";
        array_push($errors, $fnameerror);
    }
    if(empty($lastname)){
        $lnameerror = "*Lastname is required";
        array_push($errors, $lnameerror);
    }
    if(empty($gender)){
        $gendererror = "*Gender is required";
        array_push($errors, $gendererror);
    }
    if(empty($ad_no)){
        $ad_noerror = "*Admission number is required";
        array_push($errors, $ad_noerror);
    }
    else if((strlen($ad_no)< 9) or (strlen($ad_no)>10)){
        
        $ad_nolengtherror = "*Admission number must contains 10 digits";
        array_push($errors,$ad_nolengtherror);
    }
    if(empty($email)){
        $emailerror = "*Email is required";
        array_push($errors, $emailerror);
    }
    if(empty($phone)){
        $phoneerror = "*Phone number is required";
        array_push($errors, $phoneerror);
    }
    else if((strlen($phone)< 9) or (strlen($phone)>10)){
        $phonlengtherror = "*Phone number must contains 10 digits";
        array_push($errors,$phonlengtherror);
    }
    if(empty($username)){
        $usernameerror = "*Username is required";
        array_push($errors, $usernameerror);
    }
    if(empty($password1)){
        $passworderror = "*Password is required";
        array_push($errors, $passworderror);
    }
    if($password1 != $password2){
        $passwordmatch = "*Password doesn't match";
        array_push($errors, $passwordmatch);
    }
    
    
    // Checking database if values already present in database or not
    $user_check_query = "SELECT * FROM users WHERE admission_no ='$ad_no' OR email='$email' OR phone='$phone' OR username='$username' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $userexists = mysqli_fetch_assoc($result);
    
    if($userexists){
        if($userexists['admission_no'] === $ad_no){
            $ad_noexists = "*Admission number already exist try with another admission number";
            array_push($errors, $ad_noexists);
        }
        if($userexists['email'] === $email){
            $emailexists = "*Email already exists try with another email";
            array_push($errors, $emailexists);
        }
        if($userexists['phone'] === $phone){
            $phoneexists = "*Phone number already exists try with another number";
            array_push($errors, $phoneexists);
        }
        if($userexists['username'] === $username){
            $usernameexists = "*Username already exists try with another username";
            array_push($errors, $usernameexists);
        }
    }
    
    if(count($errors) == 0){
        $password = md5($password1);
        
        $insert_query = "INSERT INTO users (firstname,lastname,gender,admission_no,email,phone,username,password,imageuploaded,logindate, logintime) VALUES ('$firstname','$lastname','$gender','$ad_no','$email','$phone','$username','$password', '$imageuploaded','$logindate','$logintime')";
        if(mysqli_query($conn, $insert_query)){
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Succssfully created";
        

        header('location: index.php');
        }
        else{
            $databseerror = "*Something went wrong, Please try again";
            array_push($errors, $databseerror);
        }
    }
}


// login

if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if(empty($username)){
        $usernameerror = "*Username is required";
        array_push($errorslog, $usernameerror);
    }
    if(empty($password)){
        $passworderror = "*Password is required";
        array_push($errorslog, $passworderror);
    }
    
    if(count($errorslog) == 0){
        $password = md5($password);
        $fetch_query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $fetch_query);
        if (mysqli_num_rows($results) == 1) {
            $datetime_query = "UPDATE users SET logindate='$logindate',logintime='$logintime' WHERE username='$username'";
            mysqli_query($conn, $datetime_query);
  	         $_SESSION['username'] = $username;
  	         $_SESSION['success'] = "You are now logged in";
  	         header('location: index.php');
  	     }else {
  		    array_push($errorslog, "*Wrong username/password combination");
  	     }
        
    }
}



?>









