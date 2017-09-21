<?php
	session_start();

	include("../../db/connection.php");

	$student_id=$_REQUEST['student_id'];
	$student_name=$_REQUEST['student_name'];
	$phone_no=$_REQUEST['phone_no'];
	$university_roll=$_REQUEST['university_roll'];

	$section=$_SESSION['section'];
	$number_of_students=$_SESSION['number_of_students'];
	$batch=$_SESSION['batch'];
	$college=$_SESSION['college'];
	$branch=$_SESSION['branch'];
	$course=$_SESSION['course'];


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


	if($batch>=date('Y') && ($course=='be' || $course=='BE')){
		mysqli_query($conn,"insert into year_1 values".$final_str);
	}
	else{
		mysqli_query($conn,"insert into"."$branch"."values".$final_str);
	}
?>