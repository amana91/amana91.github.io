<?php 
session_start();
//when the user logs out then they are redirected to the homepage
	unset($_Session['username']);
	session_destroy();
	Header("Location: homepage.html");
