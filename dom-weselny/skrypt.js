function oblicz() {
	var g = document.getElementById("goscie").value;
	var wynik;
	wynik = g*100;

	if (document.getElementById("poprawiny").checked) {
		wynik *= 1.3;	}
	
	document.getElementById("koszt").innerHTML = "Koszt Twojego wesela to: " + wynik + " złotych";


}