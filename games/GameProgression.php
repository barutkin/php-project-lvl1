<?php

namespace BrainGames\GameProgression;

use function BrainGames\Cli\askQuestion;

const PROGRESSION_MEMBERS_COUNT = 10;

function gameProgression(): string
{
    $progressionStart = rand(0, 10);
    $progressionStep = rand(0, 10);
    $progressionMissingElement = rand(0, PROGRESSION_MEMBERS_COUNT - 1);
    askQuestion(creatQuestion($progressionStart, $progressionStep, $progressionMissingElement));

    return getCorrectAnswer($progressionStart, $progressionStep, $progressionMissingElement);
}

function creatQuestion($progressionStart, $progressionStep, $progressionMissingElement): string
{
    $question = '';

    for ($i = 0; $i < PROGRESSION_MEMBERS_COUNT; $i++) {
        $question .= ($i !== $progressionMissingElement) ?
            ' ' . (string) ($progressionStart + $progressionStep * $i) : ' ..';
    }

    return $question;
}

function getCorrectAnswer($progressionStart, $progressionStep, $progressionMissingElement): string
{
    return (string) ($progressionStart + $progressionStep * $progressionMissingElement);
}
