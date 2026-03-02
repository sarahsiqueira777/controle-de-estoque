<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "estoque";

try {
    //tentativa da conexão com banco de dados
    //código...
    //classe PDO é usada para acessar vários tipos de banco de dados usando a mesma conexão
    /*DSN DATA NAME é uma string de conexão usada para especificar o tipo de banco de dados 
    o host e nme do banco de dados*/  
    $conexao = new PDO("mysql:host=$servidor; dbname=$banco; charset=utf8", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo"Conexão com banco de dados estabelecida com sucesso!";
    //echo utlizadp para printar algo na tela

} catch (\Throwable $erro) {
    //lançavel serve para qualquer tipo de erro ou exceção
    //captura de errro caso a conexão falhe
    die("Erro ao conectar com banco de dados:". $erro->getMessage());

}