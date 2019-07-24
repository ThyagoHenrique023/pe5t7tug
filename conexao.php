<?php 

class Conexao{

	private $host = 'localhost';
	private $db_name = 'php_bd';
    private $usuario = 'root';
    private $senha = '';

	public function conectar(){

		try{
		}

		$conexao = new PDO(
		  "mysql:host=$this->host;db_name=$this->db_name",	
          "$this->usuario",
          "$this->senha"
		);

		return 

		Catch(PDOException $erro){
			echo $erro->getMessage()

		};

	}




}

?>