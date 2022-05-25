<?php

namespace src;

class Task4
{

    function main(string $input): string
    {
        $chunks = preg_split('/(-|_| )/', $input);
        $newString = '';
        foreach($chunks as &$chunk) {
            $newString .= ucfirst($chunk);
        }
        return $newString;
    }
}