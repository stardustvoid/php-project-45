<?php

namespace BrainGames\Utils;

function isEven(int $num): bool
{
    return $num % 2 === 0;
}

function boolToText(bool $value): string
{
    return $value ? 'yes' : 'no';
}
