<?php
$con=mysqli_connect("localhost","root","","empdetails");
$id=$_POST['id'];
$pass=$_POST['pass'];
//$a=mysqli_query($con,"INSERT INTO  student(NAME,MARK) VALUES('$name','$mark')");
if(($id=='divya'||$name=='DIVYA')&&($pass=='123'))
  header('Location:admin_login.PHP');
else
	header('Location:intership.php')
?>