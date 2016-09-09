<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllStations StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class GetAllStations extends AbstractStructBase
{
    /**
     * The Credentials
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s1:Credentials
     * @var \DHLBook\StructType\Credentials
     */
    public $Credentials;
    /**
     * Constructor method for GetAllStations
     * @uses GetAllStations::setCredentials()
     * @param \DHLBook\StructType\Credentials $credentials
     */
    public function __construct(\DHLBook\StructType\Credentials $credentials = null)
    {
        $this
            ->setCredentials($credentials);
    }
    /**
     * Get Credentials value
     * @return \DHLBook\StructType\Credentials|null
     */
    public function getCredentials()
    {
        return $this->Credentials;
    }
    /**
     * Set Credentials value
     * @param \DHLBook\StructType\Credentials $credentials
     * @return \DHLBook\StructType\GetAllStations
     */
    public function setCredentials(\DHLBook\StructType\Credentials $credentials = null)
    {
        $this->Credentials = $credentials;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\GetAllStations
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
