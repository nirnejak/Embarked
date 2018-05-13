function displayLoginLoader(){
    document.getElementById("content").innerHTML = "   <div class=\"loader\" style=\"margin-top:25%;\">\n" +
        "	<div class=\"bubble\"></div>\n" +
        "	<div class=\"bubble\"></div>\n" +
        "	<div class=\"bubble\"></div>\n" +
        "	<div class=\"bubble\"></div>\n" +
        "</div><br><br><br></div>";
}

// checkLogin function : checks login sessions
function checkLogin(){
	user = sessionStorage.getItem("userName");
	password = sessionStorage.getItem("userPsw");
	
	if(user!=null && password !== null){
		displayLoginLoader();
		if (window.XMLHttpRequest) {
        	var i = new XMLHttpRequest();
    	}
    	else {
        	var i = new ActiveXObject("Microsoft.XMLHTTP");
    	}
		i.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				if (typeof(Storage) !== "undefined") {
				    sessionStorage.setItem("userName", user);
				    sessionStorage.setItem("userPsw", password);
				}
				document.getElementById("content").innerHTML = this.responseText;
			}
		};
		i.open("POST","user/login.php?username="+user+'&password='+password, true);
		i.send();
	}
	else{
		document.getElementById("content").innetHTML = "";
	}

}

// login
function loginFunction(){
	var user = document.getElementById("username").value;
	if (user==""){
		document.getElementById("content").innerHTML += "<br><br><font color='#f1f1f1'>Please Enter Username!</font>";
		return 0;
	}
	var password = document.getElementById("password").value;

	displayLoginLoader();
	if (window.XMLHttpRequest) {
        var i = new XMLHttpRequest();
    } 
    else {
        var i = new ActiveXObject("Microsoft.XMLHTTP");
    }
    
	i.onreadystatechange = function(){	
		if(this.readyState == 4 && this.status == 200){
			if (typeof(Storage) !== "undefined") {
			    sessionStorage.setItem("userName", user);
			    sessionStorage.setItem("userPsw", password);
			}
			document.getElementById("content").innerHTML = this.responseText;
		}
	};
	i.open("POST","user/login.php?username="+user+'&password='+password, true);
	i.send();
}

// logout function : logout the user and delete all the data
function logout(){
	sessionStorage.removeItem("userName");
	sessionStorage.removeItem("userPsw");
	location.reload();
}