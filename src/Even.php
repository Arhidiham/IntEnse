<?php

namespace IntEnse;

/**
 * Even summing class.
 *
 * Class used to sum up even elements.
 *
 * @category IntEnse
 * @package  IntEnse
 *
 * @author   Quintin Venter
 * @since    14 August 2018
 */
class Even implements SumInterface
{
    
    /**
     * Sums up the even indexed items of the number provided.
     * IE: 123456 = 2 + 4 + 6 = 12
     * 
     * @param int $number - the number to sum up
     * 
     * @return int - the sum result
     */
    public function sum(int $number) : int
    {
        $sum = 0;
        $number = (string)$number; // cast to string so we can access the characters as an array
        $length = strlen($number);
        for ($index = 0; $index < $length; ++$index) {
            // php array indexing starts on 0 so need to actually check for odds
            if (($index % 2) != 0) {
                $sum += $number[$index];
            }
        }
        return $sum;
    }
}