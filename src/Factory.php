<?php

namespace IntEnse;

/**
 * Summing class factory.
 *
 * Factory class used to figure out which class name to retrieve for
 * the calculation type provided.
 *
 * @category IntEnse
 * @package  IntEnse
 *
 * @author   Quintin Venter
 * @since    14 August 2018
 */
class Factory
{
    
    /**
     * Constant for the odd sum calculation.
     * 
     * @var string
     */
    const ODD = 'odd';
    
    /**
     * Constant for the even sum calculation.
     * 
     * @var string
     */
    const EVEN = 'even';
    
    /**
     * Constant for the numeric sequence sum calculation.
     * 
     * @var string
     */
    const GAUSS = 'gauss';
    
    /**
     * Gets the class name for the calculation type provided.
     * 
     * @param string $type - the calculation type required
     * 
     * @return SumInterface - the class instance or null if none found
     */
    public static function getClass(string $type) : ?SumInterface
    {
        $class = null;
        switch ($type) {
            case static::ODD:
                $class = Odd::class;
                break;
            case static::EVEN:
                $class = Even::class;
                break;
            case static::GAUSS:
                $class = Gauss::class;
                break;
        }
        if (!empty($class)) {
            return new $class();
        }
        return null;
    }
}