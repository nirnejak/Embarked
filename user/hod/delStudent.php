<div class="display_page animated fadeInUp">
    <span class="heading">Delete Student Result</span>
    <center>

		<?php
			include("../../db/connection.php");
			$college=$_REQUEST['college'];
			$student_id=$_REQUEST['studentID'];
			$course=$_REQUEST['course']; 
			$section=$_REQUEST['section'];
			$batch=$_REQUEST['batch'];
			$branch=explode("/", $student_id);
			$student_id=join('',$branch);
			if($batch>=date('Y') && $course=='be'){
				$TableString=$course."_"."year_1";
				$AttendanceTableString=$college.$course."_"."year_1".$batch.$section;	
			}
			else{
				$TableString=$course."_".$branch[0];
				$AttendanceTableString=$college.$course."_".$branch[0].$batch.$section;		
			}
			

		   mysqli_query($conn,"DELETE FROM $TableString WHERE student_id='$student_id';");
		   mysqli_query($conn,"ALTER TABLE $AttendanceTableString drop column $student_id ;");

		   echo "<h2 style='color: #f1f1f1;'>Student Deleted Successfully</h2><br><br><br><br>";
					
		?>
    </center>
</div>

    <br><br>