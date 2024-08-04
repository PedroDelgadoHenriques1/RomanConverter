<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Números Romanos e Inteiros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="main-title">Conversor de Números Romanos e Inteiros</h1>

        <form method="post" action="convert_to_roman.php">
            <div class="form-group">
                <label for="integer">Número Inteiro:</label>
                <input 
                    type="number" 
                    id="integer" 
                    name="integer" 
                    min="1" 
                    max="3999" 
                    oninvalid="this.setCustomValidity('O sistema romano tradicional não aceita números negativos e só permite números inteiros no intervalo de 1 a 3.999. Por favor, digite um número dentro deste intervalo.')" 
                    oninput="this.setCustomValidity('')" 
                    required>
                <button type="submit" name="toRoman" class="action-button">Converter para Romano</button>
            </div>
        </form>

        <form method="post" action="convert_from_roman.php">
            <div class="form-group">
                <label for="roman">Número Romano:</label>
                <input 
                    type="text" 
                    id="roman" 
                    name="roman" 
                    pattern="[IVXLCDMivxlcdm]+" 
                    title="Digite apenas números romanos válidos em maiúsculas ou minúsculas." 
                    required>
                <button type="submit" name="fromRoman" class="action-button">Converter para Inteiro</button>
            </div>
        </form>
    </div>
</body>
</html>
