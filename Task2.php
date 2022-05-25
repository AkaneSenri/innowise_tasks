<?php

namespace src;

class Task2
{
    public function main(string $birthday): int
    {
        if (preg_match('/^[0-9]{2}[.]{1}[0-9]{2}[.]{1}[0-9]{4}$/', $birthday)) {
            $dateNow = new \DateTime('today');
            $bd = new \DateTime($birthday);
            $bd->setDate($dateNow->format('Y'), $bd->format('m'), $bd->format('d'));
            $tmp = $dateNow->diff($bd);
            if ($tmp->invert) {
                $bd->modify('+1 year');
                $tmp = $dateNow->diff($bd);
            }

            return $tmp->days;
        } else {
            throw new \InvalidArgumentException();
        }
    }
}

