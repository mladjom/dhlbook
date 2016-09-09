<?php

namespace DHLBook\EnumType;

/**
 * This class stands for tLoadingmeterUnit EnumType
 * @subpackage Enumerations
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class TLoadingmeterUnit
{
    /**
     * Constant for value 'm'
     * @return string 'm'
     */
    const VALUE_M = 'm';
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
     * @uses self::VALUE_M
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_M,
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
