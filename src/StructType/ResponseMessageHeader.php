<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseMessageHeader StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class ResponseMessageHeader extends AbstractStructBase
{
    /**
     * The MessageId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $MessageId;
    /**
     * The RelatesToMessageWithId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    public $RelatesToMessageWithId;
    /**
     * The TimeStamp
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TimeStamp;
    /**
     * The Environment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Environment;
    /**
     * Constructor method for ResponseMessageHeader
     * @uses ResponseMessageHeader::setMessageId()
     * @uses ResponseMessageHeader::setRelatesToMessageWithId()
     * @uses ResponseMessageHeader::setTimeStamp()
     * @uses ResponseMessageHeader::setEnvironment()
     * @param string $messageId
     * @param string $relatesToMessageWithId
     * @param string $timeStamp
     * @param string $environment
     */
    public function __construct($messageId = null, $relatesToMessageWithId = null, $timeStamp = null, $environment = null)
    {
        $this
            ->setMessageId($messageId)
            ->setRelatesToMessageWithId($relatesToMessageWithId)
            ->setTimeStamp($timeStamp)
            ->setEnvironment($environment);
    }
    /**
     * Get MessageId value
     * @return string
     */
    public function getMessageId()
    {
        return $this->MessageId;
    }
    /**
     * Set MessageId value
     * @param string $messageId
     * @return \DHLBook\StructType\ResponseMessageHeader
     */
    public function setMessageId($messageId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($messageId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $messageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}", "%s" given', var_export($messageId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($messageId) && !is_string($messageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageId)), __LINE__);
        }
        $this->MessageId = $messageId;
        return $this;
    }
    /**
     * Get RelatesToMessageWithId value
     * @return string
     */
    public function getRelatesToMessageWithId()
    {
        return $this->RelatesToMessageWithId;
    }
    /**
     * Set RelatesToMessageWithId value
     * @param string $relatesToMessageWithId
     * @return \DHLBook\StructType\ResponseMessageHeader
     */
    public function setRelatesToMessageWithId($relatesToMessageWithId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($relatesToMessageWithId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $relatesToMessageWithId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}", "%s" given', var_export($relatesToMessageWithId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($relatesToMessageWithId) && !is_string($relatesToMessageWithId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relatesToMessageWithId)), __LINE__);
        }
        $this->RelatesToMessageWithId = $relatesToMessageWithId;
        return $this;
    }
    /**
     * Get TimeStamp value
     * @return string
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }
    /**
     * Set TimeStamp value
     * @param string $timeStamp
     * @return \DHLBook\StructType\ResponseMessageHeader
     */
    public function setTimeStamp($timeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($timeStamp) && !is_string($timeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;
        return $this;
    }
    /**
     * Get Environment value
     * @return string|null
     */
    public function getEnvironment()
    {
        return $this->Environment;
    }
    /**
     * Set Environment value
     * @param string $environment
     * @return \DHLBook\StructType\ResponseMessageHeader
     */
    public function setEnvironment($environment = null)
    {
        // validation for constraint: string
        if (!is_null($environment) && !is_string($environment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($environment)), __LINE__);
        }
        $this->Environment = $environment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\ResponseMessageHeader
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
