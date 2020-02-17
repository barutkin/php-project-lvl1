<?php

namespace BrainGames\Cli;

use function cli\prompt;
use function cli\line;

function printGreeting(): int
{
    print_r("Welcome to the Brain Games!" . PHP_EOL);

    return 0;
}

function printGameRules(string $gameTitle): int
{
    switch ($gameTitle) {
        case 'even':
            print_r("Answer \"yes\" if the number is even, " .
                "otherwise answer \"no\"." . PHP_EOL . PHP_EOL);
            break;
    }

    return 0;
}

function getName(): string
{
    $name = prompt('May I have your name?');

    return $name;
}

function printHello(string $name): int
{
    line("Hello, {$name}!" . PHP_EOL);

    return 0;
}

function askQuestion(int $num): int
{
    line("Question: {$num}");

    return 0;
}

function askAnswer(): string
{
    return prompt('Your answer');
}

function printCorrect(): int
{
    line('Correct!');

    return 0;
}

function printWrong(string $answer, string $correctAnswer): int
{
    line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");

    return 0;
}

function printEndLoose(string $name): int
{
    line("Let's try again, {$name}!");

    return 0;
}

function printEndWin(string $name): int
{
    line("Congratulations, {$name}!");

    return 0;
}
