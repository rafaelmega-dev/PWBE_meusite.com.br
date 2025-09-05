<?php
function nomeDaFuncao($parametro1,$parametro2) {
    $resultado=$parametro1+$parametro2;
    return $resultado;
}
$soma=nomeDaFuncao(5,10);
echo "O resultado é:  " . $soma;
?>