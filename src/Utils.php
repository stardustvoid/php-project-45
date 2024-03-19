<?php

namespace BrainGames\Utils;

function isEven(int $num): bool
{
    return $num % 2 === 0;
}

function convertBoolToText(bool $value): string
{
    return $value ? 'yes' : 'no';
}

function getRandOperator(): string
{
    $operators = ['+', '-', '*'];

    return $operators[rand(0, 2)];
}

function calculate(int $numOne, int $numTwo, string $operator): int
{
    switch ($operator) {
        case '+':
            return $numOne + $numTwo;
        case '-':
            return $numOne - $numTwo;
        case '*':
            return $numOne * $numTwo;
    }
}

function findGcd(int $numOne, int $numTwo): int
{
    $remainder = $numOne % $numTwo;

    while ($remainder > 0) {
        $numOne = $numTwo;
        $numTwo = $remainder;
        $remainder = $numOne % $numTwo;
    }

    return $numTwo;
}

function generateProgression(int $start, int $difference, int $count = 10): array
{
    $progression = [];

    for ($i = $start; count($progression) < $count; $i += $difference) {
        $progression[] = $i;
    }

    return $progression;
}

function hideElementInArray(array $arr, int $index, string $replacement): string
{
    $arr[$index] = $replacement;

    return implode(' ', $arr);
}
