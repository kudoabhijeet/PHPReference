<?php 
session_start();
// Verify User ID

$server = "localhost";
$user = "dimun_sec";
$pass = "";
$dbname = "dimun";
$mysqli = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($mysqli->connect_error){
 die("Connection failed:" . $mysqli->connect_error);
}
$userid = $_SESSION['uid'];
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$mobile=$_POST['mobile-number'];
// Update data
$q = "UPDATE register SET first_name='$fname',last_name='$lname', email ='$email',mobile='$mobile' WHERE uid ='$userid'";

if($mysqli->query($q) === TRUE){
	session_destroy();
	}
else {
	echo "Error";
}
$mysqli->close();
?>
