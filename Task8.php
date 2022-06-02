<?php

namespace src;

class Task8
{
    public function main(string $json): string
    {
        if (json_last_error() === JSON_ERROR_NONE) {
            $newData = json_decode($json, true);

            $my_array = [];
            $newString = '';
            foreach ($newData as $key => $chunk) {
                if (is_array($chunk)) {
                    $content = $chunk;

                    foreach ($content as $k => $v) {
                        $temp = $k;
                        $temp .= ': ';
                        $temp .= $v;
                        $newString .= $temp;
                        $newString .= "</br>";
                    }
                } else {
                    $temp = $key;
                    $temp .= ': ';
                    $temp .= $chunk;
                    $newString .= $temp;
                    $newString .= "</br>";
                }
            }

            return $newString;
        } else {
            throw new \InvalidArgumentException;
        }
    }
}
