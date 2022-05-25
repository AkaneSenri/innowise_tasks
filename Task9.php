<?php

namespace src;

class Task9

{

    function main(array $arr, int $number)
    {
        $array = is_array($arr);
        $num = is_int($number);

        if ($array == 1 || $num == 1) {
            $count = count($arr) - 2;
            $result = [];

            for ($x = 0; $x < $count; $x++) {
                if ($arr[$x] + $arr[$x + 1] + $arr[$x + 2] == $number) {
                    array_push($result, "{$arr[$x]} + {$arr[$x + 1]} + {$arr[$x + 2]} = $number");
                }
            }

        return $result;
        } else {
            throw new \InvalidArgumentException();
        }
    }
}
