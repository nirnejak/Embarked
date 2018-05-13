<?php

	session_start();

	include("../db/connection.php");
	$course_name=$_REQUEST['course_name'];
	$course_abbriviation=$_REQUEST['course_abbriviation'];
	$course_abbriviation=strtolower($course_abbriviation);

	mysqli_query($conn,"call insert_course('$course_name','$course_abbriviation');");

?>
