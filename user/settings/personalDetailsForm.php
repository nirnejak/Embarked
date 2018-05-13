<?php
	include("../../db/connection.php");
	$employeeIdSession=$_REQUEST['employeeIdSession'];
	$userName=$_REQUEST['userName'];
?>
<div class="display_page animated fadeInUp">
        <span class="heading">Edit your Personal Details</span>
<div class="form" id="form" style="min-width:50	%; max-width:50%;">


	<?php
        include("../../db/connection.php");
/*
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
               // if($fieldName[$i]='batch'){
               //     $getSectionObj=mysqli_query($conn,"SELECT DISTINCT section FROM ".$tableStr." WHERE employee_id='becse01';");
               // }	
            }
        }


*/

    ?>
	
	<input type='text' placeholder='Employee ID' id="EmployeeID" value="<?php echo $employeeIdSession; ?>" disabled>
	
	<br><br>
			
	<input type='text' placeholder='First Name' id="FName" style="min-width:48%; max-width:48%;" autofocus='autofocus'>
	<input type='text' placeholder='Last Name' id="LName" style="min-width:48%; max-width:48%;margin-left: 5px;">
	
	<br><br>
	
	<input type='text' placeholder='Username' id="userName" style="min-width:48%; max-width:48%;" value="<?php echo $userName; ?>" disabled>
	<input type='text' placeholder='Abbriviation' id="abbr" style="min-width:48%; max-width:48%; margin-left: 5px;">
	
	<br><br>
	
	<input type='password' placeholder='Password' id="password" style="min-width:48%; max-width:48%;">
	<input type='password' placeholder='Re-type Password' id="ReType" style="min-width:48%; max-width:48%;margin-left: 5px;">
	
	<br><br>
	
	<input type='text' placeholder='User Type eg. faculty' id="userType" style="min-width:48%; max-width:48%;">
	<input type='text' placeholder='Contact No' id="contactNo" style="min-width:48%; max-width:48%;margin-left: 5px;">
	
	<br><br>
	
	<input type='text' placeholder='Email' id="email">
	
	<br><br>
	
	<input type='text' placeholder='Department' id="dept" style="min-width:48%; max-width:48%;">
	<input type='text' placeholder='Course' id="field" style="min-width:48%; max-width:48%;margin-left: 5px;">
	
	<br><br>

    <input style="width:180px" type="Button" value="GET STUDENT LIST" onclick="userSettings.submitFormPersonal()">

    <br><br>
</div>

 <div id="show_message" style="position:absolute; left:450px; top:320px; color:#F00;">
 
 </div>

 <br><br>