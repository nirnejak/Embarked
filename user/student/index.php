<!-- Body of Student -->




<div class="header">
		<div class="navigation">
			<div class="nav"><a href="#">Settings</a></div>
			<div class="nav"><a href="#">Change Password</a></div>
			<div class="nav"><a href="#">Logout</a></div>
		</div>
		<div class="user">
			<?php 
				echo "<font color='#f1f1f1'>Welcome ",$SESSION['suser_name'],"</font>";
			?>
		</div>
	</div>

	<br>

	<div class="card_container">
		<div class="page_card">
      		<a href="#" style="border-top-left-radius: 0.4em;border-top-right-radius: 0.4em; background: #11a9ac;">Navigation</a>
      		<a href="#">Dashboard</a>
      		<a href="#">Feed Attendance</a>
      		<a href="#">Update Attendance</a>
      		<a href="#">Generate Report</a>
      		<a href="#">Blacklisted Students</a>
      		<a href="#" style="border-bottom-left-radius: 0.4em;border-bottom-right-radius: 0.4em;">Total Attendance</a>
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

	<div id="display">
		<div class="card_container">
			<div class="page_card">
				<br><br><br><br><br><br><br><br><br><br><br><br>
				<a href="#" style="border-bottom-left-radius: 0.4em; border-bottom-right-radius: 0.4em; background: #11a9ac;">Blacklisted Students</a>
			</div>
			<div class="page_card" style="background: #3CBC8D;">
				<br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
			<div class="page_card">
				<a href="#" style="border-top-left-radius: 0.4em; border-top-right-radius: 0.4em; background: orange;">Feed Attendance</a>
				<br><br><br><br>
			</div>
		</div>

		<div class="card_container">
			<div class="page_card" id="first">
				<br><br><br><br><br>
			</div>
			<div class="page_card" style="background: #f2cd24;">
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
			<div class="page_card" style="background: #e54d66;">
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

<!--- End of Body of Student -->