<?php

require 'RomanConverter.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fromRoman']) && !empty($_POST['roman'])) {
    $romanNumber = strtoupper($_POST['roman']);
    if (!RomanConverter::isValidRoman($romanNumber)) {
        $error = "Número romano inválido. Digite um número romano válido dentro das regras.";
    } else {
        $integer = RomanConverter::fromRoman($romanNumber);
        $result = "Número romano $romanNumber em inteiro é: $integer";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão para Inteiro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="main-title">Resultado da Conversão para Inteiro</h1>
        <?php if (isset($error)): ?>
            <p class='error'><?php echo htmlspecialchars($error); ?></p>
        <?php elseif (isset($result)): ?>
            <p class='result'><?php echo htmlspecialchars($result); ?></p>
        <?php endif; ?>
        <a href="index.php" class="back-button">Voltar</a>
    </div>
</body>
</html>
