<div class="display_page animated fadeInUp">
        <span class="heading">Enter Student Details</span>
<div class="form">

<?php
    $number_of_students=$_REQUEST['number_of_students'];
    $section=$_REQUEST['section'];
    $batch=$_REQUEST['batch'];
    $college=$_REQUEST['college'];
    $branch=$_REQUEST['branch'];
    $course=$_REQUEST['course'];

    echo $number_of_students.$section.$batch.$college.$branch.$course;

    $_SESSION['number_of_students']=$number_of_students;
    $_SESSION['section']=$section;
    $_SESSION['batch']=$batch;
    $_SESSION['college']=$college;
    $_SESSION['branch']=$branch;
    $_SESSION['course']=$course;
?>
 
<?php
    echo"<input type='hidden' id='hid' value='$number_of_students'>";
    for($i=1;$i<=$number_of_students;$i++)
    {
        echo "<input type='text' id='student_id_".$i."' placeholder='Student ID ".$i."'>";
        echo "<input type='text' id='student_name_".$i."' placeholder='Student Name ".$i."'>";
        echo "<input type='number' id='phone_no_".$i."' placeholder='Contact No ".$i."'>";
        echo "<input type='number' id='university_roll_".$i."' placeholder='University Roll No ".$i."'>";
        echo "<br><br><br>";
    }
?>


    <input style="width:140px" type="Button" value="ADD STUDENTS" onclick="addBatch.submitStudentForm()">
</div>

 <div id="form_message" style="color:#f1f1f1; clear:both;">
 
 </div>

 <br><br>