<?php
$n = $_POST['n'];

function parOuImpar($n) {
    if ($n % 2 == 0){
        return "Par";
    } else {
        return "Ímpar";
    }
}

function ehPrimo($n) {
    if ($n < 2) return false;
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

echo "<h2>Seu número é...</h2>";
echo "O número digitado foi: <b>".$n."</b><br>";
echo "Ele é: <b>".parOuImpar($n)."</b><br>";
echo "Seu antecessor é: <b>".($n-1)."</b><br>";
echo "Seu sucessor é: <b>".($n+1)."</b><br>";

if (ehPrimo($n)) {
    echo "E também: <b> é primo!</b>";
} else {
    echo "E também: <b> NÃO é primo!</b>";
}
?>
