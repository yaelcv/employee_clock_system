<!--
config password : https://kinsta.com/knowledgebase/xampp-mysql-password/#:~:text=Open%20phpMyAdmin%20in%20XAMPP.&text=a%20browser%20window%3A-,The%20phpMyAdmin%20interface.,you%20can%20leave%20it%20blank 
config also in - xampp/phpMyAdmin/config.inc.php
-->
<!-- **This file should be in .env when we in real production enviorments** -->

<?php
//enter your host name, database username, password, and databade name.
// if you have not set database password on localhost then set empty.

$con = mysqli_connect("localhost","root","YAEL1702", "clock_project");

// Check Connection
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else{
    echo "sucsses:";
}
?>


