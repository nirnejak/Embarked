//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////             HOD             //////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////

function displayLoader(){
    document.getElementById("display").innerHTML = "<div class=\"display_page animated fadeInUp\" style='background: transparent; box-shadow: none;'>"+
        "   <div class=\"loader\" style=\"margin-top:5%;\">\n" +
        "            <div class=\"bubble\"></div>\n" +
        "            <div class=\"bubble\"></div>\n" +
        "            <div class=\"bubble\"></div>\n" +
        "            <div class=\"bubble\"></div>\n" +
        "            </div><br><br><br></div>";
}

function hodDashboard(){
    var employeeIdSession = document.getElementById("employeeIdSession").value;
    displayLoader();
    if (window.XMLHttpRequest) {
        var i = new XMLHttpRequest();
    } 
    else {
        var i = new ActiveXObject("Microsoft.XMLHTTP");
    }

    i.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("display").innerHTML = this.responseText;
        }
    };
    i.open("POST","user/hod/dashboard/dashboard.php?&employeeIdSession="+employeeIdSession, true);
    i.send();
}

class addStudent{
    static showForm(){
        var employeeIdSession = document.getElementById("employeeIdSession").value;
        displayLoader();
        if (window.XMLHttpRequest) {
            var i = new XMLHttpRequest();
        } 
        else {
            var i = new ActiveXObject("Microsoft.XMLHTTP");
        }

        i.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("display").innerHTML = this.responseText;
            }
        };
        i.open("POST","user/hod/addStudentForm.php?&employeeIdSession="+employeeIdSession, true);
        i.send();
    }
     static submitForm(){
        var college = document.getElementById('college').value;
        var course = document.getElementById('course').value;
        var batch = document.getElementById('batch').value;
        var branch = document.getElementById('branch').value;
        var section = document.getElementById('section').value;
        var studentID = document.getElementById('studentID').value;
        studentID=studentID.replace('/','');
        studentID=studentID.replace('/','');
        var name = document.getElementById('name').value;
        var phone_no = document.getElementById('phone_no').value;
        var university_roll = document.getElementById('university_roll').value;

        if(college == '' || course == '' || batch == '' || branch == '' || section == '' || studentID == '' || name == '' || phone_no == '' || university_roll == ''){
            alert("All Fields are Mandatory");
        }
        else{
            displayLoader();
            if (window.XMLHttpRequest) {
                var i = new XMLHttpRequest();
            } 
            else {
                var i = new ActiveXObject("Microsoft.XMLHTTP");
            }

            i.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("display").innerHTML = this.responseText;
                }
            };
            i.open("POST","user/hod/addStudent.php?&section="+section+'&batch='+batch+'&college='+college+'&course='+course+'&studentID='+studentID+'&name='+name+'&phone_no='+phone_no+'&university_roll='+university_roll + "&branch="+branch, true);
            i.send();
        }
    }
     static bringSection(){
          var course = document.getElementById('course').value;
          var branch = document.getElementById('branch').value;
          var batch = document.getElementById('batch').value;
          
          if (window.XMLHttpRequest) {
                var i = new XMLHttpRequest();
            } 
            else {
                var i = new ActiveXObject("Microsoft.XMLHTTP");
            }
          i.onreadystatechange=function()
          {
           if(i.readyState==4 && i.status==200)
          {
              document.getElementById("showSection").innerHTML=i.responseText; 
          }
        };
        
        i.open("GET","user/hod/sectionAJAX.php?&branch=" + branch + "&course=" + course + "&batch=" + batch,true);
        i.send();
    }
}

