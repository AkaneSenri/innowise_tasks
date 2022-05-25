<?php

namespace src;

class Task7
{
    function main(array $input, int $position): array
    {
        if ($position > 0 && (count($input)-1) >= $position && count($input) > 0) {
            unset($input[$position]);
            $newArray = [];
            foreach ($input as &$value) {
                array_push($newArray, $value);
            }
            return $newArray;
        } else {
            throw new \InvalidArgumentException;
        }
    }
}