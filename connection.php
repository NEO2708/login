<?php
error_reporting(0);
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "Credentials";

$connect = mysqli_connect($servername, $username, $password, $dbname);
if ($connect) {
    echo "";
} else {
    echo "no".mysqli_connect_error();
}

?>