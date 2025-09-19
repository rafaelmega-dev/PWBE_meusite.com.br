<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Enviar Imagem</h1>
        <form action="processa_upload.php" method="post" enctype="multipart/form-data">
            <label>Selecione uma imagem:</label>
            <br><br>
            <input type="file" name="arquivo"  required>
            <br><br>
            <button type="submit">Enviar Imagem</button>
        </form>
        <br>
        <a href="index.php">Voltar para galeria</a>
</body>
</html>