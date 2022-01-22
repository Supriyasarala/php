<?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from register";
    $con=mysqli_connect('localhost:3325','root','','useraccount');
    $run=mysqli_query($con,$query);
    if(mysqli_num_rows($run)>0)
    {
        if($row=mysqli_fetch_array($run))
        {
            $u_name=$row['username'];
            $u_password=$row['password'];
            if($username==$u_name && $password==$u_password)
            {
                if(isset($_POST['remember']))
                {
                    setcookie('username',$user,time()+60*60*7);
                    setcookie('password',$password,time()+60*60*7);
                }
                session_start();
                $_SESSION['user']=$username;
                echo "<script> window.location.assign('../index.php'); </script>"; 
                exit();        
            }
            else
            {
               echo"<script>alert('incorrect user name or password')</script>";
               echo "<script> window.location.assign('login.php'); </script>"; 
            }
        }      
    }
    else
    {
        echo"<script>alert('incorrect user name or password')</script>";
    }

}
?>
