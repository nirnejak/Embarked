<div class="display_page animated fadeInUp">
        <span class="heading">Feed Attendance</span>
        <br><br>

		<?php
			echo "Select Class<br><br>";
			
			include("../../db/connection.php");
			$employee_id=$_REQUEST['employeeIdSession'];

			$employeeAllotment=mysqli_query($conn,"SELECT allotment1 FROM employee_allotment WHERE employee_id='$employee_id';");
			while ($employeeAllotmentRcv=mysqli_fetch_array($employeeAllotment)) {
				$employeeAllotmentVal=$employeeAllotmentRcv[0];
			}
			
			$allot1=explode("~",$employeeAllotmentVal);
			foreach ($allot1 as $allotment1) {
				echo "<div class=\"formCards\" onclick=\"feedAttendance.submitForm('".$allotment1.";')\">";
				$arr=explode(",", $allotment1);
				echo "<br>";
				echo strtoupper($arr[0])."&nbsp;&nbsp;&nbsp";
				echo strtoupper($arr[1])."&nbsp;&nbsp;&nbsp";
				echo strtoupper($arr[2])."&nbsp;&nbsp;&nbsp";
				echo $arr[3]."&nbsp;&nbsp;&nbsp";
				$subject=mysqli_query($conn,"SELECT subject_abbriviation FROM subject_master WHERE subject_id='$arr[5]'");
				while($subjectRcv=mysqli_fetch_array($subject)){
					$subjectVal=$subjectRcv[0];
					echo $subjectVal."&nbsp;&nbsp;&nbsp";
				}
				echo strtoupper($arr[4]);
				echo "<br><br>";
				echo "</div>";
				echo "<br>";
			}
		?>
		<br><br>
</div>

<div id="show_message">
 
</div>

<br><br>