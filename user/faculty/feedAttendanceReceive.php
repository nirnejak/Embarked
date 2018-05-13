<?php

	session_start();

	$mainString=$_REQUEST['mainString'];
	//$mainString='rcet,be,cse,2015,a,322155(22)';
	$allot=array();
	$arr=explode(",", $mainString);
	foreach ($arr as $allotment) {
	  $allot[]=$allotment;
	}
	$college=$allot[0];
	$course=$allot[1];
	$branch=$allot[2];
	$batch=$allot[3];
	$section=$allot[4];
	$subject=$allot[5];

?>

<div class="display_page animated fadeInUp">
    <span class="heading">Feed Attendance</span>
	<div class="form" id="form" style="margin-top: 0.5%">
        Enter Date<br><br>
		<input type="date" id="date" placeholder="Date">
        <br><br>
		<select id="lec_no">
	 		<option value=''>Lecture Number</option>
	 		<option value="1">1</option>
	 		<option value="2">2</option>
	 		<option value="3">3</option>
	 		<option value="4">4</option>
	 		<option value="5">5</option>
	 		<option value="6">6</option>
	 		<option value="7">7</option>
	 	</select>
	</div>
	<?php
		include("../../db/connection.php");
		$string="";
		$str="";
		if($batch>=date('Y') && $course=='be'){
			$string=$college.$course."_"."year_1".$batch.$section;
		    echo"<input type='hidden' name='string' id='string' value='$string'>";
		    $str=$course."_"."year_1";
		}
	
    	else{
           $string=$college.$course."_".$branch.$batch.$section;
           echo "<input type='hidden' name='string' id='string' value='$string'>";
           $str=$course."_".$branch;
		}
		$student_id=mysqli_query($conn,"SELECT column_name FROM information_schema.columns WHERE table_schema='id3187617_project' AND table_name="."'"."$string"."'"." "."AND ordinal_position >4;");

		$i=1;

		while($student_id_rcv=mysqli_fetch_array($student_id)){
			include("../../db/connection.php");
			$student_val=$student_id_rcv[0];
			$student_name=mysqli_query($conn,"SELECT student_name FROM"." "."$str"." "."WHERE student_id="."'"."$student_val"."'"." AND section="."'"."$section"."'".";");
			$student_name_rcv=mysqli_fetch_array($student_name);
			$student_value=$student_name_rcv[0];
	         echo "<td>"."<div class='checkboxThree'>".$i."&nbsp;&nbsp;".$student_value."<input type='checkbox' value='1' id='attendance_".$i."' name='' checked><label for='attendance_".$i."'></label></div></td>";
		     $i++;
		}
            $i--;
			echo "<input type='hidden' id='noStudent' value='".$i."'>";
	?>

<div id="show_message">
 
</div>

<div class="form" style="float: none;">
 	 <input style="width:180px" type="Button" value="FEED ATTENDANCE" onclick="feedAttendance.submitAttendanceForm()">
</div>