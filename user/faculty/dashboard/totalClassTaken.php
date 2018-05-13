<?php
/*	include("connection.php");
	//$employee_id=$_REQUEST['employeeIdSession'];
	$employee_id='becse01';
	$fieldName = array('college','course','batch','subject','branch');
	$employeeRecord=mysqli_query($conn,"SELECT ".join(",",$fieldName)."  FROM employee_allotment WHERE employee_id='$employee_id';");
        
	while($employeeRecordVar=mysqli_fetch_array($employeeRecord)) {
		$college=$employeeRecordVar[0];
		$course=$employeeRecordVar[1];
		$batch=$employeeRecordVar[2];
		$subject=$employeeRecordVar[3];
		$branch=$employeeRecordVar[4]; 
	}

	$college = explode(",",$college); 
	$course  = explode(",",$course) ; 
	$batch   = explode(",",$batch) ; 
	$subject = explode(",",$subject) ; 
	$branch  = explode(",",$branch) ;
	
	foreach ($college as $cllgVal) {
		foreach ($course as $crsVal) {
			foreach ($batch as $batchVal) {
				foreach ($branch as $branchVal) {
					foreach ($subject as $subjectVal) {
						$string="";
						
						if($batchVal>=date('Y') && $crsVal=='be') {
							$string=$crsVal."_"."year_1";
						}
						else{
							$string=$crsVal."_".$branchVal;
						}
						
						$section=mysqli_query($conn,"select DISTINCT section from $string where batch='$batchVal';");
                        
						while($section_rcv=mysqli_fetch_array($section)) {
							$section_val=$section_rcv[0];
							$stringTable="";
							
							if($batchVal>=date('Y') && $crsVal=='be'){
								$stringTable=$cllgVal.$crsVal."_"."year_1".$batchVal.$section_val;
							}  
							else{
								$stringTable=$cllgVal.$crsVal."_".$branchVal.$batchVal.$section_val;
							} 	

							$classTaken=mysqli_query($conn,"select count(*) from $stringTable where sub_id='$subjectVal';");
							
							while($classTakenRcv=mysqli_fetch_array($classTaken)) {
								$classTakenVal=$classTakenRcv[0];
								
								$subject_name=mysqli_query($conn,"select subject_name from subject_master where subject_id='$subjectVal';");
								
								while($subject_name_rcv=mysqli_fetch_array($subject_name)) {
									$subject_name_val=$subject_name_rcv[0];
									echo "total classes taken in $cllgVal college in $subject_name_val subject is $classTakenVal <br>";
								}
							}
						}                         	   	   	  
					}
				}
			}
		}
	} */
?>


 <?php
	//$employee_id=$_REQUEST['employeeIdSession'];
	$employeeID='demo';	  
	$employeeAllotment=mysqli_query($conn,"select allotment1 from employee_allotment where employee_id='$employeeID';");
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
			echo $stringTable;
		}
		else {
			$string=$values[1]."_".$values[2];
			$stringTable=$values[0].$values[1]."_".$values[2].$values[3].$values[4];
			echo $stringTable;    
		}

		$subject=mysqli_query($conn,"SELECT count(*) FROM $stringTable WHERE sub_id='$values[5]';");
		while($subjectRcv=mysqli_fetch_array($subject)){
			$subjectVal=$subjectRcv[0];
			echo $subjectVal;
		}
	}
?>