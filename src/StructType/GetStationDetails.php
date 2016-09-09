<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStationDetails StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class GetStationDetails extends AbstractStructBase
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
     * The StationId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StationId;
    /**
     * Constructor method for GetStationDetails
     * @uses GetStationDetails::setCredentials()
     * @uses GetStationDetails::setStationId()
     * @param \DHLBook\StructType\Credentials $credentials
     * @param string $stationId
     */
    public function __construct(\DHLBook\StructType\Credentials $credentials = null, $stationId = null)
    {
        $this
            ->setCredentials($credentials)
            ->setStationId($stationId);
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
     * @return \DHLBook\StructType\GetStationDetails
     */
    public function setCredentials(\DHLBook\StructType\Credentials $credentials = null)
    {
        $this->Credentials = $credentials;
        return $this;
    }
    /**
     * Get StationId value
     * @return string|null
     */
    public function getStationId()
    {
        return $this->StationId;
    }
    /**
     * Set StationId value
     * @param string $stationId
     * @return \DHLBook\StructType\GetStationDetails
     */
    public function setStationId($stationId = null)
    {
        // validation for constraint: string
        if (!is_null($stationId) && !is_string($stationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stationId)), __LINE__);
        }
        $this->StationId = $stationId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\GetStationDetails
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
