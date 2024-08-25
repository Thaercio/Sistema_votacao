<?php
session_start();
require_once "conexao.php";

try{
$sql=$conexao->prepare("delete from candidatos");
$sql->execute();
$_SESSION['msg']="<h1 style='color:green;text-align:center'>Votação reiniciada</h1>";
header("location:index.php");
}catch(Exception $e){
    echo "Falha ao reiniciar";
}



?>