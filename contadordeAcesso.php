<?php
$arquivo = "contador.txt";
if(file_exists($arquivo)){
$file = fopen($arquivo,"r");
/*funcao chop remove os espaços e quebra
de linha existentes no fim de uma string*/
$cont = chop(fgets($file));
fclose($file);
$cont++;
}
else{
    $cont = 1;
    }
    $file2 = fopen($arquivo,"w");
    fwrite($file2,$cont);
    fclose($file);

?>