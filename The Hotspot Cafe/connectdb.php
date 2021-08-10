<?php $db = new mysqli('smcse-stuproj00.city.ac.uk', 'adbt077', '200005882', 'adbt077'); // this is the link for my website

/* This if statment says that if there is an error linking with the database 
    then the error message "Connection failed: %s/n" will be displayed
*/
if ($db->connect_error) {
    printf("Connection failed: %s/n" . $db->connect_error);
    exit();
}
