<?php
session_start();

$con=mysqli_connect('localhost');
mysqli_select_db($con,'esportslogin');

$name=$_POST['user'];
$passw=$_POST['pass'];

$q="select * from logintable where name='$name'";
$result=mysqli_query($con,$q);

	$reg="insert into logintable ('name','passw')";
	mysqli_query($con,$reg);
	echo"Account Created Successfully";
?>
