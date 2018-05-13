<form action='#' method='post' class="animated fadeInUp">
	<span class="heading" style="display: block;">Add Subject</span><br><br>
	<center><div style="min-width: 100%; max-width: 100%; clear: both; float: none;">

	<div class="component_container" style="float: none; margin-bottom: 0.5%;">
		<select id="course">
		     <?php
		    	include("../db/connection.php");
				$course=mysqli_query($conn,"call display_course();");
				echo "<option value=''>Course</option>";
				while($course_rcv=mysqli_fetch_array($course)){
					$course_val=$course_rcv[0];
					echo "<option value='$course_val'>".$course_val."</option>";
				}
		    ?>
		</select>
	</div>
	<div class="component_container" style="float: none; margin-bottom: 0.5%;">
		<select id="branch">
	       <?php
	       	include("../db/connection.php");
	       	$branch=mysqli_query($conn,"call display_branch();");
	       	echo "<option value=''>Branch</option>";
	       	while($branch_rcv=mysqli_fetch_array($branch)){
				$branch_val=$branch_rcv[0];
				echo "<option value='$branch_val'>".$branch_val."</option>";
	       	}
	   	?>
	   	</select>
	</div>
	<div class="component_container" style="float: none; margin-bottom: 0.5%;">
		<input type="text" id="subjectName" placeholder="Subject Name">
	</div>
	<div class="component_container" style="float: none; margin-bottom: 0.5%;">
		<input type="text" id="subjectAbbreviation" placeholder="Subject Abbriviation FME, OOP">
	</div>
	<div class="component_container" style="float: none; margin-bottom: 0.5%;">
		<input type="text" id="subjectId" placeholder="Subject Code eg. 322351(14)
	">
	</div>
	<div class="component_container" style="float: none; margin-bottom: 0.5%;">
		<input type="number" id="semester" placeholder="Semester" min='1'>
	</div>
	<div class="component_container" style="float: none; margin-bottom: 0.5%;">
		<input type="number" id="year" placeholder="Year" min='1'>
	</div>
	<br>
	<div class="component_container_small" style="float: none;">
		<input type='button' value='   ADD   ' onclick='addSubjectDetails()'>
	</div>
	</center>
</form>