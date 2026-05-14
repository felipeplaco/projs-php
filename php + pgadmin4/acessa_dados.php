<?php

$string_conexao = "pgsql:host=localhost; port=5432; dbname=cursos; user=postgres; password=postgres";

try {
    $conn = new PDO($string_conexao);
    
} catch (PDOException $e) {
    echo "Serviço indisponível";
    exit;
}

$varSQL = "SELECT * FROM aluno";
$select = $conn->query($varSQL);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alunos</title>
</head>
<body>

<h2>Lista de Alunos</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Celular</th>
        <th>Ação</th>
    </tr>

<?php
while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>".$linha['id']."</td>";
    echo "<td>".$linha['nome']."</td>";
    echo "<td>".$linha['celular']."</td>";
    echo "<td>
            <a href='mostra.php?id=".$linha['id']."'>
                <img src='lapis.png' height='40'>
            </a>
          </td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>