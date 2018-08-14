<?php

namespace IntEnse;

/**
 * Odd summing class.
 *
 * Class used to sum up odd elements.
 *
 * @category IntEnse
 * @package  IntEnse
 *
 * @author   Quintin Venter
 * @since    14 August 2018
 */
class Odd implements SumInterface
{
    
    /**
     * Sums up the odd indexed items of the number provided.
     * IE: 123456 = 1 + 3 + 5 = 9
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
            // php array indexing starts on 0 so need to actually check for evens
            if (($index % 2) == 0) {
                $sum += $number[$index];
            }
        }
        return $sum;
    }
}