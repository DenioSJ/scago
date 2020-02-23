<?php
include "connect.php";
if(isset($_POST['uname']) &&isset($_POST['password']))
{
$user_name=$_POST['uname'];
$u_password=$_POST['password'];
//echo $user_no."   ".$user_name;
$query=mysqli_query($con,"insert into user(uname,password) values('$user_name','$u_password')") or die(header("location:error2.html"));
if($query)
	echo "values inserted successfully";
}
header("location:login.html");
?>