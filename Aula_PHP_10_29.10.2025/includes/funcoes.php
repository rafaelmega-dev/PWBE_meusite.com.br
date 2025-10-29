<?php
  
    function gravar_cliente($cliente) {
        $arquivo = 'C:\xampp\htdocs\PWBE_meusite.com.br\Aula_PHP_10_29.10.2025\dados\clientes.json';

        if (file_exists($arquivo)) {
            $dados = json_decode(file_get_contents($arquivo), true);
        } else {
            $dados = [];
        }

        $dados[] = $cliente;

        file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        }

    function gravar_produto($produto) {
        $arquivo = 'C:\xampp\htdocs\PWBE_meusite.com.br\Aula_PHP_10_29.10.2025\dados\produtos.json';

        if (file_exists($arquivo)) {
            $dados = json_decode(file_get_contents($arquivo), true);
        } else {
            $dados = [];
        }

        $dados[] = $produto;

        file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        }

    function ler_clientes($arquivo) {
        $arquivo = 'C:\xampp\htdocs\PWBE_meusite.com.br\Aula_PHP_10_29.10.2025\dados\clientes.json';

        if (file_exists($arquivo)) {
            return json_decode(file_get_contents($arquivo), true);
        } else {
            return [];
        }
    }

    function ler_produtos($arquivo1) {
        $arquivo1 = 'C:\xampp\htdocs\PWBE_meusite.com.br\Aula_PHP_10_29.10.2025\dados\produtos.json';

        if (file_exists($arquivo1)) {
            return json_decode(file_get_contents($arquivo1), true);
        } else {
            return [];
        }
    }
    
    