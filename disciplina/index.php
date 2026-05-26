<?php 

include 'util.php'; 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Filtro de Disciplinas</title>
</head>
<body>
    <h2>filtrar disciplina por valor maximo</h2>
    
    <form action="" method="POST">
        <label for="valor">Valor (R$):</label>
        <input type="number" step="0.01" id="valor" name="valor" value=" " required>
        <button type="submit">Filtrar</button>
    </form>

    <hr> <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['valor'])) {
        
        $valorFiltro = $_POST['valor'];
        $conn = conecta();

        try {
            $sql = "SELECT id, titulo, descricao, valor FROM disciplina WHERE valor <= :valor_limite";
            $select = $conn->prepare($sql);
            $select->bindParam(':valor_limite', $valorFiltro, PDO::PARAM_STR);
            $select->execute();
            
            $linhas = $select->fetchAll(PDO::FETCH_ASSOC);

            echo "<h2>resultados (Até R$ $valorFiltro):</h2>";
            
            if ($linhas) {
                echo "<ul>";
                foreach ($linhas as $linha) {
                    echo "<li><b>" . htmlspecialchars($linha['titulo']) . "</b> - " . 
                         htmlspecialchars($linha['descricao']) . " | R$ " . 
                         htmlspecialchars($linha['valor']) . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>nenhuma disciplina encontrada abaixo desse valor.</p>";
            }

        } catch (PDOException $e) {
            echo "<p>Erro na consulta: " . $e->getMessage() . "</p>";
        }
    }
    
    ?>
</body>
</html>