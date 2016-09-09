<?php

namespace DHLBook\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Book ServiceType
 * @subpackage Services
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class Book extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named BookPickup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \DHLBook\StructType\BookPickup $parameters
     * @return \DHLBook\StructType\BookPickupResponse|bool
     */
    public function BookPickup(\DHLBook\StructType\BookPickup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->BookPickup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \DHLBook\StructType\BookPickupResponse
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
