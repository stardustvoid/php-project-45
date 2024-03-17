<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Utils\boolToText;
use function BrainGames\Utils\isEven;

function gameEven()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $score = 0;

    for ($i = 1; $i <= 3; $i++) {
        $num = rand(1, 100);
        $correctAnswer = boolToText(isEven($num));

        line('Question: %s', $num);
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
