<html>

    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table style="border: 2px solid #ccc;">
            <thead>
                <th>NOME DO CURSO</th>
                <th>AREA</th>
                <th>EDITAR</th>
                <th>DELETAR</th>
            </thead>
            <tbody>

                <?php
                    include 'conexao.php';

                    $mostrar = 'SELECT * FROM cursos';
                    $consulta_cursos = mysqli_query($conexao, $mostrar);

                    while($linha = mysqli_fetch_array($consulta_cursos)){
                        echo '<tr><td>' . $linha['NOME'] . '</td>';
                        echo '<td>' . $linha['AREA'] . '</td>';
                ?>

                    <td>
                    <a href="curso.php?editar=<?php echo $linha['ID']; ?>">
                    <input type="submit" value="EDITAR">
                    </a></td>   

                <td><a href="deleta_curso.php?ID=<?php echo $linha['ID']; ?>">
                <input type="submit" value="DELETAR"/>
                </a></td></tr>  


                <?php   
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>