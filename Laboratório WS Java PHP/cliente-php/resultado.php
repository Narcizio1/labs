<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 100px; }
        .res { font-size: 24px; color: #2c3e50; font-weight: bold; }
        a { text-decoration: none; color: blue; }
    </style>
</head>
<body>
    <h1>Resultado da Operação</h1>
    <p class="res"><?php echo htmlspecialchars($_GET['res'] ?? 'Sem resultado'); ?></p>
    <br>
    <a href="index.php">← Voltar para a Calculadora</a>
</body>
</html>