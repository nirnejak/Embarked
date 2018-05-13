<div class="card_container animated fadeInUp">
    <div class="page_card">
		<a href="#" style="background: #3CBC8D;" onclick="feedAttendance()">Developed By</a>
		<br><br>
		<h3>
		    <font color="white">
		        Mayank Verma<br>
		        Jitendra Nirnejak<br>
		    </font>
		</h3>
		<br><br><br>
	</div>
	<div class="page_card" style="background: #e54d66;">
		<a href="#" style="background: #cc344d;">Total Classes Taken</a>
		<?php
		
			if(isset($employee_id)) {
				include("../db/connection.php");
				include("totalClassTaken.php");
			}
			else {
				$employee_id=$_REQUEST['employeeIdSession'];
				include("../../../db/connection.php");
				include("totalClassTaken.php");
			}
	
		?>
		<br>
	</div>
	<div class="page_card">
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<a href="#" style="background: #11a9ac;" onclick="blacklistedStudents()">Blacklisted Students</a>
	</div>
</div>

<div class="card_container animated fadeInUp">
	<div class="page_card" id="first">
		<br><br><br><br><br>
	</div>
	<div class="page_card" style="background: #e54d66;">
		<a href="#" style="background: #cc344d;" onclick="feedAttendance.showForm();">Pending Attendance</a>
		<br><br><br><br><br><br><br><br>
	</div>
	<div class="page_card" style="background: #e54d66;">
		<br><br><br><br><br><br><br>
	</div>
	<div class="page_card" style="background: #33b5e6;">
		<br><br><br><br><br><br><br>
	</div>
	<div class="page_card" style="background: #59c3ea;">
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
</div>

<div class="card_container animated fadeInUp">
	<div class="page_card" style="background: #e54d66;">
		<a href="#" style="background: #cc344d;" onmouseover="colorChange(this.value)" onclick="totalAttendance.showForm();">Export in Excel</a>
	</div>
	<div class="page_card">
		<a href="#" style="background: orange;" onclick="feedAttendance()">Feed Attendance</a>
		<br><br><br><br>
	</div>
	<div class="page_card" style="background: #f2cd24;">
		<br><br><br><br><br>
	</div>
	<div class="page_card" style="background: #ac5ad6;">
		<br><br><br><br><br><br><br>
	</div>
	<div class="page_card" style="background: #3CBC8D;">
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
</div>