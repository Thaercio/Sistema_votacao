<?php
session_start();
require_once('conexao.php');
$candidato=$_POST['candidato'];
if(empty($candidato)){
	//margin-left:35%
	$_SESSION['msg']="<h1 style='color:red;text-align:center'>Por favor, informe uma opção</h1>";
	header('location:index.php');
}
switch($candidato){
	case 'bolsonaro':
	$sql=$conexao->prepare("INSERT INTO candidatos VALUES(null,?,?)");
	$sql->execute(array('Bolsonaro',17));
	$_SESSION['msg']="<h1 style='color:green;text-align:center'>Você votou em bolsonaro</h1>";

	header('location:index.php');
	break;

	case 'lula':
	$sql=$conexao->prepare("INSERT INTO candidatos VALUES(null,?,?)");
	$sql->execute(array('Lula',13));
	$_SESSION['msg']="<h1 style='color:green;text-align:center'>Você votou em Lula</h1>";

	header('location:index.php');
	break;

	case 'Ciro Gomes':
	$sql=$conexao->prepare("INSERT INTO candidatos VALUES(null,?,?)");
	$sql->execute(array('Ciro Gomes',12));
	$_SESSION['msg']="<h1 style='color:green;text-align:center'>Você votou em Ciro Gomes</h1>";

	header('location:index.php');
	break;

	case 'Joao Dória':
	$sql=$conexao->prepare("INSERT INTO candidatos VALUES(null,?,?)");
	$sql->execute(array('Joao Dória',45));
	$_SESSION['msg']="<h1 style='color:green;text-align:center'>Você votou em Joao Dória</h1>";

	header('location:index.php');
	break;

	case 'Branco':
	$sql=$conexao->prepare("INSERT INTO candidatos VALUES(null,?,?)");
	$sql->execute(array('Branco','Branco'));
	$_SESSION['msg']="<h1 style='color:green;text-align:center'>Você votou em Branco</h1>";

	header('location:index.php');
	break;

	case 'Nulo':
	$sql=$conexao->prepare("INSERT INTO candidatos VALUES(null,?,?)");
	$sql->execute(array('Nulo','Nulo'));
	$_SESSION['msg']="<h1 style='color:green;text-align:center'>Você votou Nulo</h1>";

	header('location:index.php');

	default:
	header('location:index.php');

}



?>