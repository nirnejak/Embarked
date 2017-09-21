// This file contains all the functions related to hod

function dashboard(){
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
    i.open("POST","user/hod/dashboard.php", true);
    i.send();
}

function addDelStudent(){
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
    i.open("POST","user/hod/addDelStudent.php", true);
    i.send();
}

function startAttendance(){
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
    i.open("POST","user/hod/startAttendance.php", true);
    i.send();
}


class addBatch{
    static showForm(){
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

