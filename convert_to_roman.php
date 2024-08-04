<?php

require 'RomanConverter.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['toRoman']) && !empty($_POST['integer'])) {
    $number = intval($_POST['integer']);
    if ($number < 1 || $number > 3999) {
        $error = "O sistema romano tradicional não aceita números negativos e só permite números inteiros no intervalo de 1 a 3.999. Por favor, digite um número dentro deste intervalo.";
    } else {
        $roman = RomanConverter::toRoman($number);
        $result = "Número $number em romano é: $roman";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão para Romano</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="main-title">Resultado da Conversão para Romano</h1>
        <?php if (isset($error)): ?>
            <p class='error'><?php echo htmlspecialchars($error); ?></p>
        <?php elseif (isset($result)): ?>
            <p class='result'><?php echo htmlspecialchars($result); ?></p>
        <?php endif; ?>
        <a href="index.php" class="back-button">Voltar</a>
    </div>
</body>
</html>
