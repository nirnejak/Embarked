<?php

	session_start();

	include("../db/connection.php");
	$college_name=$_REQUEST['college_name'];
	$college_abbriviation=$_REQUEST['college_abbriviation'];
	$college_abbriviation=strtolower($college_abbriviation);

	mysqli_query($conn,"call insert_college('$college_name','$college_abbriviation');");

?>
