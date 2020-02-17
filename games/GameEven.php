<?php

namespace BrainGames\GameEven;

use function BrainGames\Cli\askQuestion;

function gameEven(): string
{
    $num = rand(0, 100);
    askQuestion((string) $num);

    return getCorrectAnswer($num);
}

function getCorrectAnswer(int $num): string
{
    return ($num % 2 === 0) ? 'yes' : 'no';
}
