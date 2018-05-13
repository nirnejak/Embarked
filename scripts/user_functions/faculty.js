//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////             Faculty             //////////////////////////////////
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


function facultyDashboard(){
    if (window.XMLHttpRequest) {
        var i = new XMLHttpRequest();
    } 
    else {
        var i = new ActiveXObject("Microsoft.XMLHTTP");
    }
    displayLoader();
    i.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("display").innerHTML = this.responseText;
        }
    };
    i.open("POST","user/faculty/dashboard/dashboard.php", true);
    i.send();
}

class feedAttendance{
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
        i.open("POST","user/faculty/feedAttendanceForm.php?&employeeIdSession="+employeeIdSession, true);
        i.send();
    }

    static submitForm(Allotmentstr){
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
            i.open("POST","user/faculty/feedAttendanceReceive.php?&mainString="+Allotmentstr, true);
            i.send();
        
    }

    static submitAttendanceForm(){
        var lectureNo = document.getElementById('lec_no').value;
        var date = document.getElementById('date').value;

        if(lectureNo=='' || date==''){
            alert("Your Need to Enter Date and Lecture Number");
        }
        else{
            var stringVar = document.getElementById('string').value;

            var noStudent = document.getElementById('noStudent').value;
            var employeeIdSession = document.getElementById("employeeIdSession").value;

            var stringAttd="";

            for (var i = 1; i <= noStudent; i++) {
                var val = document.getElementById('attendance_'+i);
                if(val.checked==true){
                    if (stringAttd=="(")
                        stringAttd+='1';
                    else
                        stringAttd+=","+'1';
                }
                else{
                    if (stringAttd=="(")
                        stringAttd+='0';
                    else
                        stringAttd+=","+'0';
                }
            }
            stringAttd+=")";

            date=date.replace('-','');
            date=date.replace('-','');

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
            i.open("POST","user/faculty/feedAttendanceQuery.php?&lec_no="+lectureNo+'&date='+date+'&attendanceString='+stringAttd+'&stringTableName='+stringVar+"&employeeIdSession="+employeeIdSession, true);
            i.send();
        }
    }        
}

class updateAttendance{
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
        i.open("POST","user/faculty/updateAttendance.php?&employeeIdSession="+employeeIdSession, true);
        i.send();
    }
    static submitForm(){
        var studentID = document.getElementById('studentID').value;
        studentID=studentID.replace('/','');
        studentID=studentID.replace('/','');
        var lectureNo = document.getElementById('lectureNo').value;
        var date = document.getElementById('date').value;
        var employeeIdSession = document.getElementById("employeeIdSession").value;
        var section = document.getElementById('section').value;
        var college = document.getElementById('college').value;
        var course = document.getElementById('course').value;
        var subject = document.getElementById('subject').value;
        var branch = document.getElementById('branch').value;
        var batch = document.getElementById('batch').value;
        
        if(studentID=='' || lectureNo=='' || date=='' || section=='' || college=='' || course=='' || subject=='' || branch=='' || batch==''){
            alert("All Fields are Mandatory");
        }
        else{
            var attendance=0;
            var val = document.getElementById('attendance');
            if(val.checked==true){
                attendance=1;
            }
            else{
                attendance=0;
            }

            date=date.replace('-','');
            date=date.replace('-','');

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
            i.open("POST","user/faculty/updateAttendanceReceive.php?&lec_no="+lectureNo+'&date='+date+"&employeeIdSession="+employeeIdSession+'&section='+section+'&college='+college+'&studentID='+studentID+'&subject='+subject+'&attendance='+attendance +'&course=' +course + "&branch=" + branch + "&batch=" + batch, true);
            i.send();
        }
    }        
}

