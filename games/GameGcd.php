<?php

namespace BrainGames\GameGcd;

use function BrainGames\Cli\askQuestion;
use function BrainGames\Cli\askAnswer;
use function BrainGames\Cli\printCorrect;
use function BrainGames\Cli\printWrong;

function gameGcd(): bool
{
    $num1 = rand(0, 100);
    $num2 = rand(0, 100);
    $correctAnswer = getCorrectAnswer($num1, $num2);
    askQuestion("{$num1} {$num2}");
    $answer = askAnswer();
    if ($answer === $correctAnswer) {
        $isAnswerCorrect = true;
        printCorrect();
    } else {
        $isAnswerCorrect = false;
        printWrong($answer, $correctAnswer);
    }

    return $isAnswerCorrect;
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
