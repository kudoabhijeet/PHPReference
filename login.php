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

    $q1 = "SELECT * FROM user WHERE username = '$username' AND password = '$password' LIMIT 1";
    $res = mysqli_query($mysqli,$q1);
    if (mysqli_num_rows($res) == 1){ //User found!
        echo "User Found!";
    }
    else {
        echo "User not found!";
        //header('location: home.php');	
    }
    $mysqli->close(); 