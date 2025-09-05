<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 2-Chamada</title>
</head>
<body>
    <div class="login-container">
    <h2 style="text-align: center;">Registro chamada</h2>
    <form action="gravar_chamada.php" method="post" style="text-align: center; font-family: Arial, sans-serif; background-color: #f0f0f0; padding: 20px; border-radius: 10px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); max-width: 400px; margin: auto;">
        <label for="nome" style="color: blue; font-weight: bold; display:block; margin-top: 10px;">Nome</label>
        <input type="text" id="nome" name="nome" required
                style="width: 50%; padding: 8px; border: 1px solid #888; border-radius: 10px; margin-top: 4px;"><br>
        
        <label for="sala" style="color: blue; font-weight: bold; display:block; margin-top: 10px;">Sala</label>
        <input type="text" id="sala" name="sala" required
                style="width: 50%; padding: 8px; border: 1px solid #888; border-radius: 10px; margin-top: 4px;"><br>

        <label for="rm" style="color: blue; font-weight: bold; display:block; margin-top: 10px;">R.M</label>
        <input type="number" id="rm" name="rm" required
                style="width: 50%; padding: 8px; border: 1px solid #888; border-radius: 10px; margin-top: 4px;"><br>
        
        <input type="submit" value="Registrar"
                style="margin-top: 15px; padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
    </form>
</body>
</html>