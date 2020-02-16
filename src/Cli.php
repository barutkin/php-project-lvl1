<?php

namespace BrainGames\Cli;

use function cli\prompt;
use function cli\line;

function printGreeting()
{
    print_r("Welcome to the Brain Games!". PHP_EOL .
        "Answer \"yes\" if the number is even, otherwise answer \"no\"." . PHP_EOL . PHP_EOL);
}

function getName() : string
{
    $name = prompt('May I have your name?');
    return $name;
}

function printHello(string $name)
{
    line("Hello, {$name}!");
}

function askQuestion(int $num)
{
    line("Question: {$num}");
}
