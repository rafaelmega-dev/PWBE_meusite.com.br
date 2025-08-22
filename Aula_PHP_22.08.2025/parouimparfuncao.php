<?php
    $n=$_POST['n'];

    function parOuImpar($n) {
        if ($n % 2 == 0){
            return "Par";
        } else {
            return "Ímpar";
        }
    }
    
echo "<h2>Seu número é...</h2>";
echo "O número digitado foi: <b>".$n."</b> ele é: ";
echo "<b>".parOuImpar($n)."</b>";
echo ", seu antecessor é: <b>".$n-1 ."</b> e seu sucessor é: <b>".$n+1 ."</b><br>";
 
 
     
    
 