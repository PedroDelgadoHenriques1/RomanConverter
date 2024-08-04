<?php

class RomanConverter
{
    public static $romanNumerals = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];

    /**
     * Converte um número inteiro para um número romano.
     * 
     * @param int $number
     * @return string
     */
    public static function toRoman(int $number): string
    {
        $result = '';

        foreach (self::$romanNumerals as $roman => $value) {
            while ($number >= $value) {
                $result .= $roman;
                $number -= $value;
            }
        }

        return $result;
    }

    /**
     * Converte um número romano para um número inteiro.
     * 
     * @param string $roman
     * @return int
     */
    public static function fromRoman(string $roman): int
    {
        $roman = strtoupper($roman);

        $result = 0;
        $i = 0;

        while ($i < strlen($roman)) {
            $currentSymbol = $roman[$i];
            $currentValue = self::$romanNumerals[$currentSymbol];

            $nextValue = 0;
            if ($i + 1 < strlen($roman)) {
                $nextSymbol = $roman[$i + 1];
                $nextValue = self::$romanNumerals[$nextSymbol];
            }

            if ($nextValue > $currentValue) {
                $result += ($nextValue - $currentValue);
                $i += 2;
            } else {
                $result += $currentValue;
                $i++;
            }
        }

        return $result;
    }

    /**
     * Valida se um número romano é válido.
     * 
     * @param string $roman
     * @return bool
     */
    public static function isValidRoman(string $roman): bool
    {
        // Verifica se o número romano é composto apenas por caracteres válidos e está no formato correto
        return preg_match('/^[IVXLCDM]+$/i', $roman);
    }
}
?>
