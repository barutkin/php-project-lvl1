<?php

namespace BrainGames\Game;

use function BrainGames\Cli\printGreeting;
use function BrainGames\Cli\getName;
use function BrainGames\Cli\printHello;
use function BrainGames\Cli\askQuestion;
use function BrainGames\Cli\askAnswer;
use function BrainGames\Cli\printCorrect;
use function BrainGames\Cli\printWrong;
use function BrainGames\Cli\printEndLoose;
use function BrainGames\Cli\printEndWin;

function game(int $questionsNumber): int
{
    printGreeting();
    $name = getName();
    printHello($name);

    for ($i = 0; $i < $questionsNumber; $i++) {
        $num = rand(0, 100);
        $correctAnswer = getCorrectAnswer($num);
        askQuestion($num);
        $answer = askAnswer();
        if ($answer === $correctAnswer) {
            printCorrect();
        } else {
            printWrong($answer, $correctAnswer);
            printEndLoose($name);
            return 0;
        }
    }

    printEndWin($name);
    return 0;
}

function getCorrectAnswer(int $num): string
{
    return ($num % 2 === 0) ? 'yes' : 'no';
}
