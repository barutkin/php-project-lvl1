<?php

namespace BrainGames\GameCalc;

use function BrainGames\Cli\askQuestion;

const MATH_OPS_COUNT = 5;
const MATH_OPS = array('+', '-', '*', '/', '%');

function gameCalc(): string
{
    $num1 = rand(0, 100);
    $num2 = rand(0, 100);
    $mathOp = rand(0, MATH_OPS_COUNT - 1);
    askQuestion("{$num1} " . MATH_OPS[$mathOp] . " $num2");

    return getCorrectAnswer($num1, $num2, $mathOp);
}

function getCorrectAnswer(int $num1, int $num2, int $mathOp): string
{
    switch (MATH_OPS[$mathOp]) {
        case '+':
            $correctAnswer = $num1 + $num2;
            break;
        case '-':
            $correctAnswer = $num1 - $num2;
            break;
        case '*':
            $correctAnswer = $num1 * $num2;
            break;
        case '/':
            $correctAnswer = (int) ($num1 / $num2);
            break;
        case '%':
            $correctAnswer = $num1 % $num2;
            break;
    }

    return (string) $correctAnswer;
}
