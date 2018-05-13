<?php
	include("../db/connection.php");
	$employee_id=$_REQUEST['employee_id'];

	$employee_id=strtolower($employee_id);

	$user=$_REQUEST['username'];
	$pass=$_REQUEST['password'];
	$first_name=$_REQUEST['first_name'];
	$last_name=$_REQUEST['last_name'];
	$phone_no=$_REQUEST['phone_no'];
	$department=$_REQUEST['department'];
	$email=$_REQUEST['email'];
	$abbr=$_REQUEST['abbriviation'];

	$abbr=strtolower($abbr);

	$f_o_t=$_REQUEST['field_of_teaching'];
	$type=$_REQUEST['user_type'];

	$type=strtolower($type);
	$f_o_t=strtolower($f_o_t);

	$rcv=mysqli_query($conn,"SELECT employee_id from employee_record where(employee_id='$employee_id');");
	$rcv_id=mysqli_fetch_array($rcv);
	$id=$rcv_id['employee_id'];
	$pass = sha1($pass);
	if($id!=""){
		mysqli_query($conn,"CALL sign_up('$employee_id','$user','$pass','$first_name','$last_name',$phone_no,'$department','$email','$abbr','$f_o_t','$type');");
		if(mysqli_error($conn)){
			echo("<font color='white'>Error description: " . mysqli_error($conn).'</font>');
		}
		else{
			echo "<font color='white'>You are now Registered</font>";
		}
	}
	else{
		echo "<font color='white'>Employee does not exist in the Record</font>";
	}
?>



