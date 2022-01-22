<?php
if (isset($_POST['email']) &&  isset($_POST['password'])) 
$email = $_POST['email'];
$password = $_POST['password'];

 $con = new mysqli("localhost:3325", "root", "" , "useraccount");
 if($con->connect_error){
     die("Failed to connect:".$con->connect_error);
 }else{
     $stmt=$con->prepare("select * from register where email = ?");
     $stmt->bind_param("s",$email);
     $stmt->execute();
     $stmt_result=$stmt->get_result();
     if($stmt_result->num_rows > 0){
         $data=$stmt_result->fetch_assoc();
         if($data['password']===$password){
             echo"<h2>login</h2>";
         }else{
             echo"<h2>invalid</h2>";
         }
     }else{
             echo "<h2> Invalid email or password</h2>";
         }
     }
    
 
?>