<?php
include_once 'connectdb.php'; //connection to the database
$username =  $db->real_escape_string($_POST['log-username']); // collects username from the database
$password = md5($db->real_escape_string($_POST['log-password'])); // colects the password from the database

/* username and passwords are seen from the database to find any matches to the login form*/

$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($db, $query);

/* if the username and password don't match user will be taken to contact.html with an error message */

if ($result->num_rows == 0) {
	echo "<script language = 'javascript'>
    alert('Invalid Username or Password');
    window.location.href = 'contact.php';
    </script>";
	// echo "Error: " . $query . "<br>" . $db->error;
}

/*if login successful welcome user message will appear and user will be taken to the booking.html page*/ else {
	$row = $result->fetch_assoc();
	//if username is correct redirect to login.php else error message appears
	session_start();
	$_SESSION['username'] = $row['username'];
	$_SESSION['logged_in'] = 1;
	Header("Location: booking.php");
}
