<?php 
function conecta($paramStringConexao="")
{

    if ($paramStringConexao == "") 
    {
      $paramStringConexao = "pgsql:host=localhost; port=5432; dbname=cursos; user=postgres; password=postgres";
    }

    try { 
      $c = new PDO($paramStringConexao);
    } catch (PDOException $e) { 
      echo ">> Nao conectado ! <br><b>Erro:</b> ".$e->getMessage();
      exit;
    }

    return $c;
}
?>