class delStudent{
    static showForm(){
        var employeeIdSession = document.getElementById("employeeIdSession").value;
        displayLoader();
        if (window.XMLHttpRequest) {
            var i = new XMLHttpRequest();
        } 
        else {
            var i = new ActiveXObject("Microsoft.XMLHTTP");
        }

        i.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("display").innerHTML = this.responseText;
            }
        };
        i.open("POST","user/hod/delStudentForm.php?&employeeIdSession="+employeeIdSession, true);
        i.send();
    }

     static submitForm(){
        var college = document.getElementById('college').value;
        var course = document.getElementById('course').value;
        var batch = document.getElementById('batch').value;
        var section = document.getElementById('section').value;
        var studentID = document.getElementById('studentID').value; 

        if(college == '' || course == '' || batch == '' || section == '' || studentID == ''){
            alert("All Fields are Mandatory");
        }
        else {
            displayLoader();
            if (window.XMLHttpRequest) {
                var i = new XMLHttpRequest();
            } 
            else {
                var i = new ActiveXObject("Microsoft.XMLHTTP");
            }

            i.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("display").innerHTML = this.responseText;
                }
            };
            i.open("POST","user/hod/delStudent.php?&section="+section+'&batch='+batch+'&college='+college+'&course='+course+'&studentID='+studentID, true);
            i.send();
        }
    }
     static bringSection(){
          var branch = document.getElementById('branch').value;
          var course = document.getElementById('course').value;
          var batch = document.getElementById('batch').value;
          
          if (window.XMLHttpRequest) {
                var i = new XMLHttpRequest();
            } 
            else {
                var i = new ActiveXObject("Microsoft.XMLHTTP");
            }
          i.onreadystatechange=function()
          {
           if(i.readyState==4 && i.status==200)
          {
              document.getElementById("showSection").innerHTML=i.responseText; 
          }
        };
        
        i.open("GET","user/hod/sectionAJAX.php?&branch=" + branch + "&course=" + course + "&batch=" + batch,true);
        i.send();
    }
}

class startAttendance{
    static showForm(){
        displayLoader();
        if (window.XMLHttpRequest) {
            var i = new XMLHttpRequest();
        } 
        else {
            var i = new ActiveXObject("Microsoft.XMLHTTP");
        }

        i.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("display").innerHTML = this.responseText;
            }
        };
        i.open("POST","user/hod/startAttendanceForm.php", true);
        i.send();
    }
    static submitForm(){
        var college = document.getElementById('college').value;
        var course = document.getElementById('course').value;
        var batch = document.getElementById('batch').value;
        var branch = document.getElementById('branch').value;
        var section = document.getElementById('section').value;

        displayLoader();
        if (window.XMLHttpRequest) {
            var i = new XMLHttpRequest();
        } 
        else {
            var i = new ActiveXObject("Microsoft.XMLHTTP");
        }

        i.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("display").innerHTML = this.responseText;
            }
        };
        i.open("POST","user/hod/startAttendanceReceive.php?&section="+section+'&batch='+batch+'&college='+college+'&branch='+branch+'&course='+course, true);
        i.send();
    }
}


class addBatch{
    static showForm(){
        displayLoader();
        if (window.XMLHttpRequest) {
            var i = new XMLHttpRequest();
        } 
        else {
            var i = new ActiveXObject("Microsoft.XMLHTTP");
        }

        i.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("display").innerHTML = this.responseText;
            }
        };
        i.open("POST","user/hod/addBatchForm.php", true);
        i.send();
    }
    static submitForm(){
        var college = document.getElementById('college').value;
        var course = document.getElementById('course').value;
        var batch = document.getElementById('batch').value;
        var branch = document.getElementById('branch').value;
        var section = document.getElementById('section').value;
        var noStudent = document.getElementById('noStudent').value;

        sessionStorage.setItem("noStudent", noStudent);

        displayLoader();
        if (window.XMLHttpRequest) {
            var i = new XMLHttpRequest();
        } 
        else {
            var i = new ActiveXObject("Microsoft.XMLHTTP");
        }

        i.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("display").innerHTML = this.responseText;
            }
        };
        i.open("POST","user/hod/addBatchReceive.php?number_of_students="+noStudent+'&section='+section+'&batch='+batch+'&college='+college+'&branch='+branch+'&course='+course, true);
        i.send();
    }
    static submitStudentForm(){
        //displayLoader();
        var n = parseInt(sessionStorage.getItem("noStudent"));
        for (var i = 1; i <= n; i++){
            var student_id = document.getElementById("student_id_"+i).value;
            student_id=student_id.replace('/','');
            student_id=student_id.replace('/','');
            var student_name = document.getElementById("student_name_"+i).value;
            var phone_no = document.getElementById("phone_no_"+i).value;
            var university_roll = document.getElementById("university_roll_"+i).value;

            var ii=new XMLHttpRequest();
            ii.onreadystatechange = function(){         
                if(this.readyState == 4 && this.status == 200){
                    //document.getElementById("form_message").innerHTML += student_id+"  "+student_name+"  "+phone_no+"  "+university_roll+" is added";
                    document.getElementById("form_message").innerHTML = "Values of "+n+" Students is added";
                }
            };
            ii.open("POST","user/hod/addBatchQuery.php?student_id="+student_id+'&student_name='+student_name+'&phone_no='+phone_no+'&university_roll='+university_roll, true);
            ii.send();
        }
        //document.getElementById("form_message").innerHTML += student_id+"  "+student_name+"  "+phone_no+"  "+university_roll+" is added";
    }
}