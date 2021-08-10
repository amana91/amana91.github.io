<?php
include 'connectdb.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--When on this page it will indicate in the tab bar the page name-->
  <title>Contact Us - The Hotspot Café</title>
  <!--CSS to use for this webpage is below-->
  <link rel="stylesheet" href="css/populate.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">


</head>

<body>

  <!--When the logo is pressed on any page it will redirect to the homepage-->
  <!--The logo was created by myself using an online website - https://www.freelogodesign.org/-->
  <header>
    <a href="homepage.html">
      <div class="header img">
        <img class="logo" src="img/Logo.jpg">
      </div>
    </a>

  </header>

  <!--Nav bar which links to their respective page when selected-->
  <nav>
    <div class="openMenu"><i class="fa fa-bars"></i></div>
    <ul class="mainMenu">
      <li><a href="homepage.html">Home</a></li>
      <li><a href="aboutUs.html">About Us</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li style="float: right;"><a href="loginForm.php">Login</a></li>
      <div class="closeMenu"><i class="fa fa-times"></i></div>
    </ul>
  </nav>

  <script src="javascript/populate.js"></script>


  <!--Forms -->
  <!--
      *    Title: How To Make Login And Registration Form Using HTML And CSS With Toggle Option
      *    Author: HTML WEBSITES
      *    Date: 2019
      *    Code version: N/A
      *    Availability: https://youtu.be/M3qo-JBl6IQ​
      *    JavaScript included with example
      Added the required inputs I needed for my form
      Changed my CSS as needed to fit my form on the webpage
    -->

  <div class="login-page">
    <div class="form">
      <!--Registration form:
        The post method is a secure way of transferring data from client to server in http protocol
        the id 
        I changed the name of the classes, names, id's and the CSS which is referenced in the CSS file
      -->
      <form class="register-form" action="register-data.php" method="POST" id="regForm" onsubmit="return Validate()">

        <!--Username input: In the form it will have a placeholder which says username and it is required meaning it 
          specifies that an input field must be filled out before submitting the form-->
        <input type="text" id="username" placeholder="Username" name="username" required>

        <!--First Name input: In the form it will have a placeholder which says First Name and it is required meaning it 
          specifies that an input field must be filled out before submitting the form-->
        <input type="text" id="firstname" placeholder="First Name" name="fname" pattern="[a-zA-Z]{1,}" required>

        <!--Last Name input: In the form it will have a placeholder which says Last Name and it is required meaning it 
          specifies that an input field must be filled out before submitting the form-->
        <input type="text" id="lastname" placeholder="Last Name" name="lname" required>

        <!--Phone Number input: In the form it will have a placeholder which says Phone Numbe and it is required meaning it 
          specifies that an input field must be filled out before submitting the form-->
        <input type="tel" id="phonenumber" placeholder="Phone Number" name="phonenumber" required>

        <!--Email input: In the form it will have a placeholder which says Email and it is required meaning it 
          specifies that an input field must be filled out before submitting the form-->
        <input type="email" id="email" placeholder="Email" name="email" required>

        <!--Password input: In the form it will have a placeholder which says Password and it is required meaning it 
          specifies that an input field must be filled out before submitting the form-->
        <input type="password" id="password1" placeholder="Password" name="password1" required>

        <!--Confirm Password input: In the form it will have a placeholder which says Confirm Password and it is required meaning it 
          specifies that an input field must be filled out before submitting the form-->
        <input type="password" id="password2" placeholder="Confirm Password" name="password2" required>

        <!--This button tag is a submit button which says Registered, when click the user details are registered in the 
          system and sent to the database-->
        <button type="submit" id="regBtn" name="submit">Register</button>
        <!--However if the user is already registered then they can press the toggle button and it will switch the 
        form to the login form -->
        <p class="message">Already Registered? <a href="#">Login</a>
        </p>
      </form>
      <!--
        Login form: once logged in user is redirected to a page where booking becomes visible hence  
      action:"booking.html"
      The post method is a secure way of transferring data from client to server in http protocol
        the id
    -->
      <form qorm class="login-form" action="login.php" method="POST" name="loginForm" onsubmit="validateForm()">

        <!--Username input: In the form it will have a placeholder which says username and it is required meaning it 
          specifies that an input field must be filled out before submitting the form-->
        <input type="text" id="username" placeholder="Username" name="log-username" autofocus required>

        <!--Password input: In the form it will have a placeholder which says Password and it is required meaning it 
          specifies that an input field must be filled out before submitting the form-->
        <input type="password" id="password1" placeholder="Password" name="log-password" required>

        <!--This button tag is a submit button which says Login, when click the user details are read in the 
          system/database and the user is logged in-->
        <button type="submit">Login</button>

        <!--However if the user isn't registered then they can press the toggle button and it will switch the 
        form to the register form -->
        <p class="message">Not Registered? <a href="#">Register</a>
        </p>
      </form>

    </div>
  </div>

  <!--This JS was used in the example  -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <!--This JS is written by me for validation checks - toogle function is in this JS file but from the example -->
  <script src="javascript/contactfunction.js"></script>


  </div>
  </div>

  <footer class="footer">
    <!--The footer contains the business name, social media links and a disclamer-->
    <footer class="footer">
      <ul>
        <div class="p1">
          <!--This div holds the business name and follow us on social media text-->
          <br>
          <p>Copyright © 2020 The Hotspot Café</p>
          <p>Follow us on Social Media</p>
        </div>

        <div class="fa">
          <!--This div holds the icons and links of the social media. When each icon is selected it redirects to a new window.-->
          <!--Icon images taken from a free online source, I chose the ones I needed - 
                    https://www.vecteezy.com/vector-art/95039-free-social-media-icons/editor-->
          <a href="https://www.facebook.com/" target="_blank"><img className="fa fa-facebook" src="img/facebook.png"></a>
          <a href="https://www.twitter.com/" target="_blank"><img className="fa fa-twitter" src="img/twitter.png"></a>
          <a href="https://www.instagram.com/amana_9/" target="_blank"><img className="fa fa-instagram" src="img/instagram.png"></a>
        </div>

        <div>
          <!--This div covers the disclaimer paragraph about the business.-->
          <p class="footer-p">DISCLAIMER:<br>
            The Hotspot Café is a fictitious brand created solely for the purpose of the
            assessment of IN1010 module at City, University of London, UK. All products and
            people associated with The Hotspot Café are also fictitious. Any resemblance to real
            brands, products, or people is purely coincidental. Information provided about the
            product is also fictitious and should not be construed to be representative of actual
            products on the market in a similar product category.</p><br>
        </div>
    </footer>
    </ul>

    <!--The JavaScript used will be in a separate file but is being called here-->


</body>

</html>