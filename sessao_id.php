<!DOCTYPE html>
<html>
<head>
	<title>Página WEB - Sessão de ID</title>
</head>
<body>
	<?php 
session_start();
	 ?>
	 <h3>Sessão de usuário</h3>
SID desta sessão é: <?php echo session_id(); ?>
</body>
</html>