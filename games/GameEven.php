<?php

namespace BrainGames\GameEven;

use function BrainGames\Cli\askQuestion;
use function BrainGames\Cli\askAnswer;
use function BrainGames\Cli\printCorrect;
use function BrainGames\Cli\printWrong;

function gameEven(): bool
{
    $num = rand(0, 100);
    $correctAnswer = getCorrectAnswer($num);
    askQuestion($num);
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

function getCorrectAnswer(int $num): string
{
    return ($num % 2 === 0) ? 'yes' : 'no';
}
