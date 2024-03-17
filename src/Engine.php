<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function startBrainGame($rules, $data)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line($rules);

    $score = 0;

    for ($i = 0; $i < count($data); $i++) {
        [$question, $correctAnswer] = $data[$i];
        line('Question: %s', $question);
        $answer = prompt('Your answer');

        if ($answer === $correctAnswer) {
            line('Correct!');
            $score += 1;
        } else {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            break;
        }
    }

    if ($score === 3) {
        line("Congratulations, %s!", $name);
    }
}
