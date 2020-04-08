<?php
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "webapp";
$mysqli = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($mysqli->connect_error){
 die("Connection failed:" . $mysqli->connect_error);
}

    $username = $_POST['username'];
    $password = md5($_POST['password']); 

    $q1 = "SELECT * FROM user WHERE username = $username AND password = $password";
    if (mysqli_num_rows($q1)==1){
        echo "User Found!";
    }
    else {
        echo "User not found!";
    }
    $mysqli->close(); 