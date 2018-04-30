<?php 
	require "banco.php";
	$banco = new Banco("127.0.0.1","blogn","root","");

	$banco->query("SELECT * FROM post LIMIT 10");

	if($banco->getNumRows()>0){
		foreach ($banco->result() as $post) {

			echo "<br/> Titutlo".$post["titulo"]."<br/><hr/>";
		}
	}
	else{
		echo "não ouve resultados";
	}



	$banco->insert("post", array(
		"titulo"=>'Testteeeee dos testes',
		"data"=>"NOW()",
		"corpo"=>'corpo dos corpos',
		"autor"=>"Vitor"
		));

	$banco->delete("post", array("id"=>1));
	$banco->update("post", array("titulo" => "TTT",array("id"=>"1")));
?>