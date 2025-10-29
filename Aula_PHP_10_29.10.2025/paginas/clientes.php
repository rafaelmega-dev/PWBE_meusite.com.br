<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'C:\xampp\htdocs\PWBE_meusite.com.br\Aula_PHP_10_29.10.2025\includes\header.php';
        include 'C:\xampp\htdocs\PWBE_meusite.com.br\Aula_PHP_10_29.10.2025\includes\funcoes.php';

    $arquivo = 'C:\xampp\htdocs\PWBE_meusite.com.br\Aula_PHP_10_29.10.2025\dados\clientes.json';
    $clientes = ler_clientes($arquivo);
    ?> 
    <hr>
    <h1>Cadastro de Clientes</h1>
    <form action="clientes.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $telefone=$_POST['telefone'];
         $cliente= [
        "nome" => $nome,
        "email" => $email,
        "telefone" => $telefone,
    ];

    echo gravar_cliente($cliente);
}
    ?>

    <h2>Tabela de Clientes</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
    <?php
        foreach($clientes as $c) {
        echo "<tr>
                <td>{$c['nome']}</td>
                <td>{$c['email']}</td>
                <td>{$c['telefone']}</td>
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