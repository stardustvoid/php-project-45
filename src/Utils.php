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
