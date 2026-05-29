<?php
include "util.php"; 

$conn = conecta(); 
$varSQL = "SELECT * FROM aluno";
$select = $conn->query($varSQL);
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Alunos</title>
    <style>
        th {
            background-color: #075eff;
            color: white;
        }
        tr {
            background-color: #00e1ff;
        }
        .links-acao a {
            margin-right: 15px;
            color: #000;
            font-weight: bold;
            text-decoration: none;
        }
        .links-acao a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>Lista de Alunos</h2>

<table border="1" cellpadding="15">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Celular</th>
        <th>Ações</th> </tr>

<?php
while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $linha['id'] . "</td>";
    echo "<td>" . $linha['nome'] . "</td>";
    echo "<td>" . $linha['celular'] . "</td>";
    
    
    echo "<td class='links-acao'>
            <a href='alterarAlunos.php?id=" . $linha['id'] . "'>Alterar</a>
            <a href='excluirAlunos.php?id=" . $linha['id'] . "'>Excluir</a>
          </td>";
    echo "</tr>";
}
?>

</table>

<br>
<a href="adicionarAlunos.php">Adicionar Aluno</a>

</body>
</html>