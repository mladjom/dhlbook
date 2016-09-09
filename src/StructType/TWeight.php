<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tWeight StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class TWeight extends AbstractStructBase
{
    /**
     * The unit
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $unit;
    /**
     * The _
     * @var int
     */
    public $_;
    /**
     * Constructor method for tWeight
     * @uses TWeight::setUnit()
     * @uses TWeight::set_()
     * @param string $unit
     * @param int $_
     */
    public function __construct($unit = null, $_ = null)
    {
        $this
            ->setUnit($unit)
            ->set_($_);
    }
    /**
     * Get unit value
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }
    /**
     * Set unit value
     * @uses \DHLBook\EnumType\TWeightUnit::valueIsValid()
     * @uses \DHLBook\EnumType\TWeightUnit::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $unit
     * @return \DHLBook\StructType\TWeight
     */
    public function setUnit($unit = null)
    {
        // validation for constraint: enumeration
        if (!\DHLBook\EnumType\TWeightUnit::valueIsValid($unit)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $unit, implode(', ', \DHLBook\EnumType\TWeightUnit::getValidValues())), __LINE__);
        }
        $this->unit = $unit;
        return $this;
    }
    /**
     * Get _ value
     * @return int|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param int $_
     * @return \DHLBook\StructType\TWeight
     */
    public function set_($_ = null)
    {
        // validation for constraint: int
        if (!is_null($_) && !is_numeric($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\TWeight
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
