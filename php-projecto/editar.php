<?php
    require_once 'conexaodb.php';
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM cliente WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add clientes</title>
    <link rel="stylesheet" href="assets/CSS/styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Editar Clientes</h2>
        <form action= "php-actions/update.php" method="POST">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo $dados['nome'];?>" required>
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" id="sobrenome" name="sobrenome" value="<?php echo $dados['sobrenome'];?>" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" value="<?php echo $dados['email'];?>" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="text" id="idade" name="idade" value="<?php echo $dados['idade'];?>" required>
            </div>
            <button type="submit" class="btn-submit" name="editar-btn">Editar Cliente</button>
            
        </form>
    </div>
</body>
</html>