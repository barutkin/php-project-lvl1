<?php

namespace BrainGames\GameSkel;

use function BrainGames\Cli\printGreeting;
use function BrainGames\Cli\getName;
use function BrainGames\Cli\askAnswer;
use function BrainGames\Cli\printHello;
use function BrainGames\Cli\printEndLoose;
use function BrainGames\Cli\printEndWin;
use function BrainGames\Cli\printGameRules;
use function BrainGames\Cli\printCorrect;
use function BrainGames\Cli\printWrong;
use function BrainGames\GameEven\gameEven;
use function BrainGames\GameCalc\gameCalc;
use function BrainGames\GameGcd\gameGcd;
use function BrainGames\GameProgression\gameProgression;
use function BrainGames\GamePrime\gamePrime;

function gameSkel(string $gameTitle, int $questionsCount): int
{
    printGreeting();
    gameStart($gameTitle);
    $name = getName();
    printHello($name);

    for ($i = 0; $i < $questionsCount; $i++) {
        switch ($gameTitle) {
            case 'even':
                $correctAnswer = gameEven();
                break;
            case 'calc':
                $correctAnswer = gameCalc();
                break;
            case 'gcd':
                $correctAnswer = gameGcd();
                break;
            case 'progression':
                $correctAnswer = gameProgression();
                break;
            case 'prime':
                $correctAnswer = gamePrime();
                break;
        }
        $answer = askAnswer();
        if (gameCheckAnswers($answer, $correctAnswer)) {
            printCorrect();
            continue;
        } else {
            printWrong($answer, $correctAnswer);
            gameEnd($name, false);
            return 0;
        }
    }

    gameEnd($name, true);

    return 0;
}

function gameStart(string $gameTitle): int
{
    printGameRules($gameTitle);

    return 0;
}

function gameEnd($name, bool $isWin): int
{
    if ($isWin) {
        printEndWin($name);
    } else {
        printEndLoose($name);
    }

    return 0;
}

function gameCheckAnswers($answer, $correctAnswer): bool
{
    if ($answer === $correctAnswer) {
        return true;
    } else {
        return false;
    }
}
