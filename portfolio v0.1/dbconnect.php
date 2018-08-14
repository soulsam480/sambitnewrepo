<?php
$con = mysqli_connect("localhost", "root", "");
if (!$con) {
	die("connection error");
}
$dbstatus = mysqli_select_db($con, "portdb");
if (!dbstatus) {
	die("database not found");
}

?>