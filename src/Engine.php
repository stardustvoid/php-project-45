<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function startBrainGame(string $rules, array $data)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line($rules);

    $score = 0;

    foreach ($data as [$question, $correctAnswer]) {
        line('Question: %s', $question);
        $answer = prompt('Your answer');

        if ($answer === $correctAnswer) {
            line('Correct!');
            $score += 1;
            if ($score === count($data)) {
                line("Congratulations, %s!", $name);
            }
        } else {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            break;
        }
    }
}
