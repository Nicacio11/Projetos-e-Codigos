<form action="aula8Resultado.php" method = "post">
	N1: <input type ="text" name ="n1"><br><br>
	Opera��o: <select name="opera��o">
		<option value = "1">Adi��o</option>
		<option value = "2">Subitra��o</option>
		<option value = "3">Divis�o</option>
		<option value = "4">Multiplica��o</option>
	</select>
	<br>
	N2: <input type ="text" name ="n1"><br><br> 
	<input type ="submit	" name ="Somar">
</form>

boa pratica de programa��o especificar para onde seu formulario vai

Query string 	s�o as variaveis criadas pelo html ao clicar no bota submit que s�o mostradas ou n�o na url

Metodos gests e posts
	gets envia os parametros na url 
	post envia no corpo da pagina - vantagens 
		seguran�a
		integridade da informa��o
		
no php existe uma variavel global chamada $_POST - na pratica � um array
	quando for clicado em submit  todas as variaveis criadas no htmls e enviadas para a pagina php
	vai ser adicionados em $_POST
	
	podemos utilizar print_r($_POST); para saber a estrutuda desse array
	
HTML
Select � necessario ter o name(nome da variavel) que sera utilizada
e no option o valor dela

exemplo
<select name="opera��o">
	<option value = "1">Adi��o</option>
	<option value = "2">Subitra��o</option>
	<option value = "3">Divis�o</option>
	<option value = "4">Multiplica��o</option>
</select>