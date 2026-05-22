<?php
function conecta($paramString = "") {

    if ($paramString == "") {
        $string_conexao = "pgsql:host=localhost;port=5432;dbname=cursos;user=postgres;password=postgres";
    } else {
        $string_conexao = $paramString;
    }

    try {
        $c = new PDO($string_conexao);
        $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "O sistema está fora do ar";
        exit;
    }

    return $c;
}
?>