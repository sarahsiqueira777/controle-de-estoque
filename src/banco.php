<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "estoque";

try {
    //code...
    $conexao = new PDO("
    mysql:host=$servidor;
    dbname=$banco;
    charset=utf8",
    $usuario,
    $senha);
} catch (\Throwable $th) {
    //throw $th;
}