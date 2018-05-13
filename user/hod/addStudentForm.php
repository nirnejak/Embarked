<div class="display_page animated fadeInUp">
    <span class="heading">Add Student</span>
    <div class="form" id="form" style="margin-top: 0.5%"    >
        
        

       <?php
            include("../../db/connection.php");
            $employee_id=$_REQUEST['employeeIdSession'];

            $fieldName = array('college','course','batch','branch');
            $employeeRecord=mysqli_query($conn,"SELECT ".join(",",$fieldName)."  FROM employee_allotment WHERE employee_id='$employee_id';");
        
            while($employeeRecordVar=mysqli_fetch_array($employeeRecord)) {
                for($i=0,$fieldName; $i<count($fieldName); $i++) {
                      $employeeRecordArray=explode(',',$employeeRecordVar[$i]);
                    if($fieldName[$i]=='subject'){
                        if(count($employeeRecordArray)==1){
                            echo "<input type='hidden' value='".$employeeRecordArray[0]."' id='".$fieldName[$i]."'>\n\n";
                        }
                        else {
                            include("../../db/connection.php");
                            echo "<select id='".$fieldName[$i]."'>\n";
                            echo "\t<option value=''>".strtoupper($fieldName[$i])."</option>\n";
                            foreach ($employeeRecordArray as $Fieldvalue){
                                // $Fieldvalue
                                $subject_name=mysqli_query($conn,"SELECT subject_abbriviation FROM subject_master WHERE subject_id='$Fieldvalue';");
                                while($subject_rcv=mysqli_fetch_array($subject_name)){
                                    $subject_name_rcv=$subject_rcv[0];
                                echo "\t<option value='".$Fieldvalue."'>".strtoupper($subject_name_rcv)."</option>\n";
                            }
                            }
                            echo "</select>\n";
                            echo "<br><br>\n\n";
                        }
                    }

                    else {
                        if(count($employeeRecordArray)==1){
                            echo "<input type='hidden' value='".$employeeRecordArray[0]."' id='".$fieldName[$i]."'>\n\n";
                        }
                        else {
                            echo "<select id='".$fieldName[$i]."'>\n";
                            echo "\t<option value=''>".strtoupper($fieldName[$i])."</option>\n";
                            foreach ($employeeRecordArray as $Fieldvalue){
                                echo "\t<option value='".$Fieldvalue."'>".strtoupper($Fieldvalue)."</option>\n";
                            }
                            echo "</select>\n";
                            echo "<br><br>\n\n";
                        }
                    }
                }
            }
        ?>
        
        <input type="text" id="studentID" placeholder="Student ID"  >
        <br><br>
        <input type="text" id="name" placeholder="Student Name"  >
        <br><br>
        <input type="text" id="phone_no" placeholder="Phone Number"  >
        <br><br>
        <input type="text" id="university_roll" placeholder="University Roll No"  >
        <br><br>

        <div id="showSection">
            <input type="text" id="section" placeholder="Section" onclick="delStudent.bringSection()" oninput="delStudent.bringSection()" onfocus="delStudent.bringSection()" >
        </div>

        
        <br><br>

        <input style="width:140px" type="Button" value="ADD STUDENT" onclick="addStudent.submitForm()">
        <br><br>
    </div>

    <div id="show_message">

    </div>
</div>

    <br><br>