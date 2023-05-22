function init(){
	var html_btn = document.getElementById("btn");
	html_btn.onclick = convert_button_click;
}
function print_convertion(usd, vnd){
	var html_message = document.getElementById("message");
	html_message.textContent = "You enter: " + usd + "(USD), VND: " + vnd + "đ";
}
function convert_button_click(){
	var usd = prompt("Enter USD: ");
	var vnd = usd*23585;
	print_convertion(usd,vnd);
}
window.onload = init;