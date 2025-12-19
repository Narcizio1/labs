<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP + Spring Boot</title>
    <style>
        body { font-family: Arial; display: flex; justify-content: center; margin-top: 50px; background-color: #f4f4f4; }
        .box { background: white; padding: 20px; border-radius: 10px; shadow: 0 0 10px rgba(0,0,0,0.1); }
        input, select, button { display: block; width: 100%; margin: 10px 0; padding: 10px; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Calculadora PHP</h2>
        <form action="calcular.php" method="POST">
            <input type="number" step="any" name="n1" placeholder="Número 1" required>
            <input type="number" step="any" name="n2" placeholder="Número 2" required>
            <select name="operacao">
                <option value="somar">Somar</option>
                <option value="subtrair">Subtrair</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>
            <button type="submit">Calcular</button>
        </form>
    </div>
</body>
</html>