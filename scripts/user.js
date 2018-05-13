function mainMenuFunction() {
    var x = document.getElementById("mainMenu");
    if (x.className === "page_card mainMenu") {
        x.className += " responsive";
    } else {
        x.className = "page_card mainMenu";
    }
}

function adminMenuFunction() {
    var x = document.getElementById("adminMenu");
    if (x.className === "page_card adminMenu") {
        x.className += " responsive";
    } else {
        x.className = "page_card adminMenu";
    }
}

class userSettings{
    static showDetails(){
        var employeeIdSession = document.getElementById("employeeIdSession").value;
        var userName = sessionStorage.getItem("userName");
        
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
        i.open("POST","user/settings/settings.php?employeeIdSession="+employeeIdSession+'&userName='+userName, true);
        i.send();
    }
    static showFormPersonal(){
        var employeeIdSession = document.getElementById("employeeIdSession").value;
        var userName = sessionStorage.getItem("userName");
        console.log(toString(3));
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
        i.open("POST","user/settings/personalDetailsForm.php?employeeIdSession="+employeeIdSession+'&userName='+userName, true);
        i.send();
    }
    static showFormProfessional(){
        var employeeIdSession = document.getElementById("employeeIdSession").value;
        var userName = sessionStorage.getItem("userName");
        console.log(toString(3));
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
        i.open("POST","user/settings/professionalDetailsForm.php?employeeIdSession="+employeeIdSession+'&userName='+userName, true);
        i.send();
    }
    static submitFormPersonal(){
        var empId=document.getElementById('EmployeeID').value;
        empId=empId.toUpperCase();
        var FName=document.getElementById('FName').value;
        var LName=document.getElementById('LName').value;
        var userName=document.getElementById('userName').value;
        var password=document.getElementById('password').value;
        var ReType=document.getElementById('ReType').value;
        var abbr=document.getElementById('abbr').value;
        var userType=document.getElementById('userType').value;
        var contactNo=document.getElementById('contactNo').value;
        var email=document.getElementById('email').value;
        var dept=document.getElementById('dept').value;
        var field=document.getElementById('field').value;

        if(password==ReType){
            if (empId!="" &&    FName!="" &&    LName!="" &&    userName!="" && abbr!="" && userType!="" && contactNo!="" &&    email!="" &&    dept!="" && field!="" && password!=""){
                var i=new XMLHttpRequest();
                i.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("display").innerHTML += this.responseText;
                    }
                };
                i.open("POST","register.php?employeeIdSession="+empId+"&username="+userName+"&password="+password+"&first_name="+FName+"&last_name="+LName+"&phone_no="+contactNo+"&department="+dept+"&email="+email+"&abbriviation="+abbr+"&field_of_teaching="+field+"&user_type="+userType, true);
                i.send();
            }
            else{
                document.getElementById("form").innerHTML+="All Fields are Mandatory";
            }
        }
        else{
            document.getElementById("form").innerHTML+="Passwords do not match";
        }
    }
}