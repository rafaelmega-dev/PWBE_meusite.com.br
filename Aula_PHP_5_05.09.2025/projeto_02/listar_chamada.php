<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamada</title>
</head>
<body>
    <h2 style="text-align: center;">Registros da Chamada</h2>

    <div style="text-align: left; font-family: Arial, sans-serif; background-color: #f0f0f0; padding: 20px; border-radius: 10px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); max-width: 400px; margin: auto;">
            <?php 
                require_once 'funcao.php';
                listarchamada();
            ?>
    </div>
</body>
</html>