<?php

$amigos = [
    ["nome" => "Felipe",     "cel" => "14990000001"],
    ["nome" => "Thiago",     "cel" => "14990000002"],
    ["nome" => "Laura",      "cel" => "14990000003"],
    ["nome" => "Breno",      "cel" => "14990000004"],
    ["nome" => "Josi",       "cel" => "14990000005"],
    ["nome" => "Fabio",      "cel" => "14990000006"],
    ["nome" => "Leonardo",   "cel" => "14990000007"],
    ["nome" => "Guilherme",  "cel" => "14990000008"],
    ["nome" => "Joao",       "cel" => "14990000009"],
    ["nome" => "Mariana",    "cel" => "14990000010"],
    ["nome" => "Lucas",      "cel" => "14990000011"],
    ["nome" => "Rafael",     "cel" => "14990000012"],
    ["nome" => "Camila",     "cel" => "14990000013"],
    ["nome" => "Pedro",      "cel" => "14990000014"],
    ["nome" => "Amanda",     "cel" => "14990000015"],
    ["nome" => "Renato",     "cel" => "14990000016"],
    ["nome" => "Bianca",     "cel" => "14990000017"],
    ["nome" => "Diego",      "cel" => "14990000018"],
    ["nome" => "Patricia",   "cel" => "14990000019"],
    ["nome" => "Victor",     "cel" => "14990000020"]
];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Amigos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Lista de Amigos</h2>

<table>
    <tr>
        <th>Nome</th>
        <th>Celular</th>
    </tr>

    <?php foreach ($amigos as $amigo) { ?>
        <tr>
            <td><?php echo $amigo["nome"]; ?></td>
            <td><?php echo $amigo["cel"]; ?></td>
        </tr>
    <?php } ?>

</table>

</body>
</html>