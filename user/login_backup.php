<?php

function loginDisplay($uname,$msg){
	echo "	
	<div class='login animated shake'>
	<form action='#' method='post'>
		<input type='text' id='username' placeholder='Username' autofocus='autofocus'><br><br>
		<input type='password' id='password' placeholder='Password'><br><br>
		<input type='reset' value='Clear'>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type='button' value='Login' onclick='crypto()'>
	</form>
	</div>
	<br><br>
	<font color='#f1f1f1'>",$msg,"</font><br><br>";
}


if (!isset($_SESSION['user_id']))
{
	session_start();
    $user_name=$_REQUEST['username'];
	$password=$_REQUEST['password'];

	//$user_value=$_REQUEST['usertype'];
	include("../db/connect.php");
	$rcv=mysqli_query($conn,"select user_name,password,user_type,user_id from user where(user_name='$user_name');");
	$rcv_user=mysqli_fetch_array($rcv);
	$user=$rcv_user['user_name'];
	$pass=$rcv_user['password'];
	$u_type=$rcv_user['user_type'];
	$u_id=$rcv_user['user_id'];
	if($user_name==$user){
		if($password==$pass){
			if($u_type=='faculty'){
				$SESSION['user_id']=$u_id;
				$SESSION['suser_name']=$user;
				$SESSION['user_type']=$u_type;
				include("faculty/index.php");
			}
			elseif ($u_type=='hod') {
				$SESSION['user_id']=$u_id;
				$SESSION['suser_name']=$user;
				$SESSION['user_type']=$u_type;
				include("hod/index.php");
			}
			elseif($u_type=='management'){
				$SESSION['user_id']=$u_id;
				$SESSION['suser_name']=$user;
				$SESSION['user_type']=$u_type;
				include("management/index.php");
			}
		}
		else {
			if($password==""){
				loginDisplay($user_name,"Please Enter Password!");
			}
			else {
				loginDisplay($user_name,"Incorrect Password!");
			}
		}
	}
	else {
		loginDisplay($user_name,"User not found!");
	}
}

else {
	if($SESSION['user_type']=='faculty')
		include("faculty/index.php");
	elseif ($SESSION['user_type']=='admin')
		include("admin/index.php");
	elseif($SESSION['user_type']=='management')
		include("management/index.php");
	else{
		echo "why!";
	}
}

?>