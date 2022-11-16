<?php

    include 'conexao.php';

    $id = $_POST['ID'];
    $nome = $_POST['NOME'];
    $area = $_POST['AREA'];
    $carga = $_POST['CARGA_HORARIA'];
    $desc = $_POST['DESCRICAO'];

    $consulta = "UPDATE cursos SET NOME = '$nome',
                                    AREA = '$area',
                                    CARGA_HORARIA = $carga, 
                                    DESCRICAO = '$desc'
                                    WHERE ID = $id";

    mysqli_query($conexao, $consulta);

    header('location: ver_curso.php');
?>