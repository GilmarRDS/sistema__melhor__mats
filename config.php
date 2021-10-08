<?php

$dbHost ='LocalHost';
$dbUsername = 'root';
$dbPassword ='';
$dbName = 'remanejamento_interno_escola1';

$conexao = new mysqli($dbHos,$dbUsername,$dbPassword,$dbName);

if ($conexao -> connect_errno)
{
    echo "erro";
}
else{
    echo "Conexão efetuada com sucesso";
}

?>