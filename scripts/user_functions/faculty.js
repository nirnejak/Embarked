// This file contains all the functions related to faculty

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
    i.open("POST","user/faculty/dashboard.php", true);
    i.send();
}

function feedAttendance(){
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
    i.open("POST","user/faculty/feedAttendance.php", true);
    i.send();
}

function updateAttendance(){
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
    i.open("POST","user/faculty/updateAttendance.php", true);
    i.send();
}

function generateReport(){
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
    i.open("POST","user/faculty/generateReport.php", true);
    i.send();
}

function blacklistedStudents(){
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
    i.open("POST","user/faculty/blacklistedStudents.php", true);
    i.send();
}

function totalAttendance(){
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
    i.open("POST","user/faculty/totalAttendance.php", true);
    i.send();
}

function user_settings(){
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
    i.open("POST","user/faculty/settings.php", true);
    i.send();
}