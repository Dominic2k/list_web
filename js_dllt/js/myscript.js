function calculateAge(yearBorn){
	var currentTime = new Date();
	var currentYear = currentTime.getFullYear();
	return currentYear - yearBorn;
}
var name = prompt("Enter your name: ");
var yearBorn = prompt("Enter the year you were born: ");
var age;
age = calculateAge(yearBorn);
console.log(name + " is " + age + " years old");

var message = "";
if (age < 18){
	message += "You are ";
	//while loop
	var i=0;
	while (i<6){
		message += "very ";
		i++;
	}
	//end while loop
	message += "young.";
	if ((age > 6) && (age < 10)){
		message = "You are a kid";
	}
} else if(age < 50){
	message="You are quite young";
} else{
	message="You are over 50 years old";
}
console.log(message);
var gender = prompt("Are you male or female?(male/female): ")

switch (gender){
	case "male":
		console.log("You are a man");
		break;
	case "female":
		console.log("You are a woman");
		break;
	default:
		console.log("Wrong gender input, underfine");
}

var isClose = confirm("Do you want to close current tab? ");
message = "";
if (isClose === true){
	//For loop
	for (var i = 0; i < 10; i++){
		message = message + "Bye ";
	//End for loop
	}
} else{
	message = "Thank you for staying with me";
}
console.log(message);