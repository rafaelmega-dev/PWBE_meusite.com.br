<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio da Rifa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div>
        <h1>Sorteio da Rifa</h1>
        <label><p>Coloque seu <strong>nome</strong>, o <strong> prêmio</strong> e o <strong>intervalo dos números</strong></p></label>
        <form action="sorteio.php" method="post">
                Nome: <input  type="text" name="nome" placeholder="Seu nome" required><br>
                Prêmio: <input type="text" name="premio" placeholder="Prêmio da Rifa" required><br>
                Intervalo: <input type="number" name="numero_intervalo" placeholder="Número de 2 a 1000" min="2" max="1000" required><br>

            <input type="submit" class="botao" value="Participar">
        </form>
   
    <h1>🏆 Ganhadores da Rifa</h1>

        <?php
        $arquivo = 'ganhadores.json';

        if (file_exists($arquivo)) {
            $dados_json = file_get_contents($arquivo);
            $ganhadores = json_decode($dados_json, true);

            if (!empty($ganhadores)) {
                echo "<ul>";
                foreach ($ganhadores as $g) {
                    echo "<li><strong>{$g['nome']}</strong> ganhou <strong>{$g['premio']}</strong> em {$g['data']} no sorteio com <strong>{$g['numero_intervalo']}</strong> números. (Número sorteado: <strong>{$g['numero_sorteado']})</strong></li>";
                }
                echo "</ul>";
            } else {
                echo "<p>Nenhum ganhador registrado ainda.</p>";
            }
        } else {
            echo "<p>O arquivo <strong>ganhadores.json</strong> ainda não existe.</p>";
        }
        ?>
</div>

</body>
</html>

