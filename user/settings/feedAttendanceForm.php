<div class="display_page animated fadeInUp">
        <span class="heading">Feed Attendance</span>
<div class="form" id="form">


	<?php
        include("../../db/connection.php");

        $fieldName = array('college','course','branch','batch','subject');
        $employeeRecord=mysqli_query($conn,"SELECT ".join(",",$fieldName)."  FROM employee_allotment WHERE employee_id='becse01';");

        while($employeeRecordVar=mysqli_fetch_array($employeeRecord)){
            for($i=0,$fieldName; $i<count($fieldName); $i++){
                if(count(explode(',',$employeeRecordVar[$i]))==1){
                    echo "<input type='hidden' value='".explode(',',$employeeRecordVar[$i])[0]."' id='".$fieldName[$i]."'>\n\n";
                }
                else {
                    echo "<select id='".$fieldName[$i]."'>\n";
                    echo "\t<option value=''>".strtoupper($fieldName[$i])."</option>\n";
                    foreach (explode(',',$employeeRecordVar[$i]) as $Fieldvalue){
                        echo "\t<option value='".$Fieldvalue."'>".strtoupper($Fieldvalue)."</option>\n";
                    }
                    echo "</select>\n";
                    echo "<br><br>\n\n";
                }
               /* if($fieldName[$i]='batch'){
                    $getSectionObj=mysqli_query($conn,"SELECT DISTINCT section FROM ".$tableStr." WHERE employee_id='becse01';");
                }*/
            }
        }



    ?>

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

    <input style="width:180px" type="Button" value="GET STUDENT LIST" onclick="feedAttendance.submitForm()">
</div>

 <div id="show_message" style="position:absolute; left:450px; top:320px; color:#F00;">
 
 </div>

 <br><br>