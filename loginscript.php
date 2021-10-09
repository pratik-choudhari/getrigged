<?php
session_start();
$uid=$_POST['uid'];
$psw=$_POST['pass'];
$_SESSION['status']=1;
$_SESSION['uid']=$uid;
$con=mysqli_connect('localhost','root','','login_info');
$res=mysqli_query($con,"select * from login_data where username='$uid' and pass='$psw'");
if(mysqli_num_rows($res)!=0)
{
	echo "ok";
}
else
{
	echo "fail";
}
?>