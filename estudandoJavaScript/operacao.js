function somar(){
	var x = parseInt(document.getElementById("campo1").value);
	var y = parseInt(document.getElementById("campo2").value);

	var soma = x+y;
	alert(soma);
}

/*
	Array , manipulando
	var array = [];
	indexOf("valor") - retorna a posição em q o valor está no array
	.join(", ") - o join faz com quer juntem os valores dos arrays com os q estã entre parenteses
	.push("valor") adiciona o valor ao array
	.pop() remove o ultimo valor array
	.shift() remove o primeiro valor do array
*/