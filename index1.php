<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="header">

        <h3>Mystore</h3>
    </div>
    <form action="" method="POST">
        <div id="content">
            <h2>Log-In</h2>

            <div id="wrap">
                <label for="text">Username</label>
                <input type="text" name="username" placeholder="Enter Username" required>
                <label for="text">Password</label>
                <input type="password" name="password" placeholder="Enter Password" required>
                <input type="number" name="sem" placeholder="Enter Semester" required>
                <input id="btn" type="submit" name="login" value="Login">
                <div class="login">
                    Not Registered? <a href="index.php" target="" rel="">Register</a>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
<?php
include "connection.php";

if (isset($_POST['login'])) {
    $uname     = $_POST['username'];
    $upass     = $_POST['password'];
    $usem      = $_POST['sem'];
    $ubranch   = $_POST[''];


    $query = "SELECT * FROM Signup WHERE usrname = '$uname' && usrpassword ='$upass' && branch ='$ubranch' ";
    $data = mysqli_query($connect, $query);
    $total = mysqli_num_rows($data);
    if ($usem == 2) {
        header("Location:/content.html");
    } else {

        echo "Login Failed";
    }
}
?>