<div class="display_page animated fadeInUp">
        <span class="heading settings-heading">User Settings</span>

        <br><br><br><br>

        <table width="80%" cellspacing="0px;" cellpadding="2px" id="recordDisplay">
	    <tr bgcolor="#606B93" height="40px;">
	      <th width="50%" style="border-top-left-radius: 1em;"></th>
	      <th width="50%" style="border-top-right-radius: 1em;"></th>
	    </tr>

			 <?php
	        	$employeeID=$_REQUEST['employeeIdSession'];
	        	$userName=$_REQUEST['userName'];

	        	include("../../db/connection.php");

	        	$getUserTypeObj=mysqli_query($conn,"SELECT user_type FROM user_master WHERE username='".$userName."';");

	        	$arr=array($employeeID,"First Name","Last Name","Department","Phone No","Email");
	        	while($getUserTypeReceive=mysqli_fetch_array($getUserTypeObj)){
	        		$getUserDetailsObj=mysqli_query($conn,"SELECT * FROM ".$getUserTypeReceive[0]." WHERE employee_id='".$employeeID."';");

	        		while($getUserDetailsReceive=mysqli_fetch_array($getUserDetailsObj)){
	        			for($i=1;$i<5;$i++){
	        				echo "<tr>";
	        				echo "<td>".$arr[$i]."</td>";
	        				echo "<td>".strtoupper($getUserDetailsReceive[$i])."</td>";
	        				echo "</tr>";
	        			}
	        			echo "<tr>";
	        			echo "<td>".$arr[5]."</td>";
	        			echo "<td>".$getUserDetailsReceive[$i]."</td>";
	        			echo "</tr>";
	        			
	        		}
	        	}

	        	$getUserDetailsObj=mysqli_query($conn,"SELECT * FROM employee_allotment WHERE employee_id='".$employeeID."';");
	        ?>
			<tr><td colspan="2" style="border-bottom-right-radius: 1em; border-bottom-left-radius: 1em;"><br></td><tr>
		</table>
		

		<div class="form" id="form" style="margin-top: 0.5%;">
			<input style="width:227px" type="Button" value="EDIT PERSONAL DETAILS" onclick="userSettings.showFormPersonal()">
			<br><br>
			<input style="width:236px" type="Button" value="EDIT PROFESSIONAL DETAILS" onclick="userSettings.showFormProfessional()">
		
		</div>

        <br>
        <br>
        <br>
        <br>
</div>


