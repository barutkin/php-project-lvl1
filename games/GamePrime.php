<?php

namespace BrainGames\GamePrime;

use function BrainGames\Cli\askQuestion;

function gamePrime(): string
{
    $num = rand(1, 1000);
    askQuestion($num);

    return getCorrectAnswer($num);
}

function getCorrectAnswer(int $num): string
{
    if ($num % 2 === 0) {
        return 'no';
    }

    $divider_init = 1;
    $dividerUpperEdge = $num / 2;
    $divider = $divider_init;

    for ($i = 3; $i < $dividerUpperEdge; $i++) {
        if ($num % $i === 0) {
            $divider = $i;
        }
    }

    return $divider === $divider_init ? 'yes' : 'no';
}
