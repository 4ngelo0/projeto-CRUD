<?php

    include 'conexao.php';

    $id = $_GET['cod_curso'];
    $mostrar = "DELETE FROM curso WHERE cod_curso = $id";

    mysqli_query($conexao, $mostrar);

    header('location: ver_curso.php');
?>