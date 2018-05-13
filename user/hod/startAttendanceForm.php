<div class="display_page animated fadeInUp">
        <span class="heading">Start Attendance</span>
<div class="form">

    <select id="college">
	    <?php
		    include("../../db/connection.php");
	    	$college=mysqli_query($conn,"CALL display_college();");
		    echo "<option value=''>College</option>";
		    while($college_rcv=mysqli_fetch_array($college))
		    {
		        $college_val=$college_rcv[0];
		        echo "<option value='$college_val'>".$college_val."</option>";
		    }
		?>
	</select>

	<br><br>

    <select id="course">
	     <?php
	        include("../../db/connection.php");
	        $course=mysqli_query($conn,"CALL display_course();");
	        echo "<option value=''>Course</option>";
	        while($course_rcv=mysqli_fetch_array($course))
	        {
	            $course_val=$course_rcv[0];
	            echo "<option value='$course_val'>".$course_val."</option>";
	        }
	     ?>
     </select>

     <br><br>

    <select id="branch"  placeholder="branch">
        <?php
        include("../../db/connection.php");
        $branch=mysqli_query($conn,"CALL display_branch();");
        echo "<option value='0'>Branch</option>";
        while($branch_rcv=mysqli_fetch_array($branch))
        {
            $branch_val=$branch_rcv[0];
            echo "<option value='$branch_val'>".$branch_val."</option>";
        }
     ?>
    </select>

	<br><br>

    <select id="batch">
        <option value="">Batch</option>
        <?php
        $yearCurrent=(int)date('Y');
        echo "<option value='".$yearCurrent."'>".$yearCurrent."</option>";
        $yearCurrent--;
        echo "<option value='".$yearCurrent."'>".$yearCurrent."</option>";
        $yearCurrent--;
        echo "<option value='".$yearCurrent."'>".$yearCurrent."</option>";
        $yearCurrent--;
        echo "<option value='".$yearCurrent."'>".$yearCurrent."</option>";
        $yearCurrent--;
        echo "<option value='".$yearCurrent."'>".$yearCurrent."</option>";
        ?>
    </select>

	<br><br>


    <select id="section">
	    <option value="">Section</option>
	    <option value="A">A</option>
	    <option value="B">B</option>
	    <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
        <option value="G">G</option>
        <option value="H">H</option>
        <option value="I">I</option>
        <option value="J">J</option>
    </select>

	<br><br>

    <input style="width:175px" type="Button" value="START ATTENDANCE" onclick="startAttendance.submitForm()">
</div>

 <div id="show_message">
 
 </div>

 <br><br>