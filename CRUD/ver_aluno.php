<html>

    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table style="border: 2px solid #ccc;">
            <thead>
                <th>NOME DO ALUNO</th>
                <th>IDADE</th>
                <th>EDITAR</th>
                <th>DELETAR</th>
            </thead>
            <tbody>
                <?php
                    include 'conexao.php';

                    $consulta = 'SELECT * FROM alunos';
                    $consulta_alunos = mysqli_query($conexao, $consulta);

                    while($linha = mysqli_fetch_array($consulta_alunos)){
                        echo '<tr><td>' . $linha['nome'] . '</td>';
                        echo '<td>' . $linha['idade'] . '</td>';
                ?>

                <td>
                    <a href="Aluno.php?editar=<?php echo $linha['id']; ?>">
                    <input type="submit" value="EDITAR">
                    </a></td>

                <td><a href="deleta_aluno.php?ID=<?php echo $linha['id']; ?>">
                <input type="submit" value="DELETAR"/>
                </a></td></tr>  

                <?php   
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>