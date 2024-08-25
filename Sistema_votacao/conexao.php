<?php
define('HOST','localhost');
define('DB','eleicao');
define('USER','root');
define('PASS','');

try{
	$conexao=new PDO('mysql:localhost='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	//echo "Conexao realizada";
}catch(Exception $e){
	echo "Falha na conexao";
}


?>