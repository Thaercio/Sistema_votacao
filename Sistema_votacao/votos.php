<?php
//session_start();
require_once('conexao.php');


$sql=$conexao->prepare("SELECT count(nome)  FROM candidatos WHERE nome='bolsonaro'");
$sql->execute();
$mostrar=$sql->fetch();
$mos=array_unique($mostrar);
foreach($mos as $value){
	
	//$_SESSION['bolsonaro']=$value."<br/>";
	echo $value."<br/>";
}



$sql=$conexao->prepare("SELECT count(nome)  FROM candidatos WHERE nome='Lula'");
$sql->execute();
$mostrar=$sql->fetch();
$mos=array_unique($mostrar);
foreach($mos as $value){
	
	$_SESSION['Lula']=$value."<br/>";
}

$sql=$conexao->prepare("SELECT count(nome)  FROM candidatos WHERE nome='Ciro Gomes'");
$sql->execute();
$mostrar=$sql->fetch();
$mos=array_unique($mostrar);
foreach($mos as $value){
	
	$_SESSION['Ciro Gomes']=$value."<br/>";
}

$sql=$conexao->prepare("SELECT count(nome)  FROM candidatos WHERE nome='Joao Dória'");
$sql->execute();
$mostrar=$sql->fetch();
$mos=array_unique($mostrar);
foreach($mos as $value){
	
	$_SESSION['Joao Dória']=$value."<br/>";
}

$sql=$conexao->prepare("SELECT count(nome)  FROM candidatos WHERE nome='Branco'");
$sql->execute();
$mostrar=$sql->fetch();
$mos=array_unique($mostrar);
foreach($mos as $value){
	
	$_SESSION['Branco']=$value."<br/>";
}


$sql=$conexao->prepare("SELECT count(nome)  FROM candidatos WHERE nome='Nulo'");
$sql->execute();
$mostrar=$sql->fetch();
$mos=array_unique($mostrar);
foreach($mos as $value){
	
	$_SESSION['Nulo']=$value."<br/>";
}

?>