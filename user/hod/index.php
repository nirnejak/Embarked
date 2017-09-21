<!-- Body of HOD -->

<div class="header animated slideInDown">
	<div class="navigation animated fadeIn">
		<div class="nav" style="margin-left: 3%;"><a href="#" onclick="user_settings()" style="background: url('icons/settings.png') no-repeat center left 10px;">Settings</a></div>
		<div class="nav"><a href="#" onclick="logout()" style="background: url('icons/logout.png') no-repeat center left 10px;">Logout</a></div>
	</div>
	<div class="user animated fadeIn" id="user_details">
		<?php
		
			include("../db/connection.php");
			$employee_id=$SESSION['employee_id'];
			$rcv=mysqli_query($conn,"SELECT first_name,last_name from hod where(employee_id='$employee_id');");
			$rcv_user=mysqli_fetch_array($rcv);
			$FName=$rcv_user['first_name'];
			$LName=$rcv_user['last_name'];
		
			echo "Welcome : ",$FName," ",$LName;
			//echo $rcv_user;

		?>
	</div>
</div>

<br>

<div class="card_container animated fadeInUp">
	<div class="page_card">
   		<a href="#" style="border-top-left-radius: 0.4em;border-top-right-radius: 0.4em; background: #11a9ac;">MENU</a>
   		<a href="#" onclick="dashboard()">Dashboard</a>
		<a href="#" onclick="addBatch.showForm()">Add Batch</a>
		<a href="#" onclick="addDelStudent()">Add/Delete Student</a>
		<a href="#" onclick="startAttendance()">Start Attendance</a>
   		<a href="#" onclick="feedAttendance()">Feed Attendance</a>
   		<a href="#" onclick="updateAttendance()">Update Attendance</a>
   		<a href="#" onclick="generateReport()">Generate Report</a>
   		<a href="#" onclick="blacklistedStudents()">Blacklisted Students</a>
   		<a href="#" onclick="totalAttendance()" style="border-bottom-left-radius: 0.4em; border-bottom-right-radius: 0.4em;">Total Attendance</a>
	</div>

	<div class="page_card" style="background: #f2cd24;">
		<br><br><br><br><br>
	</div>
	<div class="page_card" style="background: #e54d66;">
		<br><br><br><br><br>
	</div>
	<div class="page_card">
		<br><br><br><br><br>
	</div>
	<div class="page_card" style="background: #fbb152;">
		<br><br><br><br><br>
	</div>
</div>

<div id="display" class="animated fadeInUp" >
	<!-- inner content will load here -->
	<?php
		include('dashboard.php');
	?>

<!--- End of Body of HOD -->