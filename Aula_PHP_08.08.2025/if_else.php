<?php
    $idade=20;
    $temCarteira=false;

    if ($idade >= 18 && $temCarteira) {
        echo "Pode dirigir.";
    } else {
        echo "Não pode dirigir.";
    }
?>