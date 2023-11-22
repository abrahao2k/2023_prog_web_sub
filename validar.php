<html>
<head><meta charset="utf-8"></head>
<body>
<?php
session_start();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if ($usuario == "gerente" && $senha == "9876") {
	$_SESSION['usuario'] = $usuario;
	echo "ACESSO PERMITIDO.<br/> Seja bem vindo!<br/>";
	echo "<a href='menu.php'>MENU</a>";
}else{
	echo "ACESSO NEGADO!<br/> Usuário/Senha inválidos.";
}
?>

</body>
</html>