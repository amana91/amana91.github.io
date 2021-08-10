<!--
Code without references was coded by myself
using own experience, knowledge and personal project references 
-->

<?php
//When user logs in welcome message appears
session_start();
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in'] == 1) {
    Header("Location: loginForm.php");
}
$name = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--
        This specifies the character encoding for the HTML doc
        The browsers viewport is the area of the window which displays the web content
        width=device-width sets the width of the page to follow the screen width
        initial scale sets the initial zoom level when the page is first
        loaded by the browser
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--When on this page it will indicate in the tab bar the page name-->
    <title>Booking - The Hotspot Café
        <?php echo $name;  ?>
    </title>
    <!--CSS to use for this webpage is below-->
    <link rel="stylesheet" href="css/populate.css">
    <link rel="stylesheet" href="css/booking.css">
    <!-- CSS from online (jquery)-->
    <!-- The booking script will have the calendars functionality-->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

</head>

<body>
    <!--When the logo is pressed on any page it will redirect to the homepage
      The logo was created by myself using an online website - https://www.freelogodesign.org/-->
    <header>
        <a href="homepage.html">
            <div class="header img">
                <!--This is where the image is called from-->
                <img class="logo" src="img/Logo.jpg">
        </a>
        </div>
    </header>

    <!--Nav bar which links to their respective page when selected-->
    <nav>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="homepage.html">Home</a></li>
            <li><a href="aboutUs.html">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li style="float: right;"><a href="
            logout.php?">Logout</a></li>
            <div class="closeMenu"><i class="fa fa-times"></i></div>
        </ul>
    </nav>
    <script src="javascript/populate.js"></script>



    <!--
      *    Title: How to build calendar using HTML, CSS, and JavaScript
      *    Author: lashaNoz
      *    Date: 30 May 2020
      *    Code version: N/A
      *    Availability: https://www.youtube.com/watch?v=o1yMqPyYeAo
      *    Some JavaScript included with example
      Changed my CSS and parts of JavaScript too fit my calendar on the webpage
    -->



    <!--The text will be displayed beside the calendar to allow the user to choose which type of booking they want-->

    <div class="row">
        <div class="datetime col-6">
            <p class="cal">Date: <input type="text" id="datepicker"></p>
            <p class="time">Time: <input type="time" id="time"></p>
            <!--This will display text to allow the user to see if the booking has been confirmed or not-->
            <p class="bookDate-p" id="bookDate"></p>
            <button class="button">Submit to Book the time slot</button>

        </div>

        <div class="col-6">
            <h3 class="heading-text">Book a date & time and check out the different booking options below:</h3>

            <ol class="order">
                <p>1.Workspace booth</p>
                <p>2.Snooker Table</p>
                <p>3.Group Library Session</p>
                <p>4.Computer space</p><br>
            </ol>
        </div>

    </div>


</html>

<!--The footer contains the business name, social media links and a disclaimer-->
<footer class="footer">
    <ul>
        <div class="p1">
            <!--This div holds the business name and follow us on social media text-->
            <p>Copyright © 2020 The Hotspot Café</p>
            <p>Follow us on Social Media</p>
        </div>

        <div class="fa">
            <!--
             This div holds the icons and links of the social media. When each icon is selected it redirects
             to its respective link in a new window.
             Icon images taken from a free online source, I chose the ones I needed - 
             https://www.vecteezy.com/vector-art/95039-free-social-media-icons/editor
          -->
            <a href="https://www.facebook.com/" target="_blank"><img className="fa fa-facebook" src="img/facebook.png"></a>
            <a href="https://www.twitter.com/" target="_blank"><img className="fa fa-twitter" src="img/twitter.png"></a>
            <a href="https://www.instagram.com/amana_9/" target="_blank"><img className="fa fa-instagram" src="img/instagram.png"></a>
        </div>

        <div>
            <!--This div covers the disclaimer paragraph about the business.-->
            <p class="footer-p">DISCLAIMER:<br> The Hotspot Café is a fictitious brand created solely for the purpose of the assessment of IN1010 module at City, University of London, UK. All products and people associated with The Hotspot Café are also fictitious. Any resemblance
                to real brands, products, or people is purely coincidental. Information provided about the product is also fictitious and should not be construed to be representative of actual products on the market in a similar product category.
            </p>

        </div>
</footer>
</ul>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="javascript/booking.js"></script>
<!--Alert welcome message-->
<script type="text/javascript">
    alert('welcome <?php echo $name;  ?>')
</script>
</body>

</html>