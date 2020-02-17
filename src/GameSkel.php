<?php

namespace BrainGames\GameSkel;

use function BrainGames\Cli\printGreeting;
use function BrainGames\Cli\getName;
use function BrainGames\Cli\printHello;
use function BrainGames\Cli\printEndLoose;
use function BrainGames\Cli\printEndWin;
use function BrainGames\Cli\printGameRules;
use function BrainGames\GameEven\gameEven;

function gameSkel(string $gameTitle, int $questionsCount): int
{
    printGreeting();
    gameStart($gameTitle);
    $name = getName();
    printHello($name);

    for ($i = 0; $i < $questionsCount; $i++) {
        switch ($gameTitle) {
            case 'even':
                $isAnswerCorrect = gameEven();
                break;
        }
        if ($isAnswerCorrect) {
            continue;
        } else {
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
