<?php

namespace IntEnse;

/**
 * Summing interface.
 * 
 * The interface for sum types.
 * 
 * @category IntEnse
 * @package  IntEnse
 * 
 * @author   Quintin Venter
 * @since    14 August 2018
 */
interface SumInterface
{
    
    /**
     * Sums up the provided number in a specific format.
     * 
     * @param int $number - the number to sum up
     * 
     * @return int - the sum result
     */
    public function sum(int $number) : int;
}

