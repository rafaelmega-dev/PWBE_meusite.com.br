<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Pichal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'C:\xampp\htdocs\PWBE_meusite.com.br\Aula_PHP_10_29.10.2025\includes\header.php'; 
    include 'C:\xampp\htdocs\PWBE_meusite.com.br\Aula_PHP_10_29.10.2025\includes\funcoes.php';
    $arquivo1 = 'C:\xampp\htdocs\PWBE_meusite.com.br\Aula_PHP_10_29.10.2025\dados\produtos.json';
    $produtos = ler_produtos($arquivo1); ?>
    <hr>
    <h1>Cadastro de Produtos</h1>
    <form action="produtos.php" method="post">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="preco">Preço:</label>
        <input type="number" step="0.01" id="preco" name="preco" required><br><br>
        
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required></textarea><br><br>
        
        <input type="submit" value="Enviar">
    </form>
    
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome=$_POST['nome'];
        $preco=$_POST['preco'];
        $descricao=$_POST['descricao'];
         $produto= [
        "nome" => $nome,
        "preco" => $preco,
        "descricao" => $descricao,
    ];
    echo gravar_produto($produto);
}
    ?>
<h2>Tabela de Produtos</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
        </tr>
    <?php
        foreach($produtos as $p) {
        echo "<tr>
                <td>{$p['nome']}</td>
                <td>{$p['preco']}</td>
                <td>{$p['descricao']}</td>
              </tr>";
        }
    ?>
    </table>
        <a href="../index.php">Voltar ao Início
</a>
    <hr>
    <?php include 'C:\xampp\htdocs\PWBE_meusite.com.br\Aula_PHP_10_29.10.2025\includes\footer.php'; ?>
</body>
</html>