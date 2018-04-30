<?php 

	class Banco{
		private $pdo;
		private $numRows;
		private $array;

		public function __construct($host,$dbname, $dbuser, $dbpass){

			try {
				$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpass);
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "conexão feita com sucesso";
			} catch (PDOException $e) {
				echo "Erro :".$e->getMessage();
			}

		}

		
		public function query($sql){

			$query = $this->pdo->query($sql);
			$this->numRows = $query->rowCount();
			$this->array = $query->fetchAll();


		}
		public function result(){
			return $this->array;
		}
		public function getNumRows(){
			return $this->numRows;
		}
		public function insert($table, $data){
			if(!empty($table) && (is_array($data) && count($data)> 0)){
				$sql ="INSERT INTO ".$table." SET ";
				$dados = array();
				foreach($data as $chave=>$valor){
					$dados[] = $chave." = '".addslashes($valor)."'";
				}

				$sql = $sql.implode(", ", $dados);
				$this->pdo->query($sql);
				echo "saiu";
			}
		}
		public function update($table, $data, $where = array(), $where_cond = "AND"){
			if(!empty($table) && (is_array($data) && count($data)> 0) && is_array($where)){
				$sql = "update ".$table." SET ";
				$dados = array();
				foreach($data as $chave=>$valor){
					$dados[] = $chave." = '".addslashes($valor)."'";
				}
				$sql = $sql.implode(", ", $dados);

				if(count($where)>0){
					$dados = array();
					foreach($where as $chave=>$valor){
						$dados[] = $chave." = '".addslashes($valor)."'";
					}
					$sql = $sql." WHERE ".implode(" ".$where_cond." ", $dados);
					}
				//	$this->pdo->query($sql);
				}
			}
		public function delete($table, $where, $where_cond = "AND"){
			if(!empty($table) && (is_array($data) && count($data)> 0) && is_array($where)){
				$sql = "DELETE FROM ".$table;

				if(count($where)>0){
					$dados = array();
					foreach($where as $chave=>$valor){
						$dados[] = $chave." = '".addslashes($valor)."'";
					}
					$sql = $sql." WHERE ".implode(" ".$where_cond." ", $dados);
					}
					$this->pdo->query($sql);
					echo "deletado";
				}
			}
	}
?>