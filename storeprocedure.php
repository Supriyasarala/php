<!DOCTYPE html>
<html>
<head>

</head>
<body>
    
<center>
    <h1> Display Records</h1> 
    <h2> Using stored procedure</h2> 
<hr/>
<?php
$conn=mysqli_connect("localhost:3325","root", "" , "useraccount");
$result=mysqli_query($conn,"CALL Crud_Display()") or die ("query fail:" .mysqli_error());
echo"<table><tr><th>Name</th></tr>";
while($row = mysqli_fetch_array($result)){
 echo "<td>".$row['student_id']." ".$row['name']."</td>";
 echo"<br/>";
 echo"</table>";}
 ?>
<center>
</body>
</html>

