<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule sua nota</title>
</head>
<body style="text-align: center;">
    <div class="login-container" style="text-align: center; border: 1px solid rgb(0, 0, 0); padding: 10px; width: 320px; margin-left: 585px;">

        <h2>Calcular aprovação</h2>
        <form action="calcula_nota.php" method="post">
            <label for="nota">Digite sua nota:</label>
            <input type="number" name="nota" id="nota"  required>
            <br><br>
            <label for="disciplina">Disciplina:­ㅤㅤ­­</label>
            <input type="text" name="disciplina" id="disciplina" required><br><br>
            <button type="submit">Calcular</button>
        </form>  
    </div>  
</body>
</html>