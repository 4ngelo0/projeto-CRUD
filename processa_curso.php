<?php

include 'conexao.php';

    $nome = $_POST['nome'];
    $area = $_POST['area'];
    $carga = $_POST['carga'];
    $desc = $_POST['desc'];

    $query = "INSERT INTO cursos(NOME, AREA, CARGA_HORARIA, DESCRICAO)
                    VALUES('$nome', '$area', $carga, '$desc')";

    mysqli_query($conexao, $query);

    header('location: ver_curso.php');

?>