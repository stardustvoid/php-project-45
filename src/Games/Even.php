<?php

namespace BrainGames\Games\Even;

use function BrainGames\Utils\boolToText;
use function BrainGames\Utils\isEven;
use function BrainGames\Engine\startBrainGame;

function startGameEven()
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    $data = [];

    for ($i = 0; $i <= 2; $i++) {
        $question = rand(1, 100);
        $correctAnswer = boolToText(isEven($question));

        $data[] = [$question, $correctAnswer];
    }

    startBrainGame($rules, $data);
}
