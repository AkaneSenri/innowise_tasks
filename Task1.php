<?php

namespace src;

class Task1
{
    public function main(int $inputNumber): string
    {
        if ($inputNumber > 30) {
            return 'More than 30';
        } elseif ($inputNumber > 20) {
            return 'More than 20';
        } elseif ($inputNumber > 10) {
            return 'More than 10';
        } elseif ($inputNumber < 10) {
            return 'Less than 10';
        }
    }
}

