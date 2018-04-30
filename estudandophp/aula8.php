<form action="aula8Resultado.php" method = "post">
	N1: <input type ="text" name ="n1"><br><br>
	Operação: <select name="operação">
		<option value = "1">Adição</option>
		<option value = "2">Subitração</option>
		<option value = "3">Divisão</option>
		<option value = "4">Multiplicação</option>
	</select>
	<br>
	N2: <input type ="text" name ="n1"><br><br> 
	<input type ="submit	" name ="Somar">
</form>

boa pratica de programação especificar para onde seu formulario vai

Query string 	são as variaveis criadas pelo html ao clicar no bota submit que são mostradas ou não na url

Metodos gests e posts
	gets envia os parametros na url 
	post envia no corpo da pagina - vantagens 
		segurança
		integridade da informação
		
no php existe uma variavel global chamada $_POST - na pratica é um array
	quando for clicado em submit  todas as variaveis criadas no htmls e enviadas para a pagina php
	vai ser adicionados em $_POST
	
	podemos utilizar print_r($_POST); para saber a estrutuda desse array
	
HTML
Select é necessario ter o name(nome da variavel) que sera utilizada
e no option o valor dela

exemplo
<select name="operação">
	<option value = "1">Adição</option>
	<option value = "2">Subitração</option>
	<option value = "3">Divisão</option>
	<option value = "4">Multiplicação</option>
</select>