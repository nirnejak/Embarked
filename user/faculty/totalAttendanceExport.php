<?php
include("../../db/connection.php");
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

if($batch>=date('Y') && $course=='be'){
$string=$college.$course."_"."year_1".$batch.$section;
$stringTable=$course."_"."year_1";
}
else{
$string=$college.$course."_".$branch.$batch.$section;  
$stringTable=$course."_".$branch;
}

  $sub_id=mysqli_query($conn,"SELECT DISTINCT sub_id FROM $string;");
  $subjectIDArray=array();
  while($sub_id_array=mysqli_fetch_array($sub_id,MYSQLI_NUM)){
    array_push($subjectIDArray, $sub_id_array[0]);
  }

    $student=mysqli_query($conn,"SELECT column_name FROM information_schema.columns WHERE table_schema='id3187617_project' AND table_name='$string' AND ordinal_position > 4;");
    $studentIDArray=array();
    while($student_rcv=mysqli_fetch_array($student,MYSQLI_NUM)){
        array_push($studentIDArray, $student_rcv[0]);
    }


  $subjectNameArray=array();
  foreach($subjectIDArray as $subjectID){
      $sub_name=mysqli_query($conn,"SELECT subject_abbriviation FROM subject_master WHERE subject_id="."'"."$subjectID"."'".";");
      while($sub_name_rcv=mysqli_fetch_array($sub_name,MYSQLI_NUM)){
        array_push($subjectNameArray, $sub_name_rcv[0]);
      }
  }
   
    $output='';
    $output.='<table>';
     $output.='<tr>';
    $output.= '<th>Name</th>'; //Leaving Column for Student Name
    foreach ($subjectNameArray as $subjectName){
        $output.= '<th>'.$subjectName.'</th>';
    }
     $output.='<th>Total</th>';
     $output.='<th>Percent</th>';
     $output.='</tr>';

     $output.='<tr>';
     $output.='<td></td>';
    $maximum=0;
    foreach ($subjectIDArray as $subjectID){
        include("../../db/connection.php");
        $getTotalClass=mysqli_query($conn,"SELECT count(*) FROM $string WHERE date BETWEEN $date1 AND $date2 AND sub_id='".$subjectID."';");
        $getTotalClassReceive=mysqli_fetch_array($getTotalClass);
        $maximum+=$getTotalClassReceive[0];
        $output.='<td><b><u><center>'.$getTotalClassReceive[0].'</center></u></b></td>';
    }
     $output.='<td><b><u><center>'.$maximum.'</center></u></b></td>';
     $output.='<td><b><u><center>100%</center></u></b></td>';
     $output.='</tr>';




  foreach ($studentIDArray as $studentID) {
      $output.='<tr>';

      include("../../db/connection.php");
      $selectStudentName=mysqli_query($conn,"SELECT student_name FROM $stringTable WHERE student_id='".$studentID."';");
      $selectStudentNameReceive=mysqli_fetch_array($selectStudentName);
      $output.= '<td>'.$selectStudentNameReceive[0].'</td>';
      $total=0;
      foreach ($subjectIDArray as $subjectID) {
          include("../../db/connection.php");
          $select_sum=mysqli_query($conn,"SELECT sum($studentID) FROM $string WHERE date BETWEEN $date1 AND $date2 AND sub_id='$subjectID';");
         
          $select_sum_rcv=mysqli_fetch_array($select_sum); //array store sum for particular subject
          $total+=$select_sum_rcv[0];
          $output.= '<td><center>'.$select_sum_rcv[0].'</center></td>';
      }
      $percent=($total/$maximum)*100;
      $output.= '<td><b><center>'.$total.'</center></b></td>';
       $output.='<td><b><center>'.$percent.'%</center></b></td>';
       $output.='</tr>';
  }
  $output.= '</table>';
   header("Content-Type: application/xls");
  header("Content-Disposition: attachment; filename=download.xls");
  echo $output;
 
?>