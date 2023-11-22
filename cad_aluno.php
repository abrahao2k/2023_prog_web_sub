<?php

$nome = $_POST["nome"];
$curso = $_POST["curso"];
$turno = $_POST["turno"];


$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if($conexao){
	print("Conectado ao BD.<br/>");

	$comando = "INSERT INTO aluno VALUES(null, 
				'$nome', '$curso', '$turno')" ;

	mysqli_query($conexao, $comando);

	echo "INSERIDO COM SUCESSO!<br/>";
	echo "<a href='cad_aluno.html'>VOLTAR</a>";

	mysqli_close($conexao); # fechar ao terminar tudo
}else{
	die("Erro ao conectar.");
}

#print("$nome, $curso, $turno");



?>