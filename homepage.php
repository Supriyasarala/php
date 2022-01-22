<?php
 

 
// To check if session is started.
if(isset($_SESSION["username"]))
{
    if(time()-$_SESSION["login_time_stamp"] >600) 
    {
        session_unset();
        session_destroy();
        header("Location:loginpage.php");
    }
}
else
{
    header("Location:loginpage.php");
}
?>