<html>
<head><meta charset="utf-8"></head>
<body>
	<h1>Menu do Sistema</h1>
	<?php
	session_start();
	if (isset($_SESSION['usuario'])){
		$user = $_SESSION['usuario'];
		echo "Seja bem vindo, $user!<br/>";
		echo "<a href='sair.php'>SAIR</a>";
	}else{
		echo "O login não foi efetuado.<br/>";
		echo "<a href='login.html'>VOLTAR</a>";
	}
	?>
</body>
</html>