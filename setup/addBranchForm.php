
<form action='#' method='post' class="animated fadeInUp">
	<span class="heading" style="display: block;">Add Branch</span><br><br>
	<center>
	<div class="component_container" style="float: none;">
		<select id="course">
	     <?php
	     include("../db/connection.php");
	      $course=mysqli_query($conn,"CALL display_course();");
	      echo "<option value=''>Course</option>";
	      while($course_rcv=mysqli_fetch_array($course))
	      {
	        $course_val=$course_rcv[0];
	        echo "<option value='$course_val'>".$course_val."</option>";
	      }

	     ?>
	 	</select>
	</div>
	</center>
	<br>
	<div class="component_container">
		<input type='text' id="branchName" placeholder='Branch Name eg. Mechanical Engineering' autofocus='autofocus'>
	</div>
	<div class="component_container">
		<input type='text' id='branchAbbreviation' placeholder='Branch Abbreviation eg. MECH, CSE, IT'>
	</div>
	<div class="component_container_small">
		<input type='button' value='   ADD   ' onclick='addBranchDetails()'>
	</div>
</form>