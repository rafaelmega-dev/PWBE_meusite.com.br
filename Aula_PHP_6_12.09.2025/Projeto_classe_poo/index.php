<?php
// Carrega os dados do banco.json
$bancoFile = "banco.json";
$dados = [];

if (file_exists($bancoFile)) {
    $json = file_get_contents($bancoFile);
    $dados = json_decode($json, true);
}

// Garante que existam arrays mesmo se estiver vazio
$professores = $dados["professores"] ?? [];
$alunos = $dados["alunos"] ?? [];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Index - Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Sistema de Cadastro</h1>
    
    <nav>
        <a href="cadastro.html">➕ Novo Cadastro</a>
    </nav>

    <hr>

    <h2>Professores</h2>
    <?php if (count($professores) > 0): ?>
        <ul>
            <?php foreach ($professores as $p): ?>
                <li>
                    <strong><?php echo htmlspecialchars($p["nome"]); ?></strong> - 
                    <?php echo htmlspecialchars($p["email"]); ?> 
                    (Disciplina: <?php echo htmlspecialchars($p["disciplina"]); ?>)
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhum professor cadastrado.</p>
    <?php endif; ?>

    <h2>Alunos</h2>
    <?php if (count($alunos) > 0): ?>
        <ul>
            <?php foreach ($alunos as $a): ?>
                <li>
                    <strong><?php echo htmlspecialchars($a["nome"]); ?></strong> - 
                    <?php echo htmlspecialchars($a["email"]); ?> 
                    (Matrícula: <?php echo htmlspecialchars($a["matricula"]); ?>)
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhum aluno cadastrado.</p>
    <?php endif; ?>

</body>
</html>
