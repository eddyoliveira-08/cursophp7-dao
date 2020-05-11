<?php

require_once("config.php");

// Carrega um usuario
// $root = new Usuario();
// $root->loadById(1);
// echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("ro");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("user","1234");
// echo $usuario;

//Criando um novo usuário 
// $aluno = new Usuario("aluno", "@aluno");
// $aluno->insert();
// echo $aluno;

//Alterar um usuario
// $usuario = new Usuario();
// $usuario->loadById(5);
// $usuario->update("professor","#KE&0#E");
// echo $usuario;

//Delete um usuario
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete(5);
echo $usuario;

?>