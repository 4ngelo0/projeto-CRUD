<html>
    <head>
            <meta charset="utf-8">
    </head>
    <body>

    <?php if(!isset($_GET['editar'])){ ?>

    <form method="POST" action="processa_curso.php">
                <label> NOME:</label>
                <input type="text" name="nome" placeholder="Digite o nome do curso"></br></br>
                
                <label>AREA:</label>
                <input type="text" name="area"placeholder="Digite a area"></br></br>

                <label> CARGA HORÁRIA:</label>
                <input type="number" name="carga" placeholder="Digite a carga horária"></br></br>

                <label> DESCRIÇÃO:</label>
                <input type="text" name="desc" placeholder="Digite uma descrição"></br></br>
                <input type="submit" value="CADASTRAR">
                </form>

<?php }else{ ?>                   
                    <?php include 'conexao.php'; 
                        $consulta = "SELECT * FROM cursos";
                        $consulta2 = mysqli_query($conexao, $consulta);

                        while($linha = mysqli_fetch_array($consulta2)){ ?>
                            <?php if($linha['ID'] == $_GET['editar']){ ?>

                <form method="POST" action="editar_curso.php">
                    <input type="hidden" name="ID" value="<?php echo $linha['ID']; ?>">
                    <label> NOME:</label>
                    <input type="text" name="NOME" value="<?php echo $linha['NOME']; ?>"></br></br>
                    <label>AREA:</label>
                    <input type="text" name="AREA" value="<?php echo $linha['AREA']; ?>"></br></br>
                    <label> CARGA HORÁRIA:</label>
                    <input type="number" name="CARGA_HORARIA" value="<?php echo $linha['CARGA_HORARIA']; ?>"></br></br>
                    <label>DESCRIÇÃO:</label>
                    <input type="text" name="DESCRICAO" value="<?php echo $linha['DESCRICAO']; ?>"></br></br>

                    <input type="submit" value="EDITAR">
                </form>
        <?php } ?>  <!--FECHA CHAVE DO IF-->
    <?php } ?> <!--FECHA CHAVE DO WHILE-->
<?php } ?> <!--FECHA CHAVE DO ELSE-->
</body>
</hmtl>