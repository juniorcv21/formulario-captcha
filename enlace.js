function validar(){
	var c1=document.getElementById("campo1").value;
	var c2=document.getElementById("campo2").value;
	var c3=document.getElementById("campo3").value;
	var c4=document.getElementById("campo4").value;
	var base=document.getElementById("base").value;
	var copia=document.getElementById("valorc").value;

	if (c1=="" || c2=="" || c3=="" || c4=="" || base=="") {
		alert("Asegurese de que los campos NO esten Vacios");
	}else{
		if(copia==base) {
		window.open("http://localhost/proyectocaptcha/sistema.php");
		}else {
		alert("¡ El valor del CAPTCHA no coincide !");
		}
	}
}
