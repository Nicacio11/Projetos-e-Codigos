function validar(){
	var valor = document.getElementById("valor").value;
	if(valor.length>2){
		alert("Você digitou um numero com mais de 2 algarismos");
		return false;
	}
	else{
		return true;
	}
	
}