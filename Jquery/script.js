$(function(){
	//$("#teste").html("Testando");
	// pode em vez o html usar o text
	// porem o text adiciona exatamente o que vc digitou independente de tags
	
	//mudando atributo do componetne
	//$("#teste").attr("id", "novoid");

	if($("#teste").length==0){
		//alert(" não tem esse id");
	}

	$("#teste").find("img").attr("width", "100");
	$("#texto").val("Texte dos textes");
	$("#texto").attr("value", "teste teste");
	
	//inserindo antes e depois de um componente
	$("#texto").after("<img src='http://www.google.com.br/google.jpg'></img>")
	$("#texto").before("<img src='http://www.google.com.br/google.jpg'></img>")

	//adicionando em uma lista
	$("ul").append("<li>Item 6</li>"+
		"<li>Item 7</li>"+
		"<li>Item 8</li>");

	//adicionando antes da lista
	$("ul").prepend("<li>Item 0</li>")
})