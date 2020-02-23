<?php
include "connect.php";

if (isset($_POST ['uname']) &&isset($_POST ['password']))
{
	$user_name=$_POST ['uname'];
	$user_password=$_POST ['password'];
	$query=mysqli_query($con,"select * from user where uname='$user_name' and password='$user_password'");
	$row=mysqli_num_rows($query);
	if($row==1)
	{	
	
		header("location:web/index.html");
	}
	else
	{
		
		header("location:error.html");
	}
		
}
else
{
	
	header("location:login.html");
}
?>