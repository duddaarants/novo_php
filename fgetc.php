<?php
$file = fopen("arquivo.txt","r");
while (!feof($file)) {
echo fgetc($file);
}
fclose($file);
?>