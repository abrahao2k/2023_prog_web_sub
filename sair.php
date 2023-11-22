<html>
<head><meta charset="utf-8"></head>
<body>
<?php
	session_start();
	session_destroy();
	echo "Você saiu do sistema.<br/>";
	echo "<a href='login.html'>VOLTAR</a>";
?>
</body>
</html>