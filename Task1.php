<?php

namespace src;

class Task1
{
    function main(int $inputNumber): string
    {
        if ($inputNumber > 30) {
            return "More than 30";
        }
        if ($inputNumber > 20) {
            return "More than 20";
        }
        if ($inputNumber > 10) {
            return "More than 10";
        }
        if ($inputNumber < 10) {
            return "Less than 10";
        }
    }
}

