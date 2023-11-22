<?php
$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if($conexao){
	$comando = "SELECT * FROM aluno";

	$resultado = mysqli_query($conexao, $comando);

	while($linha = mysqli_fetch_assoc($resultado)){
		echo " {$linha['codigo']} <br/> {$linha['nome']}
		<br/> {$linha['curso']} <br/> {$linha['turno']} <br/><br/>";
	}

	mysqli_close($conexao);
}else{
	die("Erro ao conectar.");
}

?>