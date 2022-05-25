<?php

namespace src;

class Task10
{
    function main(int $input): array
    {
        if ($input >= 0) {
            $num_seq = [$input];
            if ($input < 1) {
                return [];
            }
            while ($input > 1) {
                if ($input % 2 == 0) {
                    $input = $input / 2;
                } else {
                    $input = 3 * $input + 1;
                }
                array_push($num_seq, $input);
            }
            return $num_seq;
        } else {
            throw new \InvalidArgumentException();
        }
    }
}
