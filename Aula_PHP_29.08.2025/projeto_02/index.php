<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="login-container">
    <h2>Registro chamada</h2>
    <form action="gravar_chamada.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="sala">Sala</label>
        <input type="text" id="sala" name="sala" required>

        <label for="rm">R.M</label>
        <input type="number" id="rm" name="rm" required>
        
        <input type="submit" value="Entrar">
    </form>
</body>
</html>