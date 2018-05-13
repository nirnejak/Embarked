<?php

function loginDisplay(){
	echo "	
        <div class='login animated shake'>
        <form action='#' method='post'>
            <input type='text' id='username' placeholder='Username' autofocus='autofocus'><br><br>
            <input type='password' id='password' placeholder='Password'><br><br>
            <input type='reset' value='CLEAR'>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type='button' value='LOGIN' onclick='crypto()'>
        </form>
        </div>
        <br><br>
        <p style='color:#f1f1f1'>Invalid Login Credentials</p><br><br>";
}

function validateUser($user_name,$password){
		include("../db/connection.php");
		$rcv=mysqli_query($conn,"call login('$user_name','$password',@u_type,@e_id);");
		$rcv_result=mysqli_query($conn,"select @u_type,@e_id;");
		$rcv_user=mysqli_fetch_array($rcv_result);

		$u_type=$rcv_user['@u_type'];
		$u_type=strtolower($u_type);

		$emp_id=$rcv_user['@e_id'];
		$emp_id=strtolower($emp_id);

		if(!$u_type)
		{
			loginDisplay();
		}
		else{
				if($u_type=='faculty'){
				$SESSION['employee_id']=$emp_id;	
				include("faculty/index.php");
				
			}
			elseif ($u_type=='hod') {
				$SESSION['employee_id']=$emp_id;
				
				include("hod/index.php");
			}
			elseif($u_type=='management'){
				$SESSION['employee_id']=$emp_id;
				
				include("management/management.php");
			}
		}
}

?>