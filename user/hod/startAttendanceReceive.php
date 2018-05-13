<?php
 
$section=$_REQUEST['section'];
$section=strtolower($section);
$batch=$_REQUEST['batch'];
$college=$_REQUEST['college'];
$branch=$_REQUEST['branch'];
$course=$_REQUEST['course'];
$branch=strtolower($branch);
$course=strtolower($course);

?>

<div class="display_page animated fadeInUp">
	<span class="heading">Start Attendance Confirmation</span>
	<br><br>
	<table width="80%" cellspacing="0px;" cellpadding="2px" id="recordDisplay">
	    <tr bgcolor="#606B93" height="40px;">
	      <th width="25%" style="border-top-left-radius: 1em;"> Name </th>
	      <th width="25%"> University Roll No </th>
	      <th width="25%"> Branch </th>
	      <th width="25%" style="border-top-right-radius: 1em;"> Section </th>
	    </tr>
	    <?php
		    include("../../db/connection.php");
		    $tablestr="";
		    if($batch>=date('Y') && $course=='be'){
				     $tablestr=$course."_"."year_1";		
				}
	    
		    else{
					$tablestr=$course."_".$branch;
			}
		
				$sql="SELECT student_id,student_name,university_roll FROM $tablestr WHERE section='$section' and batch=$batch ORDER BY student_name ;";
				$stmt=mysqli_query($conn,$sql);
		        while($fetch_students=mysqli_fetch_array($stmt)){
					  echo "<tr><td align='center'>".$fetch_students[1]."</td><td align='center'>".$fetch_students[2]."</td><td align='center'>".$branch."</td><td align='center'>".$section."</td><tr>"; 
			         }
		?>
	<tr>
	
		<td colspan="4" style="border-bottom-right-radius: 1em; border-bottom-left-radius: 1em;"><br></td>
	</tr>
	</table>

	<?php

		include("../../db/connection.php");
		$attdstring="";
		$tablestr="";;
		
		if($batch>=date('Y') && $course=='be'){
				$attdstring=$college.$course."_"."year_1".$batch.$section;
				$tablestr=$course."_"."year_1";
			}
		

		else {
				$attdstring=$college.$course."_".$branch.$batch.$section;
				$tablestr=$course."_".$branch;
		}
			
			$sql="SELECT student_id FROM $tablestr WHERE section='$section' and batch=$batch ORDER BY student_name ;";
			$select=mysqli_query($conn,$sql);
			
			$str='';
			while ($select_rcv=mysqli_fetch_array($select)) {
				$select_result=$select_rcv[0];
				$str=$str.$select_result." "."tinyint(2)"." "."not null ".",";
			}
			

		$create="CREATE TABLE"." "."$attdstring"." "."(date date NOT NULL,lec_no int(3) NOT NULL,sub_id varchar(30) NOT NULL,employee_id varchar(30) NOT NULL,$str primary key(date,lec_no));";

		$create_fire=mysqli_query($conn,$create);

		echo "<br><br>";
	?>