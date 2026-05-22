<?php 

function conecta ($paramStringConexao="")
{
    // string padrao
    if ($paramStringConexao == "") 
    {
      $paramStringConexao = "pgsql:host=localhost; port=5432;
        dbname=aluno; user=postgres; password=postgres";
    }

    try { //tente
      $c = new PDO($paramStringConexao);
    } catch (PDOException $e) { // se der erro ...
      echo ">> Nao conectado ! <br>".
            "<b>Erro:</b> ".$e->getMessage();
      exit;
    }

    return $c;
}

?>