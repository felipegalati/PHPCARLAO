<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        //pegar o id e executar o select com o parametro id
        if (isset($_GET['id'])){
            $id = $_GET['id'];
        }
        else{
            header('location:listar.php');
            exit();
        }
        include_once('../conectar.php');
        $sql = "select * from cliente where id = $id";
        $resultado = mysqli_query($conexao,$sql);
        
        if ($resultado && mysqli_num_rows($resultado)>0) {
            $cliente = mysqli_fetch_assoc($resultado);
        }
        else {
            header('location:listar.php');
            exit();
        }
    ?>


    <h1>Dados do cliente</h1>
    <form action="atualizar.php" method="post">
    <label for="nome">nome</label>
    <input type="text" name="nome" id="nome" required value="<?php echo $cliente['nome']; ?>"><br><br>

    <label for="sexo">Sexo</label>
    <select name="sexo" id="sexo">
        <option value="Feminino" <?php if($cliente['sexo']=='feminino') echo"selected" ?>>Feminino</option>
        <option value="Masculino" <?php if($cliente['sexo']=='masculino') echo"selected" ?>>Masculino</option>
    </select><br><br>

    <label for="telefone">telefone</label>
    <input type="text" name="telefone" id="telefone" value="<?php echo $cliente['telefone']; ?>"><br><br>

    <label for="endereco">endereço</label>
    <input type="text" name="endereco" id="endereco" value="<?php echo $cliente['endereco']; ?>"><br><br>

    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="submit" value="atualizar" class="btn btn-primary">
    <a href="listar.php" class="btn btn-warning">voltar</a>



    </form>
</body>
</html>