<?php
$file = fopen("arquivo2.txt","w");
$conteudo = "conteudo";
fwrite($file, $conteudo);
fwrite($file, ' Guarulhos');
fclose($file);
?>