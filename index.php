<?php

$pessoas = [
    "Joao001" => [
        "codigo" => 001,
        "nome" => "joão",
        "endereco" => "Rua do João"
    ],
    "Ari002" => [
        "codigo" => 002,
        "nome" => "ari",
        "endereco" => "Rua do Ari"
    ],
    "Maria003" => [
        "codigo" => 003,
        "nome" => "maria",
        "endereco" => "Rua da Maria"
    ],
    "Leticia004" => [
        "codigo" => 004,
        "nome" => "leticia",
        "endereco" => "Rua da Leticia"
    ],
    "Gustavo005" => [
        "codigo" => 005,
        "nome" => "gustavo",
        "endereco" => "Rua do Gustavo"
    ]
];

ksort($pessoas);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <td>Codigo</td>
                <td>Nome</td>
                <td>Endereço</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($pessoas as $pessoa){
                    echo "<tr>";
                    foreach($pessoa as $key => $value){
                        echo "<td>";                        
                        echo ($key == "nome")? ucfirst($value) : $value;
                        // echo ucfirst($value);
                        echo "</td>";                        
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>