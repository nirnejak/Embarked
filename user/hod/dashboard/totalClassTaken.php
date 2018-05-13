<?php
	$employeeAllotment=mysqli_query($conn,"select allotment1 from employee_allotment where employee_id='$employee_id';");
	while ($employeeAllotmentRcv=mysqli_fetch_array($employeeAllotment)) {
		$employeeAllotmentVal=$employeeAllotmentRcv[0];
	}
	
	$allot1=explode("~",$employeeAllotmentVal);
	
	foreach ($allot1 as $allotment1) {
		$values=array();
		$allotment2=explode(",",$allotment1);
		
		foreach ($allotment2 as $allotment3) {
			$values[]=$allotment3;
		}

		$string="";
		
		if($values[3]>=date('Y') && $values[1]=='be') {
			$string=$values[1]."_"."year_1";
			$stringTable=$values[0].$values[1]."_"."year_1".$values[3].$values[4];
		}
		else {
			$string=$values[1]."_".$values[2];
			$stringTable=$values[0].$values[1]."_".$values[2].$values[3].$values[4];
		}

		$subject=mysqli_query($conn,"SELECT count(*) FROM $stringTable WHERE sub_id='$values[5]';");

		while($subjectRcv=mysqli_fetch_array($subject)){
			$subjectVal=$subjectRcv[0];
			echo $subjectVal;
		}
	}
?>