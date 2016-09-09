<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStationDetailsResponse StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class GetStationDetailsResponse extends AbstractStructBase
{
    /**
     * The GetStationDetailsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s5:GetStationDetailsResult
     * @var \DHLBook\StructType\GetStationDetailsResult
     */
    public $GetStationDetailsResult;
    /**
     * Constructor method for GetStationDetailsResponse
     * @uses GetStationDetailsResponse::setGetStationDetailsResult()
     * @param \DHLBook\StructType\GetStationDetailsResult $getStationDetailsResult
     */
    public function __construct(\DHLBook\StructType\GetStationDetailsResult $getStationDetailsResult = null)
    {
        $this
            ->setGetStationDetailsResult($getStationDetailsResult);
    }
    /**
     * Get GetStationDetailsResult value
     * @return \DHLBook\StructType\GetStationDetailsResult|null
     */
    public function getGetStationDetailsResult()
    {
        return $this->GetStationDetailsResult;
    }
    /**
     * Set GetStationDetailsResult value
     * @param \DHLBook\StructType\GetStationDetailsResult $getStationDetailsResult
     * @return \DHLBook\StructType\GetStationDetailsResponse
     */
    public function setGetStationDetailsResult(\DHLBook\StructType\GetStationDetailsResult $getStationDetailsResult = null)
    {
        $this->GetStationDetailsResult = $getStationDetailsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\GetStationDetailsResponse
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
