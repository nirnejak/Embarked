<?php
			include("../../db/connection.php");
			
			$college = $_REQUEST['college'];
			$course = $_REQUEST['course'];
			$batch = $_REQUEST['batch'];
			$branch = $_REQUEST['branch'];
			$section = $_REQUEST['section'];
			$subject_id = $_REQUEST['subjectID'];
			$date1 = $_REQUEST['dateFrom'];
			$date2 = $_REQUEST['dateTo'];

			$employeeIdSession = $_REQUEST['employeeIdSession'];

			$string="";
			$stringTable="";
			if($batch>=date('Y') && $course=='be'){
				$string=$college.$course."_"."year_1".$batch.$section;
				$stringTable=$course."_"."year_1";
			}
			else{
				$string=$college.$course."_".$branch.$batch.$section;  
				$stringTable=$course."_".$branch;
			}
			$output='';
			$output.= '<table>';
			include("../../db/connection.php");

			 $date=mysqli_query($conn,"SELECT date FROM"." "."$string"." ". "WHERE date BETWEEN"." "."$date1"." "."AND"." "."$date2"." "."AND sub_id="."'"."$subject_id"."'".";");
			 $output.= '<tr><th>Name</th>';
			while($date_rcv=mysqli_fetch_array($date)){
			    $date_val=$date_rcv[0];
			    $output.= '<th>'.$date_val.'</th>';
			 }
			 
			$output.= '</tr>';
			$student_id=mysqli_query($conn,"SELECT column_name FROM information_schema.columns WHERE table_schema='id3187617_project' AND table_name='$string' AND ordinal_position > 4;");
			while($student_id_rcv=mysqli_fetch_array($student_id)) {
			    include("../../db/connection.php");  
			    $student_id_val=$student_id_rcv[0];
			    $student_name=mysqli_query($conn,"SELECT student_name FROM"." "."$stringTable"." "."WHERE student_id="."'"."$student_id_val"."'".";");
			    $student_name_rcv=mysqli_fetch_array($student_name);
			    $student_name_val=$student_name_rcv[0]; 
			    $output.= '<tr>';
			    $output.= '<td>'.$student_name_val.'</td>';
			    $attendance=mysqli_query($conn,"SELECT"." "."$student_id_val"." "."FROM"." "."$string"." "." WHERE date BETWEEN"." "."$date1"." "."AND"." "."$date2"." "."AND sub_id="."'"."$subject_id"."'".";");
			    //$output.= "SELECT"." "."$student_id_val"." "."FROM"." "."$stringTable"." "." WHERE date BETWEEN"." "."$date1"." "."AND"." "."$date2"." "."AND sub_id="."'"."$subject_id"."'".";";
			     
			    while($attendance_rcv=mysqli_fetch_array($attendance)){
			        $attendance_val=$attendance_rcv["$student_id_val"];
			    	    if($attendance_val=="0"){
			                $output.= '<td><center>A</center></td>';
			            }
			            else{
			                $output.= '<td><center>P</center></td>';
			            }
			    }
			    $output.= '</tr>';
			}
			$output.= '</table>';
			header("Content-Type: application/xls");
            header("Content-Disposition: attachment; filename=download.xls");
             echo $output;
		?>
