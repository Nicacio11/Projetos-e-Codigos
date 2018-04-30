function verificar(){
	var numero1 = parseInt(document.getElementById("n1").innerHTML);
	var numero2 = parseInt(document.getElementById("n2").value);
	if(numero1==numero2){
		alert("Você acertou o número");
		
	}else{
		alert("Você errou o número");
		
	}
	resetar();
}

function resetar(){
	document.getElementById("n2").value = "";
	var valor = Math.floor(Math.random() * 100);

	document.getElementById("n1").innerHTML=valor;

}