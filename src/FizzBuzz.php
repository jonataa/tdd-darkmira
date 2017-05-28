<?php

class FizzBuzz
{
    public function translate($n)
    {
        if ($n % 3 === 0 && $n % 5 === 0) return 'fizzbuzz';
        if ($n % 3 === 0) return 'fizz';
        if ($n % 5 === 0) return 'buzz';
        return $n;
    }

    public function translateSequence($sequence)
    {
        $output = [];
        foreach($sequence as $i => $n) {
            $output[] = $this->translate($n);
        }
        return implode(', ', $output);
    }
}
