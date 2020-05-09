<?php 
session_start();
// Verify User ID
$userid = $_SESSION['uid'];
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$mobile=$_POST['mobile-number'];
// Update data
$update = "UPDATE register SET first_name='$fname',last_name='$lname', email ='$email',mobile'$mobile' WHERE uid ='$userid";
$update_query = mysqli->query($update);
if($update_query){
	header("Location: user-profile.php);
	}
else {
	echo "Error";
}
?>
