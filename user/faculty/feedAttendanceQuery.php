<div class="display_page animated fadeInUp">
    <span class="heading">Feed Attendance Result</span>
    <center>
		<?php
			include("../../db/connection.php");

			$stringTableName=$_REQUEST['stringTableName'];
			$attendanceString=$_REQUEST['attendanceString'];
			$date=$_REQUEST['date'];
			$lec_no=$_REQUEST['lec_no'];
		    $employee_id=$_REQUEST['employeeIdSession'];
            echo "<div style='display:none'>";
            session_start();
            echo "</div><br><br><br>";
			$branch=$_SESSION['branch'];
			$batch=$_SESSION['batch'];
			$course=$_SESSION['course'];
			$subject=$_SESSION['subject_id'];

			$str="($date,$lec_no,'$subject','$employee_id'";
			$final_str=$str.$attendanceString.";";	
			
			include("../../db/connection.php");
		     mysqli_query($conn,"INSERT INTO"." "."$stringTableName"." "."VALUES".$final_str);


			echo "<h2 style='color: #f1f1f1;''>Attendance Successfully Entered</h2><br><br><br><br>";
			
		?>
    </center>
</div>

<br><br>