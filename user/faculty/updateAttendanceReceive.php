<div class="display_page animated fadeInUp">
    <span class="heading">Update Attendance Result</span>
    <center>
    	<?php
			include("../../db/connection.php");
			$college=$_REQUEST['college'];
			$student_id	=$_REQUEST['studentID'];
			$section=$_REQUEST['section'];
			$lec_no=$_REQUEST['lec_no'];
			$date=$_REQUEST['date'];
			$course=$_REQUEST['course'];
			$attendance=$_REQUEST['attendance'];
			$subject=$_REQUEST['subject'];
			$employee_id=$_REQUEST['employeeIdSession'];
			$employee_id=strtoupper($employee_id);
			$branch=$_REQUEST['branch'];
			$batch=$_REQUEST['batch'];

			if($batch>=date('Y') && $branch=='be'){
			    $TableString=$college.$course."_"."year_1".$batch.$section;
			}
			else{
				$TableString=$college.$course."_".$branch.$batch.$section;		
			}
			$update=mysqli_query($conn,"UPDATE $TableString SET $student_id="."'"."$attendance"."'"." "."WHERE date='$date' AND lec_no='$lec_no' AND sub_id='$subject' AND employee_id='$employee_id';");
			
			echo "<h2 style='color: #f1f1f1;''>Attendance updated successfully</h2><br><br><br><br>";
			
		?>
    </center>
</div>

    <br><br>