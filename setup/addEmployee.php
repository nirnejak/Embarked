<?php

	include("../db/connection.php");
	
	$employee_id=$_REQUEST['employee_id'];
	$full_name=$_REQUEST['full_name'];

	$employee_id=strtolower($employee_id);

	mysqli_query($conn,"call add_employee('$employee_id','$full_name');");

?>