<?php
	include("../db/connection.php");

	$course_abbriviation=$_REQUEST['course_abbriviation'];
	$branch=$_REQUEST['branch_name'];
	$branch_abbr=$_REQUEST['branch_abbriviation'];
	$branch_abbr=strtolower($branch_abbr);

	mysqli_query($conn,"call insert_branch('$course_abbriviation','$branch','$branch_abbr');");
	if(mysqli_error($conn)){
			echo("<font color='white'>Error description: " . mysqli_error($conn).'</font>');
	}
	mysqli_query($conn,"create table"." ".$course_abbriviation."_".$branch_abbr." "."(student_id varchar(30) primary key,student_name varchar(100) not null,college varchar(30) not null,batch int(6) not null,branch varchar(30) not null,section varchar(3) not null,phone_no int(12) not null,university_roll int(12) unique not null,foreign key(college) references college_master(college_abbriviation),foreign key(branch) references branch_master(branch_abbriviation));");
	if(mysqli_error($conn)){
			echo("<font color='white'>Error description: " . mysqli_error($conn).'</font>');
	}

?>