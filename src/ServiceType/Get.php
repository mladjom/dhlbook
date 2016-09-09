<?php

namespace DHLBook\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetStationDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \DHLBook\StructType\GetStationDetails $parameters
     * @return \DHLBook\StructType\GetStationDetailsResponse|bool
     */
    public function GetStationDetails(\DHLBook\StructType\GetStationDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetStationDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAllStations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \DHLBook\StructType\GetAllStations $parameters
     * @return \DHLBook\StructType\GetAllStationsResponse|bool
     */
    public function GetAllStations(\DHLBook\StructType\GetAllStations $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetAllStations($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \DHLBook\StructType\GetAllStationsResponse|\DHLBook\StructType\GetStationDetailsResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
