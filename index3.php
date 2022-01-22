<?php
$mysqli=new mysqli("localhost:3325", "root", "" , "useraccount");
$resultSet=$mysqli->query"select employee.e_name as ename,details.salary as detailssalary from employee,details";
 echo $resultSet->num_rows;
 ?>
