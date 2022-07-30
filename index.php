<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">

        <h3>Mystore</h3>
    </div>
    <form action="" method="POST">
        <div id="content">
            <h2>Register</h2>

            <div id="wrap">
                <label for="text">Username</label>
                <input type="text" name="username" placeholder="Enter Username" required>
                <label for="text">E-mail or PhoneNumber</label>
                <input type="number" required name="emailnum" placeholder="PhoneNumber">

                <label for="text">Branch</label>
                <select id="" required name="branch">
                    <option aria-required="true" value="Select">Select</option>
                    <option value="I.T">I.T</option>
                    <option value="Computer">Computer</option>
                    <option value="Civil">Civil</option>

                    <option value="Electrical">Electrical</option>
                    <option value="Mechanical ">Mechanical</option>
                </select>
                <label for="">SEMESTER</label>
                <select id="" required name="sem">
                    <option value="Select">Select</option>
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4rt</option>
                    <option value="5">5th</option>
                    <option value="6">6th</option>
                    <option value="7">7th</option>
                    <option value="8">8th</option>
                </select>
                <label for="">Password</label>
                <input name="password" type="Password" required placeholder="Enter password">
                <label for="">Confirm-Password</label>
                <input name="re_password" required type="Password" placeholder="Re-Enter password">
                <input id="btn" type="submit" name="sign_in" value="sign-in">
                <!-- <div class="google">
                    <div id="my-signin2"></div>
                    <script>
                        function onSuccess(googleUser) {
                            console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                        }
                        function onFailure(error) {
                            console.log(error);
                        }
                        function renderButton() {
                            gapi.signin2.render('my-signin2', {
                                'scope': 'profile email',
                                'width': 240,
                                'height': 50,
                                'longtitle': true,
                                'theme': 'dark',
                                'onsuccess': onSuccess,
                                'onfailure': onFailure
                            });
                        }
                    </script>

                    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

                </div> -->
                <div class="login">
                    Already Registered? <a href="index1.php" target="" rel="">Log-In</a>
                </div>
            </div>
        </div>
    </form>

</body>

</html>

<?php
include "connection.php";

if (isset($_POST['sign_in'])) {
    $uname     = $_POST['username'];
    $uemailnum = $_POST['emailnum'];
    $ubranch   = $_POST['branch'];
    $usem      = $_POST['sem'];
    $upass     = $_POST['password'];
    $urepass   = $_POST['re_password'];

    $query = " INSERT INTO Signup (usrname,email_number,branch,semester,usrpassword,confirm_password) VALUES('$uname','$uemailnum','$ubranch','$usem ','$upass','$urepass')";
    $co = mysqli_query($connect, $query);
    if ($ubranch == "I.T") {
        header("Location:/index1.php");
        exit();
    } else {
        echo "sorry";
    }
}
?>