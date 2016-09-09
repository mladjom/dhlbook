<?php

namespace DHLBook\EnumType;

/**
 * This class stands for tGuarantee2 EnumType
 * @subpackage Enumerations
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class TGuarantee2
{
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'E'
     * @return string 'E'
     */
    const VALUE_E = 'E';
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
     * @uses self::VALUE_S
     * @uses self::VALUE_E
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_S,
            self::VALUE_E,
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
