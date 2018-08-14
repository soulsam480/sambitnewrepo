<?php
require_once("dbconnect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];

$sql="insert into users values
('$name','$email','$subject')";
$status=mysqli_query($con,$sql);

if ($status) {
	header("location:index.html");
}

?>