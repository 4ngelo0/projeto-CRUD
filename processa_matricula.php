<?php

include 'conexao.php';
$I     D = $_POST['escolha_aluno'];
$cod_curso = $_POST['escolha_curso'];

$query =  "INSERT INTO matricula (cod_aluno, cod_curso)
            VALUE ($ID, $cod_curso)";

mysqli_query($conexao, $query);

header('location: ver_matricula');

?>