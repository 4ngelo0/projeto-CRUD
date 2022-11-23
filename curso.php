<html>
    <head>
            <meta charset="utf-8">
    </head>
    <body>

    <?php if(!isset($_GET['editar'])){ ?>

    <form method="POST" action="processa_curso.php">
                <label> NOME:</label>
                <input type="text" name="nome_curso" placeholder="Digite o nome do curso"></br></br>
                
                <label>AREA:</label>
                <input type="text" name="area"placeholder="Digite a area"></br></br>

                <label> CARGA HORÁRIA:</label>
                <input type="number" name="carga_h" placeholder="Digite a carga horária"></br></br>

                <label> DESCRIÇÃO:</label>
                <input type="text" name="descricao" placeholder="Digite uma descrição"></br></br>
                <input type="submit" value="CADASTRAR">
                </form>

<?php }else{ ?>                   
                    <?php include 'conexao.php'; 
                        $consulta = "SELECT * FROM curso";
                        $consulta2 = mysqli_query($conexao, $consulta);

                        while($linha = mysqli_fetch_array($consulta2)){ ?>
                            <?php if($linha['cod_curso'] == $_GET['editar']){ ?>

                <form method="POST" action="editar_curso.php">
                    <input type="hidden" name="cod_curso" value="<?php echo $linha['cod_curso']; ?>">
                    <label> NOME:</label>
                    <input type="text" name="nome_curso" value="<?php echo $linha['nome_curso']; ?>"></br></br>
                    <label>AREA:</label>
                    <input type="text" name="area" value="<?php echo $linha['area']; ?>"></br></br>
                    <label> CARGA HORÁRIA:</label>
                    <input type="number" name="carga_h" value="<?php echo $linha['carga_h']; ?>"></br></br>
                    <label>DESCRIÇÃO:</label>
                    <input type="text" name="descricao" value="<?php echo $linha['descricao']; ?>"></br></br>

                    <input type="submit" value="EDITAR">
                </form>
        <?php } ?>  <!--FECHA CHAVE DO IF-->
    <?php } ?> <!--FECHA CHAVE DO WHILE-->
<?php } ?> <!--FECHA CHAVE DO ELSE-->
</body>
</hmtl>