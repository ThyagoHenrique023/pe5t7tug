<?php

require '../../../app_lista_tarefas/tarefa_model.php';
require '../../../app_lista_tarefas/tarefa_service.php';
require '../../../app_lista_tarefas/conexao.php';

$tarefa = new Tarefa();
$tarefa->__set('tarefa', $_POST['tarefa']);

$conexao = new Conexao();

$tarefa_service = new tarefa_service($conexao, $tarefa);

$tarefa_service->inserir();

header('location: nova_tarefa.php?inclusao=1');



?>