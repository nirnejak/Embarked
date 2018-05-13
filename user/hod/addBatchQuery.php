<?php
	session_start();

	include("../../db/connection.php");

	$student_id=$_REQUEST['student_id'];
	$student_id=strtolower($student_id);
	$student_name=$_REQUEST['student_name'];
	$student_name=strtoupper($student_name);
	$phone_no=$_REQUEST['phone_no'];
	$university_roll=$_REQUEST['university_roll'];

	$section=$_SESSION['section'];
	$number_of_students=$_SESSION['number_of_students'];
	$batch=$_SESSION['batch'];
	$college=$_SESSION['college'];
	$branch=$_SESSION['branch'];
	$branch=strtolower($branch);
	$course=$_SESSION['course'];
	$course=strtolower($course);


	$final_str="("."'".
		"$student_id".
		"'".
		",".
		"'".
		"$student_name".
		"'".","."'".
		"$college".
		"'".",".
		"$batch".
		","."'".
		"$branch".
		"'".","."'".
		"$section".
		"'".",".
		"$phone_no".","."$university_roll".")".";";

	$tablestr="";	
	if($batch>=date('Y') && $course=='be'){
		$tablestr=$course."_"."year_1";
	}
	else{
		$tablestr=$course."_".$branch;
	}
	mysqli_query($conn,"INSERT INTO"." "."$tablestr"." "."VALUES".$final_str);
?>