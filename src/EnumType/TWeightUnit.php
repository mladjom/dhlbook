<?php

namespace DHLBook\EnumType;

/**
 * This class stands for tWeightUnit EnumType
 * @subpackage Enumerations
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class TWeightUnit
{
    /**
     * Constant for value 'kg'
     * @return string 'kg'
     */
    const VALUE_KG = 'kg';
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
     * @uses self::VALUE_KG
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_KG,
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
