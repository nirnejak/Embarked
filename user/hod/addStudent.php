<div class="display_page animated fadeInUp">
    <span class="heading">Add Student Result</span>
    <center>
		<?php
			include("../../db/connection.php");
			$college=$_REQUEST['college'];
			$student_id=$_REQUEST['studentID'];
			$course=$_REQUEST['course']; 
			$section=$_REQUEST['section'];
			$batch=$_REQUEST['batch'];
			$student_name=$_REQUEST['name'];
			$phone_no=$_REQUEST['phone_no'];
			$university_roll=$_REQUEST['university_roll'];
			$branch=$_REQUEST['branch'];

			if($batch>=date('Y') && $course=='be'){
				$TableString=$course."_"."year_1";
				$AttendanceTableString=$college.$course."_"."year_1".$batch.$section;	
				echo $college.$course."_"."year_1".$batch.$section;		
			}
			else{
				$TableString=$course."_".$branch;
				$AttendanceTableString=$college.$course."_".$branch.$batch.$section;		
			}
			$final_str="("."'".
				"$student_id".
				"'".
				",".
				"'".
				"$student_name".
				"'".","."'".
				"$college".
				"'".",".
				"$batch".
				","."'".
				"$branch".
				"'".","."'".
				"$section".
				"'".",".
				"$phone_no".","."$university_roll".")".";";


		   mysqli_query($conn,"INSERT INTO $TableString VALUES".$final_str);
		   mysqli_query($conn,"ALTER TABLE $AttendanceTableString add column $student_id tinyint(2);");

		   echo "<h2 style='color: #f1f1f1;''>Student Added Successfully</h2><br><br><br><br>";
					
		?>
    </center>
</div>

    <br><br>