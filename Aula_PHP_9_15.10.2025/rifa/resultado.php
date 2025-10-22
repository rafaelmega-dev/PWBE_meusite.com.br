<?php
$numero_escolhido=$_POST['numero_escolhido'];
$numero_sort=$_POST['numero_sort'];
$nome=$_POST['nome'];
$premio=$_POST['premio'];
$numero_intervalo=$_POST['numero_intervalo'];
echo "<link rel='stylesheet' href='style1.css'>";
echo "<div><label>";
if ($numero_escolhido == $numero_sort) {
    echo "<h1>Parabéns, $nome!</h1>";
    echo "Você escolheu o número <strong>$numero_escolhido</strong> e o número sorteado foi <strong>$numero_sort</strong>.<br>";
    echo "Você ganhou o prêmio: <strong>$premio</strong>!";
    // === SALVAR GANHADOR EM JSON ===
    $ganhador = [
        "nome" => $nome,
        "premio" => $premio,
        "numero_escolhido" => $numero_escolhido,
        "numero_sorteado" => $numero_sort,
        "numero_intervalo" => $numero_intervalo,
        "data" => date("d/m/Y H:i:s")
        
    ];

    $arquivo = 'ganhadores.json';

    if (file_exists($arquivo)) {
        $dados = json_decode(file_get_contents($arquivo), true);
    } else {
        $dados = [];
    }

    $dados[] = $ganhador;

    file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
} else {
    echo "<h1>Que pena, $nome!</h1>";
    echo "Você escolheu o número <strong>$numero_escolhido</strong> e o número sorteado foi <strong>$numero_sort</strong>.<br>";
    echo "Infelizmente, você não ganhou o prêmio: <strong>$premio</strong>.";
}
echo "</label><br>";
echo "<button class='botao'><a href='index.php'>Voltar ao Sorteio</a></button>";
echo "</div>";
