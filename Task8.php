<?php

namespace src;

class Task8
{

    function main(string $json): string
    {

        $jsonInfo = '{
            "Title": "The Cuckoos Calling",
            "Author": "Robert Galbraith",
            "Detail": {
            "Publisher": "Little Brown"
            }
            }
            ';

        $newData = json_decode($jsonInfo);
        $newString = '';
        foreach ($newData as $key => $chunk) {
            $temp = $key;
            $temp .= ": ";
            $temp .= $chunk;
            $newString .= $temp;
            if ($chunk !== end($newData)) {
                $newString .= "\r\n";
            }
        }
        return $newString;
    }
}

print_r((new Task8)->main('das'));
