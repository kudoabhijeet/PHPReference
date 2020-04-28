<?php
$server = "localhost";
$user = "";
$pass = "";
$dbname = "";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
 
$name = mysqli_real_escape_string($conn, $_POST['name']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);  
$class = mysqli_real_escape_string($conn, $_POST['class']);
$institution = mysqli_real_escape_string($conn, $_POST['institution']); 
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$email = mysqli_real_escape_string($conn, $_POST['email']); 
$skype = mysqli_real_escape_string($conn, $_POST['skype']); 
$facebook = mysqli_real_escape_string($conn, $_POST['facebook']); 
$contact = mysqli_real_escape_string($conn, $_POST['contact']); 
$address = mysqli_real_escape_string($conn, $_POST['address']); 
$experiences = mysqli_real_escape_string($conn, $_POST['experiences']);   
$accommodation = mysqli_real_escape_string($conn, $_POST['accommodation']);
$interest = mysqli_real_escape_string($conn, $_POST['interest']);
$position = mysqli_real_escape_string($conn, $_POST['position']);
$eventmanagement = mysqli_real_escape_string($conn, $_POST['eventmanagement']);  
$help = mysqli_real_escape_string($conn, $_POST['help']);  
$whyoc = mysqli_real_escape_string($conn, $_POST['whyoc']);  
$expect = mysqli_real_escape_string($conn, $_POST['expect']);
$share = mysqli_real_escape_string($conn, $_POST['share']);
 
$sql = "INSERT INTO table_name (name, gender, class, institution, dob, email, skype, facebook, contact, address, experiences, accomodation, interest, position, eventmanagement, help, whyoc,expect,share) VALUES ('$name', '$gender', '$class', '$institution', '$dob', '$email', '$skype', '$facebook', '$contact', '$address', '$experiences', '$accommodation', '$interest', '$position', '$eventmanagement', '$help', '$whyoc','$expect','$share')";
 
if($conn->query($sql) === TRUE){
header('Location: thankyou.php');
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>











			</div><!-- /fs-form-wrap -->

		</div><!-- /container -->

		<script src="js/classie.js"></script>
		<script src="js/selectFx.js"></script>
		<script src="js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
	</body>
</html>
