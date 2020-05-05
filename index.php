<?php

require_once("config.php");

$root = new Usuario();

$root->loadById(1);
echo $root;

// select em toda a tabala
// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);


?>