<?php
$nomearquivo = "clientes.txt";
$arquivo = fopen("nomearquivo","r"); //abre o arquivo e o "r" significa que o arquivo esta em modo de leitura do arquivo, "w" somente escreve no arquivo
echo fread($arquivo, filesize("$nomearquivo")); // lê o arquivo
fclose($arquivo); // fecha o arquivo
?>