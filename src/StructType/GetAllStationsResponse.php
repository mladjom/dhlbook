<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllStationsResponse StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class GetAllStationsResponse extends AbstractStructBase
{
    /**
     * The GetAllStationsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLBook\StructType\GetAllStationsResult
     */
    public $GetAllStationsResult;
    /**
     * Constructor method for GetAllStationsResponse
     * @uses GetAllStationsResponse::setGetAllStationsResult()
     * @param \DHLBook\StructType\GetAllStationsResult $getAllStationsResult
     */
    public function __construct(\DHLBook\StructType\GetAllStationsResult $getAllStationsResult = null)
    {
        $this
            ->setGetAllStationsResult($getAllStationsResult);
    }
    /**
     * Get GetAllStationsResult value
     * @return \DHLBook\StructType\GetAllStationsResult|null
     */
    public function getGetAllStationsResult()
    {
        return $this->GetAllStationsResult;
    }
    /**
     * Set GetAllStationsResult value
     * @param \DHLBook\StructType\GetAllStationsResult $getAllStationsResult
     * @return \DHLBook\StructType\GetAllStationsResponse
     */
    public function setGetAllStationsResult(\DHLBook\StructType\GetAllStationsResult $getAllStationsResult = null)
    {
        $this->GetAllStationsResult = $getAllStationsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\GetAllStationsResponse
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
