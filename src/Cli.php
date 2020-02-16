<?php

namespace BrainGames\Cli;

use function cli\prompt;
use function cli\line;

function printGreeting()
{
    print_r("Welcome to the Brain Games!\n\n");
}

function run()
{
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
}
