<?php
//$con=mysqli_connect("localhost",root,"","names");
$name=$_POST['admin'];
$pass=$_POST['pass'];
//$a=mysqli_query($con,"INSERT INTO  student(NAME,MARK) VALUES('$name','$mark')");
if(($name==divya||$name==DIVYA)&&($pass==123))
  header('Location:admin_login.php');
else
	header('Location:intership.php')
?>