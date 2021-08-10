<?php
include 'connectdb.php';

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$password1 = md5($_POST['password1']);
	$password2 = md5($_POST['password2']);

	//The email and username are checked to see if they exist

	$slquery = "SELECT * FROM user WHERE email = '$email' OR username='$username'";
	echo "hi";
	$selectresult = $db->query($slquery);
	if ($selectresult->num_rows > 0) {
		echo "<script>

		window.location.href = 'loginForm.php';
		alert('Username Or Email already exists');
		</script>";
	}
	//The passwords are checked to see if they match each other if they don't match an error message stating so will appear
	elseif ($password1 != $password2) {
		echo "<script>
		window.location.href = 'loginForm.php';
		alert('password does not match');
		</script>";
	} else {
		//The details from the register form will be entered into the SQL database 
		$sql = "INSERT INTO user (username, first_name, last_name, email, phone, password) VALUES ('$username', '$fname', '$lname', '$email', '$phonenumber', '$password1')";
		//redirect to homepage 
		if ($db->query($sql) === TRUE) {
			echo "<script>
			window.location.href = 'loginForm.php';
			</script>";
		}
		//error message
		else {
			echo "Error: " . $sql . "<br>" . $db->error;
		}
	}
}
