<?php 

   
   class Tarefa_service{

    private $conexao;
    private $tarefa;


    public function __construct($conexao){
      $this->conexao = $conexao->conectar();
      $this->tarefa = $tarefa;
    }
   	
   	public function inserir(){

      $query = 'insert into tb_tarefas(tarefas)value(:tarefa)';
      $stmt = $this->conexao->prepare($query);
      $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa') );

      $stmt->execute();

   	}
   	public function recuperar(){

   	}
    public function atualizar(){

    }
    public function remover(){

    }
}


?>