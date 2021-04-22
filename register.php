<?php include('userserver.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jntua..</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/image-upload.css">
    <link rel="stylesheet" href="styles/users.css">
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

        <div class="register">
            <form action="register.php" method="post">
               <?php include('errorsreg.php'); ?>
                <div>
                    <label for="firstname">Firstname:</label>
                    <input type="text" name="firstname">
                </div>
                <div>
                    <label for="lastname">Lastname:</label>
                    <input type="text" name="lastname">
                </div>

                <div>
                    <label for="gender">Gender: </label>

                    <input type="radio" name="gender" value="male">
                    <label for="male">Male</label>

                    <input type="radio" name="gender" value="female">
                    <label for="female">Female</label>

                    <input type="radio" name="gender" value="Others">
                    <label for="others">Others</label>
                </div>

                <div>
                    <label for="ad_no">Admission no:</label>
                    <input type="text" name="ad_no" placeholder="ex: 18001A0574">
                </div>

                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email">
                </div>

                <div>
                    <label for="phone_no">Phone no:</label>
                    <input type="text" name="phone">
                </div>

                <div>
                    <label for="username">Username:</label>
                    <input type="text" name="username" title="Create Username">
                </div>

                <div>
                    <label for="password">Password:</label>
                    <input type="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Must contain at least one  number/Special character and one uppercase and lowercase letter, and at least 8 or more characters" name="password1">
                </div>

                <div>
                    <label for="password">Verify Password:</label>
                    <input type="password" name="password2">
                </div>

                <div>
                    <button type="submit" name="register_user" class="reg" id="reg">Register</button>
                </div>
            </form>

            <p class="goto">Already a user? <a href="login.php" style="text-decoration:none;color:#ff8900;font-weight: 600;
    font-size: 20px;">Login Here</a></p>
        </div>

    </div>
    
    
</body>

</html>
