<?php
 if (isset($_POST['user'])
// Session starts
//session_start();
$username = $_POST["user"];
 
if(isset($_POST["Login"])) {
 
    // Session Variables are created
    $_SESSION["user"] = $user;  
 
    // Login time is stored in a session variable
    $_SESSION["login_time_stamp"] = time(); 
    header("Location:homepage.php");
}
