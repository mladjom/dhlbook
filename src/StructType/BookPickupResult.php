<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookPickupResult StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class BookPickupResult extends AbstractStructBase
{
    /**
     * The StandardPickupAddressUsed
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $StandardPickupAddressUsed;
    /**
     * The PickupDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PickupDate;
    /**
     * The ResponseMessageHeader
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLBook\StructType\ResponseMessageHeader
     */
    public $ResponseMessageHeader;
    /**
     * The BookNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BookNo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * Constructor method for BookPickupResult
     * @uses BookPickupResult::setStandardPickupAddressUsed()
     * @uses BookPickupResult::setPickupDate()
     * @uses BookPickupResult::setResponseMessageHeader()
     * @uses BookPickupResult::setBookNo()
     * @uses BookPickupResult::setMessage()
     * @param bool $standardPickupAddressUsed
     * @param string $pickupDate
     * @param \DHLBook\StructType\ResponseMessageHeader $responseMessageHeader
     * @param string $bookNo
     * @param string $message
     */
    public function __construct($standardPickupAddressUsed = null, $pickupDate = null, \DHLBook\StructType\ResponseMessageHeader $responseMessageHeader = null, $bookNo = null, $message = null)
    {
        $this
            ->setStandardPickupAddressUsed($standardPickupAddressUsed)
            ->setPickupDate($pickupDate)
            ->setResponseMessageHeader($responseMessageHeader)
            ->setBookNo($bookNo)
            ->setMessage($message);
    }
    /**
     * Get StandardPickupAddressUsed value
     * @return bool
     */
    public function getStandardPickupAddressUsed()
    {
        return $this->StandardPickupAddressUsed;
    }
    /**
     * Set StandardPickupAddressUsed value
     * @param bool $standardPickupAddressUsed
     * @return \DHLBook\StructType\BookPickupResult
     */
    public function setStandardPickupAddressUsed($standardPickupAddressUsed = null)
    {
        $this->StandardPickupAddressUsed = $standardPickupAddressUsed;
        return $this;
    }
    /**
     * Get PickupDate value
     * @return string
     */
    public function getPickupDate()
    {
        return $this->PickupDate;
    }
    /**
     * Set PickupDate value
     * @param string $pickupDate
     * @return \DHLBook\StructType\BookPickupResult
     */
    public function setPickupDate($pickupDate = null)
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupDate)), __LINE__);
        }
        $this->PickupDate = $pickupDate;
        return $this;
    }
    /**
     * Get ResponseMessageHeader value
     * @return \DHLBook\StructType\ResponseMessageHeader|null
     */
    public function getResponseMessageHeader()
    {
        return $this->ResponseMessageHeader;
    }
    /**
     * Set ResponseMessageHeader value
     * @param \DHLBook\StructType\ResponseMessageHeader $responseMessageHeader
     * @return \DHLBook\StructType\BookPickupResult
     */
    public function setResponseMessageHeader(\DHLBook\StructType\ResponseMessageHeader $responseMessageHeader = null)
    {
        $this->ResponseMessageHeader = $responseMessageHeader;
        return $this;
    }
    /**
     * Get BookNo value
     * @return string|null
     */
    public function getBookNo()
    {
        return $this->BookNo;
    }
    /**
     * Set BookNo value
     * @param string $bookNo
     * @return \DHLBook\StructType\BookPickupResult
     */
    public function setBookNo($bookNo = null)
    {
        // validation for constraint: string
        if (!is_null($bookNo) && !is_string($bookNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookNo)), __LINE__);
        }
        $this->BookNo = $bookNo;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \DHLBook\StructType\BookPickupResult
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\BookPickupResult
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
