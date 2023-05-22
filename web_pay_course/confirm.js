function loadDataAndCaculatePrice(){
	var totalPrice = 0;
	var name = document.getElementById("confirm_name");
	var email = document.getElementById("confirm_email");
	var phone = document.getElementById("confirm_phone");
	var age = document.getElementById("confirm_age");
	var occupation = document.getElementById("confirm_occupation");
	var courses = document.getElementById("confirm_courses");
	var payment = document.getElementById("confirm_payment");
	var total = document.getElementById("confirm_total");

	name.textContent = sessionStorage.firstname + " " +sessionStorage.lastname;
	email.textContent = sessionStorage.email;
	phone.textContent = sessionStorage.phone;
	age.textContent = sessionStorage.age;
	occupation.textContent = sessionStorage.occupation;

	var yourCourses = "";
	var count = 0;
	if(sessionStorage.course_HTML_CSS_JS == "true"){
		totalPrice += 1000;
		yourCourses += "HTML - CSS - JS, ";
		count += 1;
	}
	if(sessionStorage.course_python == "true"){
		totalPrice += 2000;
		yourCourses += "Python, ";
		count += 1;
	}
	if(sessionStorage.course_autoit == "true"){
		totalPrice += 3000;
		yourCourses += "Autoit, ";
		count += 1;
	}
	if(sessionStorage.course_mysql == "true"){
		totalPrice += 4000;
		yourCourses += "MySQL";
		count += 1;
	}
	var discount = "";
	if(count >= 3){
		totalPrice = totalPrice * 80 / 100;
		discount += " Discount 20% because you register more than 3 courses";
	}
	if (sessionStorage.occupation == "highschool"){
		totalPrice = totalPrice * 90 / 100;
		discount += " Discount extra 10% because you are in highschool";
	}
	if (sessionStorage.payment == "paypal"){
		totalPrice = totalPrice * 105 /100;
		discount += " Increase 5% because you choose paypal.";
	}
	courses.textContent = yourCourses;
	payment.textContent = sessionStorage.payment;
	total.textContent = totalPrice + discount;
}

function cancelButton(){
	window.location = "register.html";
}

function init(){
	loadDataAndCaculatePrice();
	var cancel = document.getElementById("cancel_button");
	cancel.onclick = cancelButton;
}
window.onload = init;