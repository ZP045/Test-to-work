<?php

include_once "conexao.php";

dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (empty($dados['nome'])) {
    $retorna = ['erro' => true, 'msg' => "<div class ='alert alert-danger' role ='alert'>Erro: Necessário preencher o campo nome!</div>"];
}elseif (empty($dados['email'])) {
   $retorna = ['erro' => true, 'msg' => "<div class ='alert alert-danger' role ='alert'>Erro: Necessário preencher o campo e-mail!</div>"];
}
elseif (empty($dados['cpf'])) {
   $retorna = ['erro' => true, 'msg' => "<div class ='alert alert-danger' role ='alert'>Erro: Necessário preencher o campo CPF!</div>"];
}
elseif (empty($dados['telefone'])) {
   $retorna = ['erro' => true, 'msg' => "<div class ='alert alert-danger' role ='alert'>Erro: Necessário preencher o campo Telefone!</div>"];
}
}
else {
  $query_usuario = "INSERT INTO usuarios (nome, email, email, cpf, telefone, telefone) VALUES (:nome, :email, :email, :cpf, :telefone, :telefone)";
  $cad_usuario = $cann-> prepare($query_usuario);
  $cad_usuario->binParam(':nome', $dados['nome']);
  $cad_usuario->binParam(':email', $dados['email']);
  $cad_usuario->binParam(':cpf', $dados['cpf']);
  $cad_usuario->binParam(':telefone', $dados['telefone']);
  $cad_usuario->execute();

if ($cad_usuario->rowCount()){
    $retorna = ['erro' => false, 'msg' => "<div class ='alert alert-success' role ='alert'> Usuário cadastrado com sucesso!</div>"];
}else{
   $retorna = ['erro' => true, 'msg' => "<div class ='alert alert-danger' role ='alert'>Erro: Usuário não cadastrado com sucesso!</div>"];
}
}

echo json_encode($retorna);
