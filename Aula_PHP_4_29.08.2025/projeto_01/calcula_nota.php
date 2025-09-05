<?php
    $nota = $_POST['nota'];
    $disciplina = $_POST['disciplina'];
    if ($nota >= 7) {
        echo "<h2>Parabéns!</h2>";
        echo "<p>Sua nota é <b>$nota</b>. Você foi <b>aprovado </b>em $disciplina!</p>";
    } elseif ($nota >= 5 and $nota < 7) {
        echo "<h2>Você está de recuperação</h2>";
        echo "<p>Sua nota é <b>$nota</b>. Você está de<b> recuperação</b> $disciplina..</p>";
    }else {
        echo "<h2>Infelizmente você foi reprovado</h2>";
        echo "<p>Sua nota é <b>$nota</b>. Você foi <b> reprovado </b>em $disciplina.</p>";
    }