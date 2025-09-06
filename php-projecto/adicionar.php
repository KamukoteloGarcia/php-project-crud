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
        <h2>Adicionar Cliente</h2>
        <form action= "php-actions/insert.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" id="sobrenome" name="sobrenome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="text" id="idade" name="idade" required>
            </div>
            <button type="submit" class="btn-submit" name="add-btn">Adicionar Cliente</button>
        </form>
    </div>
</body>
</html>