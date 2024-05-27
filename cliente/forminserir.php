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
    <h1>Dados do cliente</h1>
    <form action="inserir.php" method="post">
    <label for="nome">nome</label>
    <input type="text" name="nome" id="nome" required ><br><br>
    <label for="sexo">Sexo</label>
    <select name="sexo" id="sexo">
        <option value="Feminino">Feminino</option>
        <option value="Masculino">Masculino</option>
    </select><br><br>
    <label for="telefone">telefone</label>
    <input type="text" name="telefone" id="telefone"><br><br>
    <label for="endereco">endereço</label>
    <input type="text" name="endereco" id="endereco"><br><br>

    <input type="submit" value="Cadastrar">
    <input type="reset" value="Limpar">



    </form>
</body>
</html>