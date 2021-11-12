<!DOCTYPE html>
<html>
<head>
	<title>Página WEB - sessão de usuário</title>
</head>
<body>

	<?php 
		session_start();
		$_SESSION['nome'] = "Administrador";
	 ?>
	 <h3>Sessão de usuário</h3>
Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>
</body>
</html>
