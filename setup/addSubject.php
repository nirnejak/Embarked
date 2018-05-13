<?php

	include("../db/connection.php");
	$course=$_REQUEST['course'];
	$subject_id=$_REQUEST['subject_id'];
	$subject_name=$_REQUEST['subject_name'];
	$subject_abbriviation=$_REQUEST['subject_abbriviation'];

	$subject_abbriviation=strtolower($subject_abbriviation);

	$branch=$_REQUEST['branch'];

	$branch=strtolower($branch);
	
	$semester=$_REQUEST['semester'];
	$year=$_REQUEST['year'];

	echo $course.$subject_id.$subject_name.$subject_abbriviation.$branch.$semester.$year;
	
	mysqli_query($conn,"call insert_subject('$course','$subject_id','$subject_name','$subject_abbriviation','$branch',$semester,$year);");

?>
