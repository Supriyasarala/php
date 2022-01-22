<?php
 
  
  $con = mysqli_connect("localhost:3325", "root", "" , "useraccount") or die($con);
 
  
  if(!empty($_POST)) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    
    $sql = "INSERT INTO login (email,password) VALUES ('$email', '$password')";
    $insertData = mysqli_query($con,$sql);
 
    if($insertData){
      echo "The form has been successfully submitted.";
    } else {
      echo "Something went wrong!";
    }
  }
 
?>