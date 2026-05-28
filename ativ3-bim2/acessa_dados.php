<?php
include "util.php"; 

$conn = conecta(); 


$varSQL = "SELECT * FROM aluno";

if (isset($_POST['sexo']) && $_POST['sexo'] != "") {
    $sexo = $_POST['sexo'];
    $varSQL = "SELECT * FROM aluno WHERE sexo = '$sexo'";
}


$select = $conn->query($varSQL);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alunos</title>
    <style>
        th {
            background-color: #075effff;
            color: white;
        }
        tr {
            background-color: #00e1ffff;
        }
    </style>
</head>
<body>


<h2>Lista de Alunos</h2>

<form method="POST" action="acessa_dados.php">
    Filtrar por Sexo (M ou F): 
    <input type="text" name="sexo" size="5" maxlength="1">
    <input type="submit" value="Filtrar">
</form>
<br>

<table border="1" cellpadding="20">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Celular</th>
        <th>Sexo</th>
        <th>Ação</th>
    </tr>

<?php
while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>".$linha['id']."</td>";
    echo "<td>".$linha['nome']."</td>";
    echo "<td>".$linha['celular']."</td>";
    echo "<td>".$linha['sexo']."</td>";
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