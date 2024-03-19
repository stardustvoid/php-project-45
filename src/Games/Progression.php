<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Utils\generateProgression;
use function BrainGames\Utils\hideElementInArray;
use function BrainGames\Engine\startBrainGame;

function startGameProgression()
{
    $rules = 'What number is missing in the progression?';
    $data = [];

    for ($i = 0; $i <= 2; $i++) {
        $start = rand(1, 20);
        $difference = rand(1, 10);
        $progression = generateProgression($start, $difference);
        $hideIndex = rand(0, count($progression) - 1);
        $question = hideElementInArray($progression, $hideIndex, '..');
        $correctAnswer = (string) $progression[$hideIndex];

        $data[] = [$question, $correctAnswer];
    }

    startBrainGame($rules, $data);
}
