<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStationDetailsResult StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class GetStationDetailsResult extends AbstractStructBase
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
     * The StationNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StationNo;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address;
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
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CountryCode;
    /**
     * The FaxNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FaxNo;
    /**
     * The PhoneNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNo;
    /**
     * The P_Giro
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $P_Giro;
    /**
     * The B_Giro
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $B_Giro;
    /**
     * The PalletDepotNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PalletDepotNo;
    /**
     * Constructor method for GetStationDetailsResult
     * @uses GetStationDetailsResult::setName()
     * @uses GetStationDetailsResult::setStationNo()
     * @uses GetStationDetailsResult::setAddress()
     * @uses GetStationDetailsResult::setPostCode()
     * @uses GetStationDetailsResult::setCity()
     * @uses GetStationDetailsResult::setCountryCode()
     * @uses GetStationDetailsResult::setFaxNo()
     * @uses GetStationDetailsResult::setPhoneNo()
     * @uses GetStationDetailsResult::setP_Giro()
     * @uses GetStationDetailsResult::setB_Giro()
     * @uses GetStationDetailsResult::setPalletDepotNo()
     * @param string $name
     * @param string $stationNo
     * @param string $address
     * @param string $postCode
     * @param string $city
     * @param string $countryCode
     * @param string $faxNo
     * @param string $phoneNo
     * @param string $p_Giro
     * @param string $b_Giro
     * @param string $palletDepotNo
     */
    public function __construct($name = null, $stationNo = null, $address = null, $postCode = null, $city = null, $countryCode = null, $faxNo = null, $phoneNo = null, $p_Giro = null, $b_Giro = null, $palletDepotNo = null)
    {
        $this
            ->setName($name)
            ->setStationNo($stationNo)
            ->setAddress($address)
            ->setPostCode($postCode)
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setFaxNo($faxNo)
            ->setPhoneNo($phoneNo)
            ->setP_Giro($p_Giro)
            ->setB_Giro($b_Giro)
            ->setPalletDepotNo($palletDepotNo);
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
     * @return \DHLBook\StructType\GetStationDetailsResult
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
     * Get StationNo value
     * @return string|null
     */
    public function getStationNo()
    {
        return $this->StationNo;
    }
    /**
     * Set StationNo value
     * @param string $stationNo
     * @return \DHLBook\StructType\GetStationDetailsResult
     */
    public function setStationNo($stationNo = null)
    {
        // validation for constraint: string
        if (!is_null($stationNo) && !is_string($stationNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stationNo)), __LINE__);
        }
        $this->StationNo = $stationNo;
        return $this;
    }
    /**
     * Get Address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \DHLBook\StructType\GetStationDetailsResult
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->Address = $address;
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
     * @return \DHLBook\StructType\GetStationDetailsResult
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
     * @return \DHLBook\StructType\GetStationDetailsResult
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
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \DHLBook\StructType\GetStationDetailsResult
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get FaxNo value
     * @return string|null
     */
    public function getFaxNo()
    {
        return $this->FaxNo;
    }
    /**
     * Set FaxNo value
     * @param string $faxNo
     * @return \DHLBook\StructType\GetStationDetailsResult
     */
    public function setFaxNo($faxNo = null)
    {
        // validation for constraint: string
        if (!is_null($faxNo) && !is_string($faxNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($faxNo)), __LINE__);
        }
        $this->FaxNo = $faxNo;
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
     * @return \DHLBook\StructType\GetStationDetailsResult
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
     * Get P_Giro value
     * @return string|null
     */
    public function getP_Giro()
    {
        return $this->P_Giro;
    }
    /**
     * Set P_Giro value
     * @param string $p_Giro
     * @return \DHLBook\StructType\GetStationDetailsResult
     */
    public function setP_Giro($p_Giro = null)
    {
        // validation for constraint: string
        if (!is_null($p_Giro) && !is_string($p_Giro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($p_Giro)), __LINE__);
        }
        $this->P_Giro = $p_Giro;
        return $this;
    }
    /**
     * Get B_Giro value
     * @return string|null
     */
    public function getB_Giro()
    {
        return $this->B_Giro;
    }
    /**
     * Set B_Giro value
     * @param string $b_Giro
     * @return \DHLBook\StructType\GetStationDetailsResult
     */
    public function setB_Giro($b_Giro = null)
    {
        // validation for constraint: string
        if (!is_null($b_Giro) && !is_string($b_Giro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($b_Giro)), __LINE__);
        }
        $this->B_Giro = $b_Giro;
        return $this;
    }
    /**
     * Get PalletDepotNo value
     * @return string|null
     */
    public function getPalletDepotNo()
    {
        return $this->PalletDepotNo;
    }
    /**
     * Set PalletDepotNo value
     * @param string $palletDepotNo
     * @return \DHLBook\StructType\GetStationDetailsResult
     */
    public function setPalletDepotNo($palletDepotNo = null)
    {
        // validation for constraint: string
        if (!is_null($palletDepotNo) && !is_string($palletDepotNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($palletDepotNo)), __LINE__);
        }
        $this->PalletDepotNo = $palletDepotNo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\GetStationDetailsResult
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
