<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Utils\convertBoolToText;
use function BrainGames\Utils\isPrime;
use function BrainGames\Engine\startBrainGame;

function startGamePrime()
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $data = [];

    for ($i = 0; $i <= 2; $i++) {
        $question = rand(1, 100);
        $correctAnswer = convertBoolToText(isPrime($question));

        $data[] = [$question, $correctAnswer];
    }

    startBrainGame($rules, $data);
}
