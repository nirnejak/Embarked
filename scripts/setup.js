function showCourseDetails(){

	if (window.XMLHttpRequest) {
        var i = new XMLHttpRequest();
    } 
    else {
        var i = new ActiveXObject("Microsoft.XMLHTTP");
    }

	i.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("step2").style = "border-top: 3px #11a9ac solid; background: #606B93;";
			document.getElementById("form_container").innerHTML = this.responseText;
			document.getElementById("form_message").innerHTML = "";
			document.getElementById("nextButton").setAttribute("onclick", "showBranchDetails()");
		}
	};
	i.open("POST","addCourseForm.php", true);
	i.send();
}

function showBranchDetails(){

	if (window.XMLHttpRequest) {
        var i = new XMLHttpRequest();
    } 
    else {
        var i = new ActiveXObject("Microsoft.XMLHTTP");
    }

	i.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("step3").style = "border-top: 3px #11a9ac solid; background: #606B93;";
			document.getElementById("form_container").innerHTML = this.responseText;
			document.getElementById("form_message").innerHTML = "";
			document.getElementById("nextButton").setAttribute("onclick", "showSubjectDetails()");
		}
	};
	i.open("POST","addBranchForm.php", true);
	i.send();
}

function showSubjectDetails(){

	if (window.XMLHttpRequest) {
        var i = new XMLHttpRequest();
    } 
    else {
        var i = new ActiveXObject("Microsoft.XMLHTTP");
    }

	i.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("step4").style = "border-top: 3px #11a9ac solid; background: #606B93;";
			document.getElementById("form_container").innerHTML = this.responseText;
			document.getElementById("form_message").innerHTML = "";
			document.getElementById("nextButton").setAttribute("onclick", "showEmployeeDetails()");
		}
	};
	i.open("POST","addSubjectForm.php", true);
	i.send();
}

function showEmployeeDetails(){

	if (window.XMLHttpRequest) {
        var i = new XMLHttpRequest();
    } 
    else {
        var i = new ActiveXObject("Microsoft.XMLHTTP");
    }

	i.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("step5").style = "border-top: 3px #11a9ac solid; background: #606B93; border-bottom-right-radius:0.7em;";
			document.getElementById("form_container").innerHTML = this.responseText;
			document.getElementById("form_message").innerHTML = "";
			document.getElementById("nextButton").setAttribute("value", " FINISH ");
			document.getElementById("nextButton").setAttribute("onclick", "FINISH()");
		}
	};
	i.open("POST","addEmployeeForm.php", true);
	i.send();
}

function FINISH(){
	document.getElementById("setup").innerHTML = "<h1><center>Setup is Complete<center></h1>";
	document.getElementById("setup").innerHTML += "Your are being redirected to login page!<br><br><br>";
	window.setTimeout(function(){ window.location = "../"; },3000);
}




function addCollegeDetails(){
	var collegeName = document.getElementById("collegeName").value;
	var collegeAbbreviation = document.getElementById("collegeAbbreviation").value;
	if (collegeName=="" || collegeAbbreviation==""){
		document.getElementById("form_message").innerHTML += "Both Fields are Mandatory<br><br>";
		return 0;
	}
	
	if (window.XMLHttpRequest) {
        var i = new XMLHttpRequest();
    } 
    else {
        var i = new ActiveXObject("Microsoft.XMLHTTP");
    }

	i.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("form_message").innerHTML += collegeName+" and "+collegeAbbreviation+" is Added<br><br>";
		}
	};
	i.open("POST","addCollege.php?college_name="+collegeName+'&college_abbriviation='+collegeAbbreviation, true);
	i.send();
}


function addCourseDetails(){
	var courseName = document.getElementById("courseName").value;
	var courseAbbreviation = document.getElementById("courseAbbreviation").value;
	if (courseName=="" || courseAbbreviation==""){
		document.getElementById("form_message").innerHTML += "Both Fields are Mandatory<br><br>";
		return 0;
	}

	if (window.XMLHttpRequest) {
        var i = new XMLHttpRequest();
    }
    else {
        var i = new ActiveXObject("Microsoft.XMLHTTP");
    }

	i.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("form_message").innerHTML += courseName+" and "+courseAbbreviation+" is Added<br><br>";
		}
	};
	i.open("POST","addCourse.php?course_name="+courseName+'&course_abbriviation='+courseAbbreviation, true);
	i.send();
}

function addBranchDetails(){
	var courseAbbreviation = document.getElementById("course").value;
	var branchName = document.getElementById("branchName").value;
	var branchAbbreviation = document.getElementById("branchAbbreviation").value;

	if (courseAbbreviation == "" || branchName == "" || branchAbbreviation == ""){
		document.getElementById("form_message").innerHTML += "All Fields are Mandatory<br><br>";
		return 0;
	}

	if (window.XMLHttpRequest) {
        var i = new XMLHttpRequest();
    }
    else {
        var i = new ActiveXObject("Microsoft.XMLHTTP");
    }

	i.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("form_message").innerHTML += branchName+" "+branchAbbreviation+" added in "+courseAbbreviation+"<br><br>";
			document.getElementById("form_message").innerHTML += this.responseText;
		}
	};
	i.open("POST","addBranch.php?course_abbriviation="+courseAbbreviation+'&branch_name='+branchName+'&branch_abbriviation='+branchAbbreviation, true);
	i.send();
}

function addSubjectDetails(){
	var courseAbbreviation = document.getElementById("course").value;
	var branchAbbreviation = document.getElementById("branch").value;
	var subjectName = document.getElementById("subjectName").value;
	var subjectAbbreviation = document.getElementById("subjectAbbreviation").value;
	var subjectId = document.getElementById("subjectId").value;
	var semester = document.getElementById("semester").value;
	var year = document.getElementById("year").value;

	if (courseAbbreviation == "" || branchAbbreviation == "" || subjectAbbreviation == "" || subjectId == "" || semester == "" || year == ""){
		document.getElementById("form_message").innerHTML += "All Fields are Mandatory<br><br>";
		return 0;
	}

	if (window.XMLHttpRequest) {
        var i = new XMLHttpRequest();
    }
    else {
        var i = new ActiveXObject("Microsoft.XMLHTTP");
    }

	i.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("form_message").innerHTML += "Subject is added into Database<br><br>";
		}
	};
	i.open("POST","addSubject.php?course="+courseAbbreviation+'&branch='+branchAbbreviation+'&subject_abbriviation='+subjectAbbreviation+'&subject_id='+subjectId+'&semester='+semester+'&year='+year+"&subject_name="+subjectName, true);
	i.send();
}

function addEmployeeDetails(){
	var employeeId = document.getElementById("employeeId").value;
	var fullName = document.getElementById("fullName").value;
	if (employeeId == "" || fullName == ""){
		document.getElementById("form_message").innerHTML += "Both Fields are Mandatory<br><br>";
		return 0;
	}

	if (window.XMLHttpRequest) {
        var i = new XMLHttpRequest();
    }
    else {
        var i = new ActiveXObject("Microsoft.XMLHTTP");
    }

	i.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("form_message").innerHTML += fullName+" added as "+employeeId+"<br><br>";
		}
	};
	i.open("POST","addEmployee.php?employee_id="+employeeId+'&full_name='+fullName, true);
	i.send();
}