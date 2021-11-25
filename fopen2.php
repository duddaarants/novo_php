<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fopen</title>
</head>
<body>
    <?php
    $file= fopen("arquivo.txt", "r")
   or exit ("Não foi possível abrir o arquivo!");

    ?>
    
</body>
</html>