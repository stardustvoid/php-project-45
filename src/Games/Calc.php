<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Utils\boolToText;
use function BrainGames\Utils\getRandOperator;
use function BrainGames\Utils\calculate;
use function BrainGames\Engine\startBrainGame;

function startGameCalc()
{
    $rules = 'What is the result of the expression?';
    $data = [];

    for ($i = 0; $i <= 2; $i++) {
        $operator = getRandOperator();
        $numOne = rand(0, 50);
        $numTwo = rand(0, 50);
        $question = "{$numOne} {$operator} {$numTwo}";
        $correctAnswer = (string) calculate($numOne, $numTwo, $operator);

        $data[] = [$question, $correctAnswer];
    }

    startBrainGame($rules, $data);
}
