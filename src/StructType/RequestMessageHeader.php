<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestMessageHeader StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class RequestMessageHeader extends AbstractStructBase
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
     * The RequestingSystem
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RequestingSystem;
    /**
     * Constructor method for RequestMessageHeader
     * @uses RequestMessageHeader::setMessageId()
     * @uses RequestMessageHeader::setTimeStamp()
     * @uses RequestMessageHeader::setEnvironment()
     * @uses RequestMessageHeader::setRequestingSystem()
     * @param string $messageId
     * @param string $timeStamp
     * @param string $environment
     * @param string $requestingSystem
     */
    public function __construct($messageId = null, $timeStamp = null, $environment = null, $requestingSystem = null)
    {
        $this
            ->setMessageId($messageId)
            ->setTimeStamp($timeStamp)
            ->setEnvironment($environment)
            ->setRequestingSystem($requestingSystem);
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
     * @return \DHLBook\StructType\RequestMessageHeader
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
     * @return \DHLBook\StructType\RequestMessageHeader
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
     * @return \DHLBook\StructType\RequestMessageHeader
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
     * Get RequestingSystem value
     * @return string|null
     */
    public function getRequestingSystem()
    {
        return $this->RequestingSystem;
    }
    /**
     * Set RequestingSystem value
     * @param string $requestingSystem
     * @return \DHLBook\StructType\RequestMessageHeader
     */
    public function setRequestingSystem($requestingSystem = null)
    {
        // validation for constraint: string
        if (!is_null($requestingSystem) && !is_string($requestingSystem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestingSystem)), __LINE__);
        }
        $this->RequestingSystem = $requestingSystem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\RequestMessageHeader
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
