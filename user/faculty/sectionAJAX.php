<?php

		include("../../db/connection.php");

		$course=$_REQUEST['course'];

		$branch=$_REQUEST['branch'];

		$batch=$_REQUEST['batch'];

		

		if($batch>=date('Y') && $course=='be'){

			$TableString=$course."_"."year_1";

		}

		else{

			$TableString=$course."_".$branch;

		}



		$section=mysqli_query($conn,"SELECT DISTINCT section FROM $TableString WHERE batch=$batch AND branch='$branch';");



		echo "<select id='section'>";

		while($sectionReceive=mysqli_fetch_array($section))

		{

			echo"<option value='$sectionReceive[0]'>".strtoupper($sectionReceive[0])."</option>";

		}

		echo "</select>";

		echo "<br><br>";

?>