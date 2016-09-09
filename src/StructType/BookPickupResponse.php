<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookPickupResponse StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class BookPickupResponse extends AbstractStructBase
{
    /**
     * The BookPickupResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s4:BookPickupResult
     * @var \DHLBook\StructType\BookPickupResult
     */
    public $BookPickupResult;
    /**
     * Constructor method for BookPickupResponse
     * @uses BookPickupResponse::setBookPickupResult()
     * @param \DHLBook\StructType\BookPickupResult $bookPickupResult
     */
    public function __construct(\DHLBook\StructType\BookPickupResult $bookPickupResult = null)
    {
        $this
            ->setBookPickupResult($bookPickupResult);
    }
    /**
     * Get BookPickupResult value
     * @return \DHLBook\StructType\BookPickupResult|null
     */
    public function getBookPickupResult()
    {
        return $this->BookPickupResult;
    }
    /**
     * Set BookPickupResult value
     * @param \DHLBook\StructType\BookPickupResult $bookPickupResult
     * @return \DHLBook\StructType\BookPickupResponse
     */
    public function setBookPickupResult(\DHLBook\StructType\BookPickupResult $bookPickupResult = null)
    {
        $this->BookPickupResult = $bookPickupResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\BookPickupResponse
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
