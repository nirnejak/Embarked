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
        


  session_start();

  //$mainString=$_REQUEST['mainString'];
  $mainString='rcet,be,cse,2015,a,322155(22)';
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
    $subject=$allot[5];


        $string="";
        $stringTable="";

        if($batch>=date('Y') && $course=='be') {
          $string=$college.$course."_"."year_1".$batch.$section;
          $stringTable=$course."_"."year_1";
        }

        else {
          $string=$college.$course."_".$branch.$batch.$section;  
          $stringTable=$course."_".$branch;
        }

          $sub_id=mysqli_query($conn,"SELECT DISTINCT sub_id FROM $string;");
          $subjectIDArray=array();
          while($sub_id_array=mysqli_fetch_array($sub_id,MYSQLI_NUM)) {
            array_push($subjectIDArray, $sub_id_array[0]);
          }

            $student=mysqli_query($conn,"SELECT column_name FROM information_schema.columns WHERE table_schema='id3187617_project' AND table_name='$string' AND ordinal_position > 4;");
            $studentIDArray=array();
            while($student_rcv=mysqli_fetch_array($student,MYSQLI_NUM)){
                array_push($studentIDArray, $student_rcv[0]);
            }


          $subjectNameArray=array();
          foreach($subjectIDArray as $subjectID) {
              $sub_name=mysqli_query($conn,"SELECT subject_abbriviation FROM subject_master WHERE subject_id="."'"."$subjectID"."'".";");
              while($sub_name_rcv=mysqli_fetch_array($sub_name,MYSQLI_NUM)) {
                array_push($subjectNameArray, $sub_name_rcv[0]);
              }
          }


            echo "<table cellspacing='0'>";
          
            // Printing Name of Subjects
            echo "<tr>";
            echo "<th rowspan='2'>Name</th>"; //Leaving Column for Student Name
            foreach ($subjectNameArray as $subjectName) {
                echo "<th>".$subjectName."</th>";
            }
            echo "<th>Total</th>";
            echo "<th rowspan='2'>Percent</th>";
            echo "</tr>";

            //Printing Total No of Classes
            echo "<tr>";
            $maximum=0;
            foreach ($subjectIDArray as $subjectID) {
                include("../../db/connection.php");
                $getTotalClass=mysqli_query($conn,"SELECT count(*) FROM $string WHERE date BETWEEN $date1 AND $date2 AND sub_id='".$subjectID."';");
                $getTotalClassReceive=mysqli_fetch_array($getTotalClass);
                $maximum+=$getTotalClassReceive[0];
                echo "<td align='center'>(".$getTotalClassReceive[0].")</td>";
            }
            echo "<td align='center'>(".$maximum.")</td>";
            echo "</tr>";

          foreach ($studentIDArray as $studentID) {
              echo "<tr>";

              include("../../db/connection.php");
              $selectStudentName=mysqli_query($conn,"SELECT student_name FROM $stringTable WHERE student_id='".$studentID."';");
              $selectStudentNameReceive=mysqli_fetch_array($selectStudentName);
              echo "<td>&nbsp;".$selectStudentNameReceive[0]."</td>";
              $total=0;

              foreach ($subjectIDArray as $subjectID) {
                  include("../../db/connection.php");
                  $select_sum=mysqli_query($conn,"SELECT sum($studentID) FROM $string WHERE date BETWEEN $date1 AND $date2 and sub_id='$subjectID';");
                  $select_sum_rcv=mysqli_fetch_array($select_sum); //array store sum for particular subject
                  $total+=$select_sum_rcv[0];
                  echo "<td align='center'>".$select_sum_rcv[0]."</td>";
              }

              $percent=($total/$maximum)*100;

              echo "<td align='center'><b>".$total."</b></td>";
              echo "<td align='center'><b>";
              echo round($percent,0);
              echo "%</b></td>";
              echo "</tr>";
          }
          echo "</table>";

      ?>
  </body>
</html>