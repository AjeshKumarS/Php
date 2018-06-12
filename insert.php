<?php
$con=mysqli_connect("localhost","root","","empdetails");
$name=$_POST['firstname'];
$ph=$_POST['contact'];
$pass=$_POST['pass'];
$a=mysqli_query($con,"INSERT INTO attendance(EMP_NAME,PHONENO),VALUES('$name','ph')");
header('Location:internship.php');
?>