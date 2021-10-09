<?php
session_start();
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$eid=$_POST['eid'];
$psw=$_POST['psw'];
$bd=$_POST['bday'];
$user=$_POST['user'];
$con=mysqli_connect('localhost','root','','login_info');
mysqli_query($con,"insert into login_data values('$fn','$ln','$eid','$psw','$bd','$user')");
header("location:form.php");
exit();
?>