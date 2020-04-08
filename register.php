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
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pass1 = $_POST['password1'];


    // Password Check
    if($pass1 != $pass){
        echo"Password do not match!";
    }
    $password = md5($pass);
    $q="INSERT INTO user (username,email,password) values ('$username','$email','$password')";
    
    if ($mysqli->query($q) === TRUE){
        echo "SUCCESS";
    }
    else {
        echo "Error in Saving!";
    }
    $mysqli->close();

?>