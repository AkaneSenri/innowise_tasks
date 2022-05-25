<?php

namespace src;

class Task3
{
    public function main(int $input): int
    {
        if ($input >= 10 && !is_float($input)) {
            if ($input > 0) {
                return ($input - 1) % 9 + 1;
            } else {
                return 0;
            }
        } else {
            throw new \InvalidArgumentException();
        }
    }
}
