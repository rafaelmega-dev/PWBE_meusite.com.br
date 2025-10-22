<link rel="stylesheet" href="style1.css">
    <div><label>
    <?php
        $nome=$_POST['nome'];
        $numero_intervalo=$_POST['numero_intervalo'];
        $premio=$_POST['premio'];
        $numero_sort=rand(1, $numero_intervalo);
        $arquivo = 'ganhadores.json';
$ganhadores = file_exists($arquivo) ? json_decode(file_get_contents($arquivo), true) : [];

// Verifica se o nome já ganhou antes
foreach ($ganhadores as $g) {
    if (strtolower($g['nome']) === strtolower($nome)) {
        echo "<h2>$nome já ganhou um prêmio e não pode participar novamente.</h2>";
        echo "<button class='botao'><a href='index.php'>Voltar ao Sorteio</a></button>";
        exit;
    }
}
        echo "<h1>Rifa Sorteada</h1>";
        echo "O Nome do Participante é <strong>$nome</strong>, ";
        echo "o Intervalo do Sorteio é <strong>(1, $numero_intervalo)</strong><br>";
        echo "e o Prêmio é <strong>$premio</strong><br>";
        date_default_timezone_set("America/Sao_Paulo");
        echo "Data atual: <strong>".date("d/m/Y")."</strong><br>";
        echo "Hora atual: <strong>".date("H:i:s")."</strong><br>";
    ?>
    </label>
    <label>Agora, escolha um número entre 1 e <?php echo $numero_intervalo;?>:</label>
    <form action="resultado.php" method="post">
        <input type="number" name="numero_escolhido" id="nome" min="1" max="<?php echo $numero_intervalo;?>" required>
        <input type="hidden" name="numero_sort" value="<?php echo $numero_sort;?>">
        <input type="hidden" name="nome" value="<?php echo $nome;?>">
        <input type="hidden" name="premio" value="<?php echo $premio;?>">
        <input type="hidden" name="numero_intervalo" value="<?php echo $numero_intervalo;?>"><br>
        <button class="botao" type="submit">Enviar Número</button>
    </form>
</div>
    


    