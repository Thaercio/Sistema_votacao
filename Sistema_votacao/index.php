<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css?v="<?php  echo rand(1,1000) ?> >
	
</head>
<body>
<?php 
session_start();
require_once("conexao.php");
//require_once('votos.php');

//require_once('porcentagem_bolsonaro.php');
if(isset($_SESSION['msg'])){
	echo "<style='margin:0 auto'>".$_SESSION['msg']."</>";
	unset($_SESSION['msg']);
	session_destroy();
}

?>
<div class="tela_votos">
<form method="post" action="cadastrar.php">
	<div class="votos">
	<input type="radio" name="candidato" value="bolsonaro">Bolsonaro<br/>
	<input type="radio" name="candidato" value="lula">Lula<br/>
	<input type="radio" name="candidato" value="Ciro Gomes">Ciro Gomes<br/>
	<input type="radio" name="candidato" value="Joao Dória">Joao Dória<br/><br/>

	<input type="radio" name="candidato" value="Branco">Branco

	<input type="radio" name="candidato" value="Nulo">Nulo<br/>

	<button class="button">VOTAR</button><a href="">FINALIZAR</a><a style="background-color:orange;text-decoration: 0;
	margin-left: 2%;
	color: black;
	border-radius: 4px;
	padding: 4px;
	border: 1px black solid" href="delete.php">REINICIAR</a><br/>
	</div>



	
</form><br/>
</div>
</body>
</html>



<?php
//candidato bolsonaro

$sql=$conexao->prepare("SELECT count(nome)  FROM candidatos WHERE nome='bolsonaro'");
$sql->execute();
$mostrar=$sql->fetch();
$candidato_bolsonaro=array_unique($mostrar);
foreach($candidato_bolsonaro as $value){
	
	//$_SESSION['bolsonaro']=$value."<br/>";
	echo "<p style='color:#0000FF;font-size:30px'>Votos Bolsonaro: ".$value."</p><br/>";
}
//candidato lula
$sql=$conexao->prepare("SELECT count(nome)  FROM candidatos WHERE nome='Lula'");
$sql->execute();
$mostrar=$sql->fetch();
$candidato_lula=array_unique($mostrar);
foreach($candidato_lula as $value){
	
	//$_SESSION['bolsonaro']=$value."<br/>";
	echo "<p style='color:#0000FF;margin-top:-4%;font-size:30px'>Votos Lula: ".$value."</p><br/>";
}
//candidato ciro
/*if(isset($_SESSION['Ciro Gomes'])){
	echo "Votos Ciro Gomes: ".$_SESSION['Ciro Gomes'];
}*/
$sql=$conexao->prepare("SELECT count(nome)  FROM candidatos WHERE nome='Ciro Gomes'");
$sql->execute();
$mostrar=$sql->fetch();
$candidato_ciro=array_unique($mostrar);
foreach($candidato_ciro as $value){
	
	//$_SESSION['bolsonaro']=$value."<br/>";
	echo "<p style='color:#0000FF;margin-top:-4%;font-size:30px'>Votos Ciro Gomes: ".$value."</p><br/>";
}
//candidato Joao doria
/*
if(isset($_SESSION['Joao Dória'])){
	echo "Votos Joao Dória: ".$_SESSION['Joao Dória'];
}*/
$sql=$conexao->prepare("SELECT count(nome)  FROM candidatos WHERE nome='Joao Dória'");
$sql->execute();
$mostrar=$sql->fetch();
$candidato_joao=array_unique($mostrar);
foreach($candidato_joao as $value){
	
	//$_SESSION['bolsonaro']=$value."<br/>";
	echo "<p style='color:#0000FF;margin-top:-4%;font-size:30px'>Votos Joao Dória: ".$value."</p><br/>";
}
/*
if(isset($_SESSION['Branco'])){
	echo "Votos Brancos: ".$_SESSION['Branco'];
}*/
$sql=$conexao->prepare("SELECT count(nome)  FROM candidatos WHERE nome='Branco'");
$sql->execute();
$mostrar=$sql->fetch();
$brancos=array_unique($mostrar);
foreach($brancos as $value){
	
	//$_SESSION['bolsonaro']=$value."<br/>";
	echo "<p style='color:#0000FF;margin-top:-4%;font-size:30px'>Votos Brancos: ".$value."</p><br/>";
}
/*
if(isset($_SESSION['Nulo'])){
	echo "Votos Nulos: ".$_SESSION['Nulo'];
}
*/
$sql=$conexao->prepare("SELECT count(nome)  FROM candidatos WHERE nome='Nulo'");
$sql->execute();
$mostrar=$sql->fetch();
$nulos=array_unique($mostrar);
foreach($nulos as $value){
	
	//$_SESSION['bolsonaro']=$value."<br/>";
	echo"<p style='color:#0000FF;margin-top:-4%;font-size:30px'>Votos Nulos: " .$value."</p><br/><hr/>";
}

echo "<div class='porcentagem'>";
//criando strings a partir do array
$resultado_bolsonaro=implode(",",$candidato_bolsonaro);
$resultado_lula=implode(",",$candidato_lula);
$resultado_ciro=implode(",",$candidato_ciro);
$resultado_joao=implode(",",$candidato_joao);
$resultado_brancos=implode(",",$brancos);
$resultado_nulos=implode(",",$nulos);
$total_votos=($resultado_bolsonaro+$resultado_lula+$resultado_ciro+$resultado_joao+$resultado_brancos+$resultado_nulos);
$porcentagem_bolsonaro=(($resultado_bolsonaro/$total_votos)*100);

$porcentagem_lula=(($resultado_lula/$total_votos)*100);
$porcentagem_ciro=(($resultado_ciro/$total_votos)*100);
$porcentagem_joao=(($resultado_joao/$total_votos)*100);
$porcentagem_brancos=(($resultado_brancos/$total_votos)*100);
$porcentagem_nulos=(($resultado_nulos/$total_votos)*100);
//$total=implode(",",$total_votos);
print("<h2 style='color:blue'>");
print "Porcentagem de votos Bolsonaro: ".number_format((float)$porcentagem_bolsonaro, 2,'.','')."%<br/>";
print "Porcentagem de votos Lula: ".number_format((float)$porcentagem_lula, 2,'.','')."%<br/>";
print "Porcentagem de votos Ciro: ".number_format((float)$porcentagem_ciro, 2,'.','')."%<br/>";
print "Porcentagem de votos Joao Dória: ".number_format((float)$porcentagem_joao, 2,'.','')."%<br/>";
print "Porcentagem de votos Brancos: ".number_format((float)$porcentagem_brancos, 2,'.','')."%<br/>";
print "Porcentagem de votos Nulos: ".number_format((float)$porcentagem_nulos, 2,'.','')."%<br/>";
//echo "Porcentagem Bolsonaro: ".$porcentagem_bolsonaro;
print "Total de Votos: ". $total_votos."<br/>";

//echo ($resultado_ciro+3);
print("</h2>");
echo "</div>";



?>
