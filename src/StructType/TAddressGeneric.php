<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tAddressGeneric StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class TAddressGeneric extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The AddressLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AddressLine;
    /**
     * The PostCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PostCode;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $City;
    /**
     * Constructor method for tAddressGeneric
     * @uses TAddressGeneric::setName()
     * @uses TAddressGeneric::setAddressLine()
     * @uses TAddressGeneric::setPostCode()
     * @uses TAddressGeneric::setCity()
     * @param string $name
     * @param string $addressLine
     * @param string $postCode
     * @param string $city
     */
    public function __construct($name = null, $addressLine = null, $postCode = null, $city = null)
    {
        $this
            ->setName($name)
            ->setAddressLine($addressLine)
            ->setPostCode($postCode)
            ->setCity($city);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \DHLBook\StructType\TAddressGeneric
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get AddressLine value
     * @return string|null
     */
    public function getAddressLine()
    {
        return $this->AddressLine;
    }
    /**
     * Set AddressLine value
     * @param string $addressLine
     * @return \DHLBook\StructType\TAddressGeneric
     */
    public function setAddressLine($addressLine = null)
    {
        // validation for constraint: string
        if (!is_null($addressLine) && !is_string($addressLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressLine)), __LINE__);
        }
        $this->AddressLine = $addressLine;
        return $this;
    }
    /**
     * Get PostCode value
     * @return string|null
     */
    public function getPostCode()
    {
        return $this->PostCode;
    }
    /**
     * Set PostCode value
     * @param string $postCode
     * @return \DHLBook\StructType\TAddressGeneric
     */
    public function setPostCode($postCode = null)
    {
        // validation for constraint: string
        if (!is_null($postCode) && !is_string($postCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postCode)), __LINE__);
        }
        $this->PostCode = $postCode;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \DHLBook\StructType\TAddressGeneric
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\TAddressGeneric
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
