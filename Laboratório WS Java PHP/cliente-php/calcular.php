<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op = $_POST['operacao'];

    // URL da API Spring Boot
    $url = "http://localhost:8080/{$op}/{$n1}/{$n2}";

    // Inicializa o cURL para fazer a requisição GET
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $resposta = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Se o código HTTP for 200 (OK), redireciona com o resultado
    if ($httpCode == 200) {
        header("Location: resultado.php?res=" . urlencode($resposta));
    } else {
        header("Location: resultado.php?res=" . urlencode("Erro ao conectar na API Java"));
    }
    exit;
}
?>