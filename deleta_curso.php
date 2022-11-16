<?php

    include 'conexao.php';

    $id = $_GET['ID'];
    $mostrar = "DELETE FROM cursos WHERE ID = $id";

    mysqli_query($conexao, $mostrar);

    header('location: ver_curso.php');
?>