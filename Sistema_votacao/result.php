<?php  
require_once 'conexao.php';


//echo "<div class='porcentagem'>";
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
print "Porcentagem de votos Bolsonaro: ".number_format((float)$porcentagem_bolsonaro, 2,'.','')."%<br/>";
print "Porcentagem de votos Lula: ".number_format((float)$porcentagem_lula, 2,'.','')."%<br/>";
print "Porcentagem de votos Ciro: ".number_format((float)$porcentagem_ciro, 2,'.','')."%<br/>";
print "Porcentagem de votos Joao Dória: ".number_format((float)$porcentagem_joao, 2,'.','')."%<br/>";
print "Porcentagem de votos Brancos: ".number_format((float)$porcentagem_brancos, 2,'.','')."%<br/>";
print "Porcentagem de votos Nulos: ".number_format((float)$porcentagem_nulos, 2,'.','')."%<br/>";
//echo "Porcentagem Bolsonaro: ".$porcentagem_bolsonaro;
print "Total de Votos: ". $total_votos."<br/>";


?>