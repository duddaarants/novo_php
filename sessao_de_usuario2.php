<!DOCTYPE html>
<html>
<head>
	<title>Página WEB - sessão de usuário 2</title>
</head>
<body>
	<?php 

	session_start();
	//elimina todas as variaveis de sessão mas, mantem a sessao ativa.
	session_unset();
	//elimina toda a sessão;
	//session_destroy();
	 ?>
	 <h3>Sessão de usuário</h3>
Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>
</body>
</html>