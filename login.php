<?php include('userserver.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jntua..</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/image-upload.css">
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
        <div class="login">
            <form action="login.php" method="post">
                <?php include('errorslog.php'); ?>
                <div>
                    <label for="username">Username:</label>
                    <input type="text" name="username" title="Enter username">
                </div>

                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password">
                </div>

                <div>
                    <button type="submit" name="login_user" id="log" class="log">Login</button>
                </div>

            </form>
            <p class="goto">Doesn't have an account? <a href="register.php" style="text-decoration:none;color:#ff8900;font-weight: 600;
    font-size: 20px;">Register Here</a></p>
        </div>
    </div>
</body>

</html>
