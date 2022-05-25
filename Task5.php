<?php

namespace src;

function main(int $input)
{
    $one = 0;
    $two = 1;

    for ($i = 1; ; $i++) {
        $current = $one + $two;
        $one = $two;
        $two = $current;

        $length = strlen($current);
        if ($length == 100) {
            print($current);

            return $current;

            break;
        }
    }
}
