<?php

$arquivo = fopen("clientes.txt", "w");

$listaClientes = [
    [
        "nome" => "Guto",
        "idade" => 36
    ],
    [
        "nome" => "Renata",
        "idade" => 30
    ],
    [
        "nome" => "Fernanda",
        "idade" => 20
    ],
    [
        "nome" => "mariana",
        "idade" => 18
    ],
    [
        "nome" => "Maicon",
        "idade" => 45
    ],
    [
        "nome" => "jorge",
        "idade" => 55
    ],
    [
        "nome" => "Gabriel",
        "idade" => 28
    ],
    [
        "nome" => "Everton",
        "idade" => 60
    ]
];

for ($i = 0; $i < count($listaClientes); $i++) {
    fwrite($arquivo, $listaClientes[$i]["nome"] . "\t\t");
    fwrite($arquivo, $listaClientes[$i]["idade"] . "\n");
}

fclose($arquivo);
