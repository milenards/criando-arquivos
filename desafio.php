
<?php
$arquivo = fopen("fornecedores.txt", "contatos.txt", "w");

$ListaFornecedores = [
    [
        "name" => "Constance Alford",
        "email" => "lacinia.sed@yahoo.com",
        "country" => "United States"
    ],
    [
        "name" => "Ariana Jacobs",
        "email" => "non.feugiat@aol.ca",
        "country" => "Canada"
    ],
    [
        "name" => "Cade Wheeler",
        "email" => "egestas@protonmail.org",
        "country" => "Philippines"
    ],
    [
        "name" => "Hayes Greene",
        "email" => "sed.nunc.est@icloud.edu",
        "country" => "Norway"
    ],
    [
        "name" => "Quinlan Brock",
        "email" => "ac.sem@hotmail.net",
        "country" => "Vietnam"
    ]
];
// print_r($ListaFornecedores[0]["name"]);
// print_r($ListaFornecedores[0]["email"]);
// print_r($ListaFornecedores[0]["country"]);
// echo "";

for ($i = 0; $i < count($ListaFornecedores); $i++) {
    fwrite($arquivo, $ListaFornecedores[$i]["name"] . "\t\t" );
    fwrite($arquivo, $ListaFornecedores[$i]["email"] . "\t\t");
    fwrite($arquivo, $ListaFornecedores[$i]["country"] . "\n");
}

fclose($arquivo);

?>