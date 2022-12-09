<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th>Name Email Country</th>
    </tr>
    </thead>
    <tbody>
        <?php
$nomearquivo = "fornecedores.txt";
$arquivo = fopen("$nomearquivo","r");
while(!feof($arquivo)){
    $linha = fgets($arquivo,100);
    echo"<tr> ";
    echo"<td>$linha</td>";
    echo"</tr>";
}
fclose($arquivo);
?> 
    </tbody>
</table>

</body>
</html>