<?php
	class Usuarios{
		private $db;

		public function __function(){
			try {

					$this->db = new PDO("mysql:dbname=blogn;host=127.0.0.1","root","");

			} catch (PDOException $e) {
				echo "Falha :".$e->getMessage();
			}

		}

		public function selecionar($id){
			//$sql = "SELECT * FROM usuarios WHERE id = $id";
			$sql = $this->db->prepare("SELECT * FROM usuarios WHERE :id");
			$sql->bindValue(":id", $id);
			$sql->execute();

			$array = array();
			if ($sql->rowCount()>0) {
				$array = $sql->fetch();
			}else{
				echo "Não existe dados there";
			}
			return $array;
		}

	}
?>
