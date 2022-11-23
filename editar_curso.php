<?php

    include 'conexao.php';

    $id = $_POST['cod_curso'];
    $nome = $_POST['nome_curso'];
    $area = $_POST['area'];
    $carga = $_POST['carga_h'];
    $desc = $_POST['descricao'];

    $consulta = "UPDATE curso SET nome_curso = '$nome',
                                    area = '$area',
                                    carga_h = $carga, 
                                    descricao = '$desc'
                                    WHERE cod_curso = $id";

    mysqli_query($conexao, $consulta);

    header('location: ver_curso.php');
?>