
<?php 
//usuario_cruid.php
function buscarUsuario(PDO $conexao)
{
$sql ="SELECT id nome,email FROM  ususarios ORDER BY nome ";

//$stml
//$queery

$consulta = $conexao->prepare($sql);
$consulta->execute();
return$consulta->fetch(PDO::FETCH_ASSOC);





}