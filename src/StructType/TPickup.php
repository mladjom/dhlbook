<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tPickup StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class TPickup extends AbstractStructBase
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
     * The PickupTimeStart
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PickupTimeStart;
    /**
     * The PickupTimeStop
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PickupTimeStop;
    /**
     * Constructor method for tPickup
     * @uses TPickup::setAddress()
     * @uses TPickup::setContact()
     * @uses TPickup::setPhoneNo()
     * @uses TPickup::setPickupTimeStart()
     * @uses TPickup::setPickupTimeStop()
     * @param \DHLBook\StructType\TAddressSE $address
     * @param string $contact
     * @param string $phoneNo
     * @param string $pickupTimeStart
     * @param string $pickupTimeStop
     */
    public function __construct(\DHLBook\StructType\TAddressSE $address = null, $contact = null, $phoneNo = null, $pickupTimeStart = null, $pickupTimeStop = null)
    {
        $this
            ->setAddress($address)
            ->setContact($contact)
            ->setPhoneNo($phoneNo)
            ->setPickupTimeStart($pickupTimeStart)
            ->setPickupTimeStop($pickupTimeStop);
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
     * @return \DHLBook\StructType\TPickup
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
     * @return \DHLBook\StructType\TPickup
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
     * @return \DHLBook\StructType\TPickup
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
     * Get PickupTimeStart value
     * @return string|null
     */
    public function getPickupTimeStart()
    {
        return $this->PickupTimeStart;
    }
    /**
     * Set PickupTimeStart value
     * @param string $pickupTimeStart
     * @return \DHLBook\StructType\TPickup
     */
    public function setPickupTimeStart($pickupTimeStart = null)
    {
        // validation for constraint: string
        if (!is_null($pickupTimeStart) && !is_string($pickupTimeStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupTimeStart)), __LINE__);
        }
        $this->PickupTimeStart = $pickupTimeStart;
        return $this;
    }
    /**
     * Get PickupTimeStop value
     * @return string|null
     */
    public function getPickupTimeStop()
    {
        return $this->PickupTimeStop;
    }
    /**
     * Set PickupTimeStop value
     * @param string $pickupTimeStop
     * @return \DHLBook\StructType\TPickup
     */
    public function setPickupTimeStop($pickupTimeStop = null)
    {
        // validation for constraint: string
        if (!is_null($pickupTimeStop) && !is_string($pickupTimeStop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupTimeStop)), __LINE__);
        }
        $this->PickupTimeStop = $pickupTimeStop;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\TPickup
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
