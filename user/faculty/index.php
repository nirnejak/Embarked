<!-- Body of Faculty -->

<div class="header animated slideInDown">
	<div class="navigation">
		<div class="nav" style="margin-left: 3%;"><a href="#" onclick="settings()" style="background: url('icons/ic_settings_white_36dp_1x.png') no-repeat center left 10px;">Settings</a></div>
		<div class="nav"><a href="#" onclick="logout()" style="background: url('icons/ic_vpn_key_white_36dp_1x.png') no-repeat center left 10px;">Logout</a></div>
	</div>
	<div class="user" id="user_details" class="animated zoomInRight">
		<?php
			$val = "Welcome Faculty";
			echo "Welcome ",$SESSION['suser_name'];
		?>
	</div>
</div>

<br>

<div class="card_container animated fadeInUpBig">
	<div class="page_card animated fadeInUpBig">
   		<a href="#" style="border-top-left-radius: 0.4em;border-top-right-radius: 0.4em; background: #11a9ac;">Navigation</a>
   		<a href="#" onclick="dashboard()">Dashboard</a>
   		<a href="#" onclick="feedAttendance()">Feed Attendance</a>
   		<a href="#" onclick="updateAttendance()">Update Attendance</a>
   		<a href="#" onclick="generateReport()">Generate Report</a>
   		<a href="#" onclick="blacklistedStudents()">Blacklisted Students</a>
   		<a href="#" onclick="totalAttendance()" style="border-bottom-left-radius: 0.4em;border-bottom-right-radius: 0.4em;">Total Attendance</a>
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

<div id="display" class="animated fadeInUpBig">
	<div class="card_container animated fadeInUpBig">
		<div class="page_card">
			<br><br><br><br><br><br><br><br><br><br><br><br>
			<a href="#" style="border-bottom-left-radius: 0.4em;border-bottom-right-radius: 0.4em; background: #11a9ac;">Blacklisted Students</a>
		</div>
		<div class="page_card" style="background: #3CBC8D;">
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
		<div class="page_card">
			<a href="#" style="border-top-left-radius: 0.4em;border-top-right-radius: 0.4em; background: orange;">Feed Attendance</a>
			<br><br><br><br>
		</div>
	</div>
		<div class="card_container">
		<div class="page_card animated fadeInUpBig" id="first">
			<br><br><br><br><br>
		</div>
		<div class="page_card animated fadeInUpBig" style="background: #f2cd24;">
			<br><br><br><br><br>
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
		<div class="card_container">
		<div class="page_card animated fadeInUpBig" style="background: #e54d66;">
			<a href="#" style="border-radius: 0.4em; border-radius: 0.4em; background: #cc344d;" onclick="colorChange(this.value)">Export in Excel</a>
		</div>
		<div class="page_card" style="background: #e54d66;">
			<a href="#" style="border-top-left-radius: 0.4em;border-top-right-radius: 0.4em; background: #cc344d;">Pending Attendance</a>
			<br><br><br><br><br><br><br><br>
		</div>
		<div class="page_card" style="background: #f2cd24;">
			<br><br><br><br><br>
		</div>
		<div class="page_card" style="background: #ac5ad6;">
			<br><br><br><br><br><br><br>
		</div>
		<div class="page_card">
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>
</div>

<!--- End of Body of Faculty -->