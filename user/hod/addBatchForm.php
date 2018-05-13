<div class="display_page animated fadeInUp">
        <span class="heading">Add New Batch</span>
<div class="form">

    <select id="college">
	    <?php
		    include("../../db/connection.php");
	    	$college=mysqli_query($conn,"call display_college();");
		    echo "<option value=''>College</option>";
		    while($college_rcv=mysqli_fetch_array($college))
		    {
		        $college_val=$college_rcv[0];
		        echo "<option value='$college_val'>".strtoupper($college_val)."</option>";
		    }
		?>
	</select>

	<br><br>

    <select id="course">
     <?php
        include("../../db/connection.php");
        $course=mysqli_query($conn,"call display_course();");
        echo "<option value=''>Course</option>";
        while($course_rcv=mysqli_fetch_array($course))
        {
            $course_val=$course_rcv[0];
            echo "<option value='$course_val'>".strtoupper($course_val)."</option>";
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

    <select id="branch"  placeholder="branch">
        <?php
        include("../../db/connection.php");
        $branch=mysqli_query($conn,"call display_branch();");
        echo "<option value='0'>Branch</option>";
        while($branch_rcv=mysqli_fetch_array($branch))
        {
            $branch_val=$branch_rcv[0];
            echo "<option value='$branch_val'>".strtoupper($branch_val)."</option>";
        }
     ?>
    </select>

	<br><br>

    <select name="section" id="section">
	    <option value="">Section</option>
	    <option value="A">A</option>
	    <option value="B">B</option>
	    <option value="C">C</option>
    </select>

	<br><br>

    <input type="number" id="noStudent" placeholder="Number of students">

	<br><br>

    <input style="width:120px" type="Button" value="ADD BATCH" onclick="addBatch.submitForm()">
</div>

 <div id="show_message">
 
 </div>

 <br><br>