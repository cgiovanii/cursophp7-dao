<?php

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);

// Carrega so um usuario pelo id
// $user = new Usuario();
// $user->loadById(1);
// echo $user;

// Metodo estatico que carrega uma lista com todos usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuario buscando pelo login
// $search = Usuario::search("cg");
// echo json_encode($search);

$usuario = new Usuario();
$usuario->login("jose", "12345");

echo $usuario;
