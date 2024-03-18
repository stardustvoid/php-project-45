<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Utils\findGcd;
use function BrainGames\Engine\startBrainGame;

function startGameGcd()
{
    $rules = 'Find the greatest common divisor of given numbers.';
    $data = [];

    for ($i = 0; $i <= 2; $i++) {
        $numOne = rand(0, 50);
        $numTwo = rand(0, 50);
        $question = "{$numOne} {$numTwo}";
        $correctAnswer = (string) findGcd($numOne, $numTwo);

        $data[] = [$question, $correctAnswer];
    }

    startBrainGame($rules, $data);
}
