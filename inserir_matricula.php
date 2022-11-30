<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="processa_matricula.php" method="POST">
    <select name="escolha_aluno" id="curso">
        <option>Selecione um aluno</option>

        <?php
            include 'conexao.php';
            $consulta = "SELECT * FROM alunos";
            $consulta_aluno = mysqli_query($conexao, $consulta);
            while ($linha = mysqli_fetch_array($consulta_aluno)){
                echo '<option value="' . $linha ['ID'] . '">' . 
                    $linha['NOME'] . '</option>';
            }
        ?>
    </select>

    <select name="escolha_curso" id="curso">
        <option>Selecione um aluno</option>

        <?php
            include 'conexao.php';
            $consulta = "SELECT * FROM curso";
            $consulta_aluno = mysqli_query($conexao, $consulta);
            while ($linha = mysqli_fetch_array($consulta_aluno)){
                echo '<option value="' . $linha ['cod_curso'] . '">' . 
                    $linha['nome_curso'] . '</option>';
            }
        ?>
    </select>
</form>

</body>
</html>