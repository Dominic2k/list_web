function validate(){
	var firstname = document.getElementById("firstname").value;
	var lastname = document.getElementById("lastname").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;
	var age = document.getElementById("age").value;

	sessionStorage.firstname = firstname;
	sessionStorage.lastname = lastname;
	sessionStorage.email = email;
	sessionStorage.phone = phone;
	sessionStorage.age = age;

	var occupationArray = document.getElementById("radio_occupation").getElementsByTagName("input");
	var i = 0;
	while(i < occupationArray.length){
		if (occupationArray[i].checked == true){
			sessionStorage.occupation = occupationArray[i].value;
		}
		i += 1;
	}
	var course_HTML_CSS_JS = document.getElementById("course_HTML_CSS_JS").checked;
	var course_python = document.getElementById("course_python").checked;
	var course_autoit = document.getElementById("course_autoit").checked;
	var course_mysql = document.getElementById("course_mysql").checked;

	sessionStorage.course_HTML_CSS_JS = course_HTML_CSS_JS;
	sessionStorage.course_python = course_python;
	sessionStorage.course_autoit = course_autoit;
	sessionStorage.course_mysql = course_mysql;

	var payment = document.getElementById("payment").value;
	sessionStorage.payment = payment;

	var error_msg = ""
	// logic1
	if (firstname.match("^[A-Z a-z]{1,30}$") == null) {
		error_msg += "First name has to contain only characters and between 1 or 30 characters<br>";
	}

	if (lastname.match("^[A-Z a-z]{1,30}$") == null) {
		error_msg += "Last name has to contain only characters and between 1 or 30 characters<br>";
	}
	
	// Logic2
	if (email.match("^[a-zA-Z]*@[a-z.A-Z]*$") == null) {
		error_msg += "Email has to contain @ <br>";
	}
	// Logic3
	if (phone.match("^((/+84)|0)[0-9]{9,10}$") == null) {
		error_msg += "Phone number has to start with +84 or 0 between 0 or 10 digits <br>";
	}
	// Logic4
	if (age.match("^(?:[1-9]|[1-9][0-9])$") == null) {
		error_msg += "Age has to be a number less than 100 <br>";
	}
	//Logic5
	if(sessionStorage.occupation == "highschool"){
		if (age > 18) {
			error_msg += "If highschool then age need to be less than or equal to 18 <br> ";
		}
	}


	if (error_msg == ""){
		return true
	}else {
		document.getElementById("error").innerHTML = error_msg;
		return false
	}
}


function prefillData(){
	if (sessionStorage.firstname != null){
		document.getElementById("firstname").value = sessionStorage.firstname;
		document.getElementById("lastname").value = sessionStorage.lastname;
		document.getElementById("email").value = sessionStorage.email;
		document.getElementById("phone").value = sessionStorage.phone;
		document.getElementById("age").value = sessionStorage.age;

		switch (sessionStorage.occupation){
			case "highschool":
				document.getElementById("highschool").checked = "true";
				break;
			case "university":
				document.getElementById("university").checked = "true";
				break;
			case "working":
				document.getElementById("working").checked = "true";
				break;
			case "retired":
				document.getElementById("retired").checked = "true";
				break;
		}
		if(sessionStorage.course_HTML_CSS_JS == "true"){
			document.getElementById("course_HTML_CSS_JS").checked = true;
		}
		if(sessionStorage.course_python == "true"){
			document.getElementById("course_python").checked = true;
		}
		if(sessionStorage.course_autoit == "true"){
			document.getElementById("course_autoit").checked = true;
		}
		if(sessionStorage.course_mysql == "true"){
			document.getElementById("course_mysql").checked = true;
		}
		document.getElementById("payment").value = sessionStorage.payment;
	}
}

function init(){
	var regForm = document.getElementById("registerForm");
	regForm.onsubmit = validate;
	prefillData()
}
window.onload = init;