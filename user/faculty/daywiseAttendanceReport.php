<html>
    <head>
        <style>
            table {
                border: 1px black solid;
                font-family: "Times New Roman";
            }
            table td{
                border: 1px black solid;
                padding: 3px;
            }
            table th{
                border: 1px black solid;
                padding: 5px;
            }
        </style>
        <meta name="viewport" content="width=device-width,initial-scale=1">
    </head>

    <body style="background: white;">
		<?php
			include("../../db/connection.php");
			
			$mainString=$_REQUEST['mainString'];
            $date2=$_REQUEST['dateTo'];
            $date1=$_REQUEST['dateFrom'];
            $allot=array();
            $arr=explode(",", $mainString);
            foreach ($arr as $allotment) {
                   $allot[]=$allotment;
            }
		    $college=$allot[0];
		    $course=$allot[1];
		    $branch=$allot[2];
		    $batch=$allot[3];
		    $section=$allot[4];
		    $subject_id=$allot[5];

	

			$string="";
			$stringTable="";
			if($batch>=date('Y') && $course=='be'){
				$string=$college.$course."_"."year_1".$batch.$section;
				$stringTable=$course."_"."year_1";
			}
			else{
				$string=$college.$course."_".$branch.$batch.$section;  
				$stringTable=$course."_".$branch;
			}

			echo "<table cellspacing='0' border='1' bordercolor='black'>";
			include("../../db/connection.php");

			 $date=mysqli_query($conn,"SELECT date FROM"." "."$string"." ". "WHERE date BETWEEN"." "."$date1"." "."AND"." "."$date2"." "."AND sub_id="."'"."$subject_id"."'".";");

			 echo "\n\t<tr>\n\t\t<th>Name</th>";
			while($date_rcv=mysqli_fetch_array($date)){
			    $date_val=$date_rcv[0];
			    echo "\n\t\t<th>".$date_val."</th>";
			 }

			echo "\n\t</tr>";
			$student_id=mysqli_query($conn,"SELECT column_name FROM information_schema.columns WHERE table_schema='id3187617_project' AND table_name='$string' AND ordinal_position > 4;");
			while($student_id_rcv=mysqli_fetch_array($student_id)) {
			    include("../../db/connection.php");  
			    $student_id_val=$student_id_rcv[0];
			    $student_name=mysqli_query($conn,"SELECT student_name FROM"." "."$stringTable"." "."WHERE student_id="."'"."$student_id_val"."'".";");
			    $student_name_rcv=mysqli_fetch_array($student_name);
			    $student_name_val=$student_name_rcv[0]; 
			    echo "\n\t<tr>";
			    echo "\n\t\t<td>&nbsp;".$student_name_val."</td>";
			    $attendance=mysqli_query($conn,"SELECT"." "."$student_id_val"." "."FROM"." "."$string"." "." WHERE date BETWEEN"." "."$date1"." "."AND"." "."$date2"." "."AND sub_id="."'"."$subject_id"."'".";");
			     
			    while($attendance_rcv=mysqli_fetch_array($attendance)){
			        $attendance_val=$attendance_rcv["$student_id_val"];
			    	    if($attendance_val=="0"){
			                echo "\n\t\t<td align='center'>A</td>";
			            }
			            else{
			                echo "\n\t\t<td align='center'>P</td>";
			            }
			    }
			    echo "\n\t</tr>";
			}
			echo "\n</table>";
		?>
</body>
</html>