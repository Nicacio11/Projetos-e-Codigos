function apertouTecla(event){
	console.log("apertou alguma tecla "+event.keyCode);
}
function soltarTecla(event){
	console.log("soltou alguma tecla "+event.keyCode);
}
function pressionado(event){
	console.log("Precionado a letra" +event.keyCode);
	if(event.shiftKey == true){
		console.log("Aprertou alguma tecla com o shift ...")
	}
	if(event.altKey == true){
		console.log("Aprertou alguma tecla com o alt ...")
	}
	if(event.ctrlKey == true){
		console.log("Aprertou alguma tecla com o ctrl ...")
	}
}