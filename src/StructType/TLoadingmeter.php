<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tLoadingmeter StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class TLoadingmeter extends AbstractStructBase
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
     * @var float
     */
    public $_;
    /**
     * Constructor method for tLoadingmeter
     * @uses TLoadingmeter::setUnit()
     * @uses TLoadingmeter::set_()
     * @param string $unit
     * @param float $_
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
     * @uses \DHLBook\EnumType\TLoadingmeterUnit::valueIsValid()
     * @uses \DHLBook\EnumType\TLoadingmeterUnit::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $unit
     * @return \DHLBook\StructType\TLoadingmeter
     */
    public function setUnit($unit = null)
    {
        // validation for constraint: enumeration
        if (!\DHLBook\EnumType\TLoadingmeterUnit::valueIsValid($unit)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $unit, implode(', ', \DHLBook\EnumType\TLoadingmeterUnit::getValidValues())), __LINE__);
        }
        $this->unit = $unit;
        return $this;
    }
    /**
     * Get _ value
     * @return float|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param float $_
     * @return \DHLBook\StructType\TLoadingmeter
     */
    public function set_($_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\TLoadingmeter
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
