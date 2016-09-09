<?php

namespace DHLBook\EnumType;

/**
 * This class stands for tGuarantee1 EnumType
 * @subpackage Enumerations
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class TGuarantee1
{
    /**
     * Constant for value '07'
     * @return string '07'
     */
    const VALUE_07 = '07';
    /**
     * Constant for value '10'
     * @return string '10'
     */
    const VALUE_10 = '10';
    /**
     * Constant for value '12'
     * @return string '12'
     */
    const VALUE_12 = '12';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_07
     * @uses self::VALUE_10
     * @uses self::VALUE_12
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_07,
            self::VALUE_10,
            self::VALUE_12,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