class daywiseAttendanceReport{
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
        i.open("POST","user/faculty/daywiseAttendanceReportForm.php?&employeeIdSession="+employeeIdSession, true);
        i.send();
    }
    static submitForm(Allotmentstr){
        var dateFrom = document.getElementById('dateFrom').value;
            dateFrom=dateFrom.replace('-','');
            dateFrom=dateFrom.replace('-','');
        var dateTo = document.getElementById('dateTo').value;
            dateTo=dateTo.replace('-','');
            dateTo=dateTo.replace('-','');

            var urlStringData="&dateFrom="+dateFrom+"&dateTo="+dateTo+"&mainString="+Allotmentstr;
            var urlString = "user/faculty/daywiseAttendanceReport.php?"+urlStringData;
            console.log(urlString);

            document.getElementById("display_page").innerHTML = "<span class=\"heading\">Daywise Attendance Report</span>"
            +"<iframe src=\""+urlString+"\" id=\"ReportFrame\" style=\"width: 100%; /*margin-top:1.7%;*/ height:83vh; overflow: scroll; border: transparent;\"></iframe>"
            +"<div class=\"form\" id=\"form\" style=\"margin-top:0.5%;\">"
            +"<form method=\"post\" action=\"user/faculty/daywiseAttendanceExport.php?"
            +urlStringData
            +"\">"
            +"<input style=\"width:100px\" type=\"Button\" value=\"PRINT\" onclick=\"printDoc()\"><br><br>"
            +"<input style=\"width:160px\" type=\"submit\" value=\"EXPORT IN EXCEL\">"
            +"</div>";
        
    }
}

function printDoc(){
    document.getElementById("ReportFrame").contentWindow.print();
}
class blacklistedStudents{
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

        i.open("POST","user/faculty/blacklistedStudents.php?&employeeIdSession="+employeeIdSession, true);
        i.send();
    }
    static submitForm(){
        var college = document.getElementById('college').value;
        var course = document.getElementById('course').value;
        var batch = document.getElementById('batch').value;
        var branch = document.getElementById('branch').value;
        var section = document.getElementById('section').value;
        var subjectID = document.getElementById('subject').value;

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
        i.open("POST","user/faculty/feedAttendanceReceive.php?&section="+section+'&batch='+batch+'&college='+college+'&branch='+branch+'&course='+course+'&subject_id='+subjectID+"&employeeIdSession="+employeeIdSession, true);
        i.send();
    }
}
class totalAttendance{
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
        i.open("POST","user/faculty/totalAttendanceForm.php?&employeeIdSession="+employeeIdSession, true);
        i.send();
    }
    static submitForm(){
        var dateFrom = document.getElementById('dateFrom').value;
            dateFrom=dateFrom.replace('-','');
            dateFrom=dateFrom.replace('-','');
        var dateTo = document.getElementById('dateTo').value;
            dateTo=dateTo.replace('-','');
            dateTo=dateTo.replace('-','');

        var employeeIdSession = document.getElementById("employeeIdSession").value;
            var urlStringData="&employeeIdSession="+employeeIdSession+"&dateFrom="+dateFrom+"&dateTo="+dateTo;
            var urlString = "user/faculty/totalAttendanceReport.php?"+urlStringData;
            console.log(urlString);

            document.getElementById("display_page").innerHTML = "<span class=\"heading\">Total Attendance Report</span>"
            +"<iframe src=\""+urlString+"\" id=\"ReportFrame\" style=\"width: 100%; /*margin-top:1.7%;*/ height:83vh; overflow: scroll; border: transparent;\"></iframe>"
            +"<div class=\"form\" id=\"form\" style=\"margin-top:0.5%;\">"
            +"<form method=\"post\" action=\"user/faculty/totalAttendanceExport.php?"
            +urlStringData
            +"\">"
            +"<input style=\"width:100px\" type=\"Button\" value=\"PRINT\" onclick=\"printDoc()\"><br><br>"
            +"<input style=\"width:160px\" type=\"submit\" value=\"EXPORT IN EXCEL\">"
            +"</div>";
        
    }
}