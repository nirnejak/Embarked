<div class="display_page animated fadeInUp">
    <span class="heading">Update Attendance</span>
    <div class="form" id="form" style="margin-top: 0.5%">
        Enter Date<br><br>
        <input type="date" id="date" placeholder="Date">

        <br><br>

        <input type="text" id="studentID" placeholder="Student ID">

        <br><br>
        <select id="lectureNo" onchange="updateAttendance.bringSection()">
            <option value="">Lecture Number</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>

        <br><br><br>

        <center>
        <div class="checkboxFour">
            <input type="checkbox" value="1" id="attendance" name="" checked>
            <label for="attendance" style=""></label>
        </div>
        </center>
    </div>

    <?php
        echo "Select Class<br><br>";
            
        include("../../db/connection.php");
        $employee_id=$_REQUEST['employeeIdSession'];

        $employeeAllotment=mysqli_query($conn,"SELECT allotment1 FROM employee_allotment WHERE employee_id='$employee_id';");
        while ($employeeAllotmentRcv=mysqli_fetch_array($employeeAllotment)) {
            $employeeAllotmentVal=$employeeAllotmentRcv[0];
        }
         
        $allot1=explode("~",$employeeAllotmentVal);
        foreach ($allot1 as $allotment1) {
            echo "<div class=\"formCards\" onclick=\"updateAttendance.submitForm('".$allotment1.";')\">";
            $arr=explode(",", $allotment1);
            echo "<br>";
            echo strtoupper($arr[0])."&nbsp;&nbsp;&nbsp";
            echo strtoupper($arr[1])."&nbsp;&nbsp;&nbsp";
            echo strtoupper($arr[2])."&nbsp;&nbsp;&nbsp";
            echo $arr[3]."&nbsp;&nbsp;&nbsp";
            $subject=mysqli_query($conn,"SELECT subject_abbriviation FROM subject_master WHERE subject_id='$arr[5]'");
            while($subjectRcv=mysqli_fetch_array($subject)){
                $subjectVal=$subjectRcv[0];
                echo $subjectVal."&nbsp;&nbsp;&nbsp";
            }
            echo strtoupper($arr[4]);
            echo "<br><br>";
            echo "</div>";
            echo "<br>";
        }
    ?>
    <br><br>

    <div id="show_message">

    </div>
</div>

    <br><br>