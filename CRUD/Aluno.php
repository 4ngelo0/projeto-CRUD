<html>
    <head>
            <meta charset="utf-8">
    </head>
    <body>

        <?php if(!isset($_GET['editar'])){ ?>

            <form method="POST" action="processa_aluno.php">
                <label> NOME:</label>
                <input type="text" name="nome" placeholder="Digite seu nome"></br></br>
                <label>IDADE:</label>
                <input type="text" name="idade" placeholder="Digite sua idade"></br></br>
                <label> ALTURA:</label>
                <input type="text" name="altura" placeholder="Digite sua altura"></br></br>
                <label>ESCOLARIDADE:</label>
                <input type="text" name="escolaridade"placeholder="Digite sua escolaridade"></br></br>

                <input type="submit" value="CADASTRAR">
            </form>

        <?php }else{ ?>                   
                            <?php include 'conexao.php'; 
                                $consulta = "SELECT * FROM alunos";
                                $consulta2 = mysqli_query($conexao, $consulta);

                                while($linha = mysqli_fetch_array($consulta2)){ ?>
                                    <?php if($linha['id'] == $_GET['editar']){ ?>

                        <form method="POST" action="edita_aluno.php">
                            <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
                            <label> NOME:</label>
                            <input type="text" name="nome" value="<?php echo $linha['nome']; ?>"></br></br>
                            <label>IDADE:</label>
                            <input type="text" name="idade" value="<?php echo $linha['idade']; ?>"></br></br>
                            <label> ALTURA:</label>
                            <input type="text" name="altura" value="<?php echo $linha['altura']; ?>"></br></br>
                            <label>ESCOLARIDADE:</label>
                            <input type="text" name="escolaridade" value="<?php echo $linha['escolaridade']; ?>"></br></br>

                            <input type="submit" value="EDITAR">
                        </form>
                        <a href="./ver_aluno.php">Voltar</a>
                <?php } ?>  <!--FECHA CHAVE DO IF-->
            <?php } ?> <!--FECHA CHAVE DO WHILE-->
        <?php } ?> <!--FECHA CHAVE DO ELSE-->
    </body>
</hmtl>