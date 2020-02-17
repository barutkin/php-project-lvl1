<?php

namespace BrainGames\GameGcd;

use function BrainGames\Cli\askQuestion;

function gameGcd(): string
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    askQuestion("{$num1} {$num2}");

    return getCorrectAnswer($num1, $num2);
}

function getCorrectAnswer(int $num1, int $num2): string
{
    $gcd = 1;

    for ($i = 2; $i <= min($num1, $num2); $i++) {
        if ($num1 % $i === 0 && $num2 % $i === 0) {
            $gcd = $i;
        }
    }

    return (string) $gcd;
}
