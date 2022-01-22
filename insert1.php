<?php
 
  
  $con = mysqli_connect("localhost:3325", "root", "" , "useraccount") or die($con);
 
  
  if(!empty($_POST)) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phoneCode=$_POST['phoneCode'];
    $phone=$_POST['phone'];
    
 
    
    $sql = "INSERT INTO register (username,password,gender,email,phoneCode,phone) VALUES ('$username', '$password', '$gender','$email','$phoneCode','$phone')";
    $insertData = mysqli_query($con,$sql);
 
    if($insertData){
      echo "The form has been successfully submitted.";
    } else {
      echo "Something went wrong!";
    }
  }
 
?>