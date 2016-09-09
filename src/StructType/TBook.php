<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tBook StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class TBook extends AbstractStructBase
{
    /**
     * The RequestMessageHeader
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLBook\StructType\RequestMessageHeader
     */
    public $RequestMessageHeader;
    /**
     * The General
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLBook\StructType\TGeneral
     */
    public $General;
    /**
     * The GBook
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLBook\StructType\TGBook
     */
    public $GBook;
    /**
     * Constructor method for tBook
     * @uses TBook::setRequestMessageHeader()
     * @uses TBook::setGeneral()
     * @uses TBook::setGBook()
     * @param \DHLBook\StructType\RequestMessageHeader $requestMessageHeader
     * @param \DHLBook\StructType\TGeneral $general
     * @param \DHLBook\StructType\TGBook $gBook
     */
    public function __construct(\DHLBook\StructType\RequestMessageHeader $requestMessageHeader = null, \DHLBook\StructType\TGeneral $general = null, \DHLBook\StructType\TGBook $gBook = null)
    {
        $this
            ->setRequestMessageHeader($requestMessageHeader)
            ->setGeneral($general)
            ->setGBook($gBook);
    }
    /**
     * Get RequestMessageHeader value
     * @return \DHLBook\StructType\RequestMessageHeader|null
     */
    public function getRequestMessageHeader()
    {
        return $this->RequestMessageHeader;
    }
    /**
     * Set RequestMessageHeader value
     * @param \DHLBook\StructType\RequestMessageHeader $requestMessageHeader
     * @return \DHLBook\StructType\TBook
     */
    public function setRequestMessageHeader(\DHLBook\StructType\RequestMessageHeader $requestMessageHeader = null)
    {
        $this->RequestMessageHeader = $requestMessageHeader;
        return $this;
    }
    /**
     * Get General value
     * @return \DHLBook\StructType\TGeneral|null
     */
    public function getGeneral()
    {
        return $this->General;
    }
    /**
     * Set General value
     * @param \DHLBook\StructType\TGeneral $general
     * @return \DHLBook\StructType\TBook
     */
    public function setGeneral(\DHLBook\StructType\TGeneral $general = null)
    {
        $this->General = $general;
        return $this;
    }
    /**
     * Get GBook value
     * @return \DHLBook\StructType\TGBook|null
     */
    public function getGBook()
    {
        return $this->GBook;
    }
    /**
     * Set GBook value
     * @param \DHLBook\StructType\TGBook $gBook
     * @return \DHLBook\StructType\TBook
     */
    public function setGBook(\DHLBook\StructType\TGBook $gBook = null)
    {
        $this->GBook = $gBook;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\TBook
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
