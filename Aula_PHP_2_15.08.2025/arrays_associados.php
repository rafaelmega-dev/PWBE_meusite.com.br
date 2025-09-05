<?php
    $pessoa=[
        "Nome" => "João",
        "Idade"=> 30,
        "CPF"=>"123456789-12",
        "Massa"=>67.3,
        "RG"=>1122334456
    ];
    echo "Olá ".$pessoa["Nome"].", você está com ".$pessoa["Idade"]." anos, seu CPF é ".$pessoa["CPF"]." seu RG é ".$pessoa["RG"]." e seu peso é de ".$pessoa["Massa"]." Kg";

?>