<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tGDelivery StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class TGDelivery extends AbstractStructBase
{
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLBook\StructType\TAddressSE
     */
    public $Address;
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Contact;
    /**
     * The PhoneNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNo;
    /**
     * The OpenHourStart
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OpenHourStart;
    /**
     * The OpenHourStop
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OpenHourStop;
    /**
     * Constructor method for tGDelivery
     * @uses TGDelivery::setAddress()
     * @uses TGDelivery::setContact()
     * @uses TGDelivery::setPhoneNo()
     * @uses TGDelivery::setOpenHourStart()
     * @uses TGDelivery::setOpenHourStop()
     * @param \DHLBook\StructType\TAddressSE $address
     * @param string $contact
     * @param string $phoneNo
     * @param string $openHourStart
     * @param string $openHourStop
     */
    public function __construct(\DHLBook\StructType\TAddressSE $address = null, $contact = null, $phoneNo = null, $openHourStart = null, $openHourStop = null)
    {
        $this
            ->setAddress($address)
            ->setContact($contact)
            ->setPhoneNo($phoneNo)
            ->setOpenHourStart($openHourStart)
            ->setOpenHourStop($openHourStop);
    }
    /**
     * Get Address value
     * @return \DHLBook\StructType\TAddressSE|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \DHLBook\StructType\TAddressSE $address
     * @return \DHLBook\StructType\TGDelivery
     */
    public function setAddress(\DHLBook\StructType\TAddressSE $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Contact value
     * @return string|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param string $contact
     * @return \DHLBook\StructType\TGDelivery
     */
    public function setContact($contact = null)
    {
        // validation for constraint: string
        if (!is_null($contact) && !is_string($contact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contact)), __LINE__);
        }
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get PhoneNo value
     * @return string|null
     */
    public function getPhoneNo()
    {
        return $this->PhoneNo;
    }
    /**
     * Set PhoneNo value
     * @param string $phoneNo
     * @return \DHLBook\StructType\TGDelivery
     */
    public function setPhoneNo($phoneNo = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNo) && !is_string($phoneNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNo)), __LINE__);
        }
        $this->PhoneNo = $phoneNo;
        return $this;
    }
    /**
     * Get OpenHourStart value
     * @return string|null
     */
    public function getOpenHourStart()
    {
        return $this->OpenHourStart;
    }
    /**
     * Set OpenHourStart value
     * @param string $openHourStart
     * @return \DHLBook\StructType\TGDelivery
     */
    public function setOpenHourStart($openHourStart = null)
    {
        // validation for constraint: string
        if (!is_null($openHourStart) && !is_string($openHourStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openHourStart)), __LINE__);
        }
        $this->OpenHourStart = $openHourStart;
        return $this;
    }
    /**
     * Get OpenHourStop value
     * @return string|null
     */
    public function getOpenHourStop()
    {
        return $this->OpenHourStop;
    }
    /**
     * Set OpenHourStop value
     * @param string $openHourStop
     * @return \DHLBook\StructType\TGDelivery
     */
    public function setOpenHourStop($openHourStop = null)
    {
        // validation for constraint: string
        if (!is_null($openHourStop) && !is_string($openHourStop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openHourStop)), __LINE__);
        }
        $this->OpenHourStop = $openHourStop;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\TGDelivery
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
