<!-- Body of HOD -->

<div class="header animated slideInDown">
	<div class="navigation animated fadeIn">
		<div class="nav" style="margin-left: 3%;"><a href="#" onclick="userSettings.showDetails()" style="background: url('icos/settings.svg') no-repeat center left 0px;">Settings</a></div>
		<div class="nav"><a href="#" onclick="logout()" style="background: url('icos/logout.svg') no-repeat center left 0px;">Logout</a></div>
	</div>
	<div class="user animated fadeIn" id="user_details">
		<?php
		
			include("../db/connection.php");
			$employee_id=$SESSION['employee_id'];
            echo "<input type='hidden' id='employeeIdSession' value='".$employee_id."'>";
			$rcv=mysqli_query($conn,"SELECT first_name,last_name FROM hod WHERE(employee_id='$employee_id');");
			$rcv_user=mysqli_fetch_array($rcv);
			$FName=$rcv_user['first_name'];
			$LName=$rcv_user['last_name'];
		
			echo "Welcome : ",$FName," ",$LName;

		?>
	</div>
</div>

<br>

<div class="card_container animated fadeInUp">
	<div class="page_card mainMenu" id="mainMenu">
   		<a href="#" onclick="mainMenuFunction();">MENU</a>
   		<a href="#" onclick="hodDashboard();mainMenuFunction();">Dashboard</a>
   		<a href="#" onclick="feedAttendance.showForm();mainMenuFunction();">Feed Attendance</a>
   		<a href="#" onclick="updateAttendance.showForm();mainMenuFunction();">Update Attendance</a>
   		<a href="#" onclick="daywiseAttendanceReport.showForm(); mainMenuFunction();">Daywise Attendance</a>
   		<a href="#" onclick="totalAttendance.showForm();mainMenuFunction();">Total Attendance</a>
   		<a href="#" onclick="blacklistedStudents.showForm();mainMenuFunction();">Blacklisted Students</a>
        <a href="javascript:void(0);" class="icon" onclick="mainMenuFunction();">&#9776;</a>
	</div>
    <div class="adminMenu page_card" id="adminMenu">
        <a href="#" onclick="adminMenuFunction();">ADMIN MENU</a>
        <a href="#" onclick="addBatch.showForm();adminMenuFunction();">Add Batch</a>
        <a href="#" onclick="addStudent.showForm();adminMenuFunction();">Add Student</a>
        <a href="#" onclick="delStudent.showForm();adminMenuFunction();">Delete Student</a>
        <a href="#" onclick="startAttendance.showForm();adminMenuFunction();">Start Session</a>
        <a href="javascript:void(0);" class="icon" onclick="adminMenuFunction();">&#9776;</a>
    </div>
</div>

<div id="display" class="animated fadeInUp" >
	<!-- inner content will load here -->
	<?php
		include('dashboard/dashboard.php');
	?>
	<!-- upto here -->
</div>
<!--- End of Body of HOD -->

<?php

?>