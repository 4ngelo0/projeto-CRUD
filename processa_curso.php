<?php

include 'conexao.php';

    $nome = $_POST['nome_curso'];
    $area = $_POST['area'];
    $carga = $_POST['carga_h'];
    $desc = $_POST['descricao'];

    $query = "INSERT INTO curso(nome_curso, area, carga_h, descricao)
                    VALUES('$nome', '$area', $carga, '$desc')";

    mysqli_query($conexao, $query);

    header('location: ver_curso.php');

?>