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

function setSession($u_id, $user, $u_type){
	$SESSION['user_id']=$u_id;
	$SESSION['suser_name']=$user;
	$SESSION['user_type']=$u_type;
}

function validateUser($user_name,$password){
		include("../db/connect.php");
		$rcv=mysqli_query($conn,"SELECT user_name,password,user_type,user_id FROM user WHERE(user_name='$user_name');");
		$rcv_user=mysqli_fetch_array($rcv);
		$user=$rcv_user['user_name'];
		$pass=$rcv_user['password'];
		$u_type=$rcv_user['user_type'];
		$u_id=$rcv_user['user_id'];
		if($user_name==$user){
			if($password==$pass){
				if($u_type=='faculty'){
					setSession($u_id, $user, $u_type);
					include("faculty/index.php");
				}
				elseif ($u_type=='admin') {
					setSession($u_id, $user, $u_type);
					include("admin/index.php");
				}
				elseif($u_type=='management'){
					setSession($u_id, $user, $u_type);
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

?>