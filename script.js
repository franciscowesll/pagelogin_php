
const sign_in = document.getElementById("sign_in");
const resultado = document.getElementById("resultado");

sign_in.addEventListener("submit", function(e){
	console.log(e);
	e.preventDefault();
	const email = document.getElementById("floatingPassword").value;
	const password = document.getElementById("floatingPassword").value;
	
	const xhr = new XMLHttpRequest();
	xhr.open("POST", `db.php?email=${email}&passwd=${password}`, true);
	xhr.onload = function(){
			resultado.innerHTML = this.response;
	}
	xhr.send();
})
