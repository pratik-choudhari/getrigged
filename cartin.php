<?php
session_start();
$prod = $_POST['pro'];
$con=mysqli_connect('localhost','root','','carts');
$query = "SELECT * FROM".$_SESSION['uid'];
$result = mysqli_query($con, $query);
if($result) 
{
	$query = "CREATE TABLE ".$_SESSION['uid']."(products varchar(50))";
    $result = mysqli_query($con, $query);
}
else
{
$sql="insert into ".$_SESSION['uid']." values('$prod');";
$res=mysqli_query($con,$sql);
}
?>