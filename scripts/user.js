// settings function : open the settings for the current user (after login)
function settings(){
	if (typeof(Storage) !== "undefined") {	
	    document.getElementById("display").innerHTML = sessionStorage.getItem("userId");
	}
	else {
	    document.getElementById("display").innerHTML = "Sorry, your browser does not support Web Storage...";
	}
}