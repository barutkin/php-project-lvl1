<?php

namespace BrainGames\Cli;

use function cli\prompt;
use function cli\line;

function run()
{
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
}
