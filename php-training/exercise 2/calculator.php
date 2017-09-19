<?php

class Calculator {
    public function add($x, $y)
    {
        $z = $this->getAMagicNumber();
        return $x + $y + $z;
    }

    private function getAMagicNumber()
    {
        return rand(10, 100);
    }
}


$myCalculator = new Calculator();
echo $myCalculator->add(5, 5) . "\n";
echo $myCalculator->add(200, 500) . "\n";