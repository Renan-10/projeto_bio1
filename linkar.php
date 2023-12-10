<?php
session_start();

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simular autenticação (substitua por lógica real)
    $codigo_profissional = ""; // Código do profissional
    $senha_correta = "";  // Senha correta

    // Verificar se as credenciais estão corretas
    if ($_POST["cdf"] == $codigo_profissional && $_POST["senha"] == $senha_correta) {
        // Credenciais corretas, redirecionar para realizar.html
        header("Location: realizar.html");
        exit();
    } else {
        // Credenciais incorretas (exemplo simples, adicione lógica de tratamento de erro)
        echo "<script>alert('Credenciais incorretas.');</script>";
    }
}
?>