<?php

namespace IntEnse;

/**
 * Gauss summing class.
 *
 * Class used to sum up the parts of a number similar to the Gauss problem.
 *
 * @category IntEnse
 * @package  IntEnse
 *
 * @author   Quintin Venter
 * @since    14 August 2018
 */
class Gauss implements SumInterface
{
    
    /**
     * Sums up the whole numbers that make up the number provided.
     * IE: 3 = 1 + 2 + 3 = 6
     * 
     * @TODO: really large values will give an exception as they will no longer be considered integer
     * 
     * @param int $number - the number to sum up
     *
     * @return int - the sum result
     */
    public function sum(int $number) : int
    {
        return ($number * ($number + 1)) / 2;
    }
}