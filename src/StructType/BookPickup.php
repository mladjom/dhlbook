<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookPickup StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class BookPickup extends AbstractStructBase
{
    /**
     * The Credentials
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s1:Credentials
     * @var \DHLBook\StructType\Credentials
     */
    public $Credentials;
    /**
     * The Book
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s2:Book
     * @var \DHLBook\StructType\TBook
     */
    public $Book;
    /**
     * Constructor method for BookPickup
     * @uses BookPickup::setCredentials()
     * @uses BookPickup::setBook()
     * @param \DHLBook\StructType\Credentials $credentials
     * @param \DHLBook\StructType\TBook $book
     */
    public function __construct(\DHLBook\StructType\Credentials $credentials = null, \DHLBook\StructType\TBook $book = null)
    {
        $this
            ->setCredentials($credentials)
            ->setBook($book);
    }
    /**
     * Get Credentials value
     * @return \DHLBook\StructType\Credentials|null
     */
    public function getCredentials()
    {
        return $this->Credentials;
    }
    /**
     * Set Credentials value
     * @param \DHLBook\StructType\Credentials $credentials
     * @return \DHLBook\StructType\BookPickup
     */
    public function setCredentials(\DHLBook\StructType\Credentials $credentials = null)
    {
        $this->Credentials = $credentials;
        return $this;
    }
    /**
     * Get Book value
     * @return \DHLBook\StructType\TBook|null
     */
    public function getBook()
    {
        return $this->Book;
    }
    /**
     * Set Book value
     * @param \DHLBook\StructType\TBook $book
     * @return \DHLBook\StructType\BookPickup
     */
    public function setBook(\DHLBook\StructType\TBook $book = null)
    {
        $this->Book = $book;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\BookPickup
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
