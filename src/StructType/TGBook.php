<?php

namespace DHLBook\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tGBook StructType
 * @subpackage Structs
 * @date 2016-09-09
 * @author Mladjo
 * @release 1.0.0
 */
class TGBook extends AbstractStructBase
{
    /**
     * The PickupDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PickupDate;
    /**
     * The Guarantee1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Guarantee1;
    /**
     * The Guarantee2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Guarantee2;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLBook\StructType\TWeight
     */
    public $Weight;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLBook\StructType\TVolume
     */
    public $Volume;
    /**
     * The Loadingmeter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLBook\StructType\TLoadingmeter
     */
    public $Loadingmeter;
    /**
     * The PalletPlace
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLBook\StructType\TPalletPlace
     */
    public $PalletPlace;
    /**
     * The CustomerID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomerID;
    /**
     * The Note1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note1;
    /**
     * The Note2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note2;
    /**
     * The FreightNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FreightNo;
    /**
     * The NoItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NoItems;
    /**
     * The NoPallets
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NoPallets;
    /**
     * The CustomerRef
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomerRef;
    /**
     * The GoodsCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GoodsCode;
    /**
     * The Option1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option1;
    /**
     * The Option2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option2;
    /**
     * The Option3
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option3;
    /**
     * The Option4
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option4;
    /**
     * The Option5
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option5;
    /**
     * The Option6
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option6;
    /**
     * The Option7
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option7;
    /**
     * The Option8
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option8;
    /**
     * The Option9
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option9;
    /**
     * The Option10
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option10;
    /**
     * The Option11
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option11;
    /**
     * The Option12
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option12;
    /**
     * The Option13
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option13;
    /**
     * The Option14
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option14;
    /**
     * The Option15
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option15;
    /**
     * The ProductCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProductCode;
    /**
     * The FreightPayer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FreightPayer;
    /**
     * The Pickup
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLBook\StructType\TPickup
     */
    public $Pickup;
    /**
     * The GDelivery
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \DHLBook\StructType\TGDelivery
     */
    public $GDelivery;
    /**
     * Constructor method for tGBook
     * @uses TGBook::setPickupDate()
     * @uses TGBook::setGuarantee1()
     * @uses TGBook::setGuarantee2()
     * @uses TGBook::setWeight()
     * @uses TGBook::setVolume()
     * @uses TGBook::setLoadingmeter()
     * @uses TGBook::setPalletPlace()
     * @uses TGBook::setCustomerID()
     * @uses TGBook::setNote1()
     * @uses TGBook::setNote2()
     * @uses TGBook::setFreightNo()
     * @uses TGBook::setNoItems()
     * @uses TGBook::setNoPallets()
     * @uses TGBook::setCustomerRef()
     * @uses TGBook::setGoodsCode()
     * @uses TGBook::setOption1()
     * @uses TGBook::setOption2()
     * @uses TGBook::setOption3()
     * @uses TGBook::setOption4()
     * @uses TGBook::setOption5()
     * @uses TGBook::setOption6()
     * @uses TGBook::setOption7()
     * @uses TGBook::setOption8()
     * @uses TGBook::setOption9()
     * @uses TGBook::setOption10()
     * @uses TGBook::setOption11()
     * @uses TGBook::setOption12()
     * @uses TGBook::setOption13()
     * @uses TGBook::setOption14()
     * @uses TGBook::setOption15()
     * @uses TGBook::setProductCode()
     * @uses TGBook::setFreightPayer()
     * @uses TGBook::setPickup()
     * @uses TGBook::setGDelivery()
     * @param string $pickupDate
     * @param string $guarantee1
     * @param string $guarantee2
     * @param \DHLBook\StructType\TWeight $weight
     * @param \DHLBook\StructType\TVolume $volume
     * @param \DHLBook\StructType\TLoadingmeter $loadingmeter
     * @param \DHLBook\StructType\TPalletPlace $palletPlace
     * @param string $customerID
     * @param string $note1
     * @param string $note2
     * @param string $freightNo
     * @param int $noItems
     * @param int $noPallets
     * @param string $customerRef
     * @param string $goodsCode
     * @param string $option1
     * @param string $option2
     * @param string $option3
     * @param string $option4
     * @param string $option5
     * @param string $option6
     * @param string $option7
     * @param string $option8
     * @param string $option9
     * @param string $option10
     * @param string $option11
     * @param string $option12
     * @param string $option13
     * @param string $option14
     * @param string $option15
     * @param string $productCode
     * @param string $freightPayer
     * @param \DHLBook\StructType\TPickup $pickup
     * @param \DHLBook\StructType\TGDelivery $gDelivery
     */
    public function __construct($pickupDate = null, $guarantee1 = null, $guarantee2 = null, \DHLBook\StructType\TWeight $weight = null, \DHLBook\StructType\TVolume $volume = null, \DHLBook\StructType\TLoadingmeter $loadingmeter = null, \DHLBook\StructType\TPalletPlace $palletPlace = null, $customerID = null, $note1 = null, $note2 = null, $freightNo = null, $noItems = null, $noPallets = null, $customerRef = null, $goodsCode = null, $option1 = null, $option2 = null, $option3 = null, $option4 = null, $option5 = null, $option6 = null, $option7 = null, $option8 = null, $option9 = null, $option10 = null, $option11 = null, $option12 = null, $option13 = null, $option14 = null, $option15 = null, $productCode = null, $freightPayer = null, \DHLBook\StructType\TPickup $pickup = null, \DHLBook\StructType\TGDelivery $gDelivery = null)
    {
        $this
            ->setPickupDate($pickupDate)
            ->setGuarantee1($guarantee1)
            ->setGuarantee2($guarantee2)
            ->setWeight($weight)
            ->setVolume($volume)
            ->setLoadingmeter($loadingmeter)
            ->setPalletPlace($palletPlace)
            ->setCustomerID($customerID)
            ->setNote1($note1)
            ->setNote2($note2)
            ->setFreightNo($freightNo)
            ->setNoItems($noItems)
            ->setNoPallets($noPallets)
            ->setCustomerRef($customerRef)
            ->setGoodsCode($goodsCode)
            ->setOption1($option1)
            ->setOption2($option2)
            ->setOption3($option3)
            ->setOption4($option4)
            ->setOption5($option5)
            ->setOption6($option6)
            ->setOption7($option7)
            ->setOption8($option8)
            ->setOption9($option9)
            ->setOption10($option10)
            ->setOption11($option11)
            ->setOption12($option12)
            ->setOption13($option13)
            ->setOption14($option14)
            ->setOption15($option15)
            ->setProductCode($productCode)
            ->setFreightPayer($freightPayer)
            ->setPickup($pickup)
            ->setGDelivery($gDelivery);
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
     * @return \DHLBook\StructType\TGBook
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
     * Get Guarantee1 value
     * @return string
     */
    public function getGuarantee1()
    {
        return $this->Guarantee1;
    }
    /**
     * Set Guarantee1 value
     * @uses \DHLBook\EnumType\TGuarantee1::valueIsValid()
     * @uses \DHLBook\EnumType\TGuarantee1::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $guarantee1
     * @return \DHLBook\StructType\TGBook
     */
    public function setGuarantee1($guarantee1 = null)
    {
        // validation for constraint: enumeration
        if (!\DHLBook\EnumType\TGuarantee1::valueIsValid($guarantee1)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $guarantee1, implode(', ', \DHLBook\EnumType\TGuarantee1::getValidValues())), __LINE__);
        }
        $this->Guarantee1 = $guarantee1;
        return $this;
    }
    /**
     * Get Guarantee2 value
     * @return string
     */
    public function getGuarantee2()
    {
        return $this->Guarantee2;
    }
    /**
     * Set Guarantee2 value
     * @uses \DHLBook\EnumType\TGuarantee2::valueIsValid()
     * @uses \DHLBook\EnumType\TGuarantee2::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $guarantee2
     * @return \DHLBook\StructType\TGBook
     */
    public function setGuarantee2($guarantee2 = null)
    {
        // validation for constraint: enumeration
        if (!\DHLBook\EnumType\TGuarantee2::valueIsValid($guarantee2)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $guarantee2, implode(', ', \DHLBook\EnumType\TGuarantee2::getValidValues())), __LINE__);
        }
        $this->Guarantee2 = $guarantee2;
        return $this;
    }
    /**
     * Get Weight value
     * @return \DHLBook\StructType\TWeight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \DHLBook\StructType\TWeight $weight
     * @return \DHLBook\StructType\TGBook
     */
    public function setWeight(\DHLBook\StructType\TWeight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Volume value
     * @return \DHLBook\StructType\TVolume|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param \DHLBook\StructType\TVolume $volume
     * @return \DHLBook\StructType\TGBook
     */
    public function setVolume(\DHLBook\StructType\TVolume $volume = null)
    {
        $this->Volume = $volume;
        return $this;
    }
    /**
     * Get Loadingmeter value
     * @return \DHLBook\StructType\TLoadingmeter|null
     */
    public function getLoadingmeter()
    {
        return $this->Loadingmeter;
    }
    /**
     * Set Loadingmeter value
     * @param \DHLBook\StructType\TLoadingmeter $loadingmeter
     * @return \DHLBook\StructType\TGBook
     */
    public function setLoadingmeter(\DHLBook\StructType\TLoadingmeter $loadingmeter = null)
    {
        $this->Loadingmeter = $loadingmeter;
        return $this;
    }
    /**
     * Get PalletPlace value
     * @return \DHLBook\StructType\TPalletPlace|null
     */
    public function getPalletPlace()
    {
        return $this->PalletPlace;
    }
    /**
     * Set PalletPlace value
     * @param \DHLBook\StructType\TPalletPlace $palletPlace
     * @return \DHLBook\StructType\TGBook
     */
    public function setPalletPlace(\DHLBook\StructType\TPalletPlace $palletPlace = null)
    {
        $this->PalletPlace = $palletPlace;
        return $this;
    }
    /**
     * Get CustomerID value
     * @return string|null
     */
    public function getCustomerID()
    {
        return $this->CustomerID;
    }
    /**
     * Set CustomerID value
     * @param string $customerID
     * @return \DHLBook\StructType\TGBook
     */
    public function setCustomerID($customerID = null)
    {
        // validation for constraint: string
        if (!is_null($customerID) && !is_string($customerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerID)), __LINE__);
        }
        $this->CustomerID = $customerID;
        return $this;
    }
    /**
     * Get Note1 value
     * @return string|null
     */
    public function getNote1()
    {
        return $this->Note1;
    }
    /**
     * Set Note1 value
     * @param string $note1
     * @return \DHLBook\StructType\TGBook
     */
    public function setNote1($note1 = null)
    {
        // validation for constraint: string
        if (!is_null($note1) && !is_string($note1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($note1)), __LINE__);
        }
        $this->Note1 = $note1;
        return $this;
    }
    /**
     * Get Note2 value
     * @return string|null
     */
    public function getNote2()
    {
        return $this->Note2;
    }
    /**
     * Set Note2 value
     * @param string $note2
     * @return \DHLBook\StructType\TGBook
     */
    public function setNote2($note2 = null)
    {
        // validation for constraint: string
        if (!is_null($note2) && !is_string($note2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($note2)), __LINE__);
        }
        $this->Note2 = $note2;
        return $this;
    }
    /**
     * Get FreightNo value
     * @return string|null
     */
    public function getFreightNo()
    {
        return $this->FreightNo;
    }
    /**
     * Set FreightNo value
     * @param string $freightNo
     * @return \DHLBook\StructType\TGBook
     */
    public function setFreightNo($freightNo = null)
    {
        // validation for constraint: string
        if (!is_null($freightNo) && !is_string($freightNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freightNo)), __LINE__);
        }
        $this->FreightNo = $freightNo;
        return $this;
    }
    /**
     * Get NoItems value
     * @return int|null
     */
    public function getNoItems()
    {
        return $this->NoItems;
    }
    /**
     * Set NoItems value
     * @param int $noItems
     * @return \DHLBook\StructType\TGBook
     */
    public function setNoItems($noItems = null)
    {
        // validation for constraint: int
        if (!is_null($noItems) && !is_numeric($noItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($noItems)), __LINE__);
        }
        $this->NoItems = $noItems;
        return $this;
    }
    /**
     * Get NoPallets value
     * @return int|null
     */
    public function getNoPallets()
    {
        return $this->NoPallets;
    }
    /**
     * Set NoPallets value
     * @param int $noPallets
     * @return \DHLBook\StructType\TGBook
     */
    public function setNoPallets($noPallets = null)
    {
        // validation for constraint: int
        if (!is_null($noPallets) && !is_numeric($noPallets)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($noPallets)), __LINE__);
        }
        $this->NoPallets = $noPallets;
        return $this;
    }
    /**
     * Get CustomerRef value
     * @return string|null
     */
    public function getCustomerRef()
    {
        return $this->CustomerRef;
    }
    /**
     * Set CustomerRef value
     * @param string $customerRef
     * @return \DHLBook\StructType\TGBook
     */
    public function setCustomerRef($customerRef = null)
    {
        // validation for constraint: string
        if (!is_null($customerRef) && !is_string($customerRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerRef)), __LINE__);
        }
        $this->CustomerRef = $customerRef;
        return $this;
    }
    /**
     * Get GoodsCode value
     * @return string|null
     */
    public function getGoodsCode()
    {
        return $this->GoodsCode;
    }
    /**
     * Set GoodsCode value
     * @param string $goodsCode
     * @return \DHLBook\StructType\TGBook
     */
    public function setGoodsCode($goodsCode = null)
    {
        // validation for constraint: string
        if (!is_null($goodsCode) && !is_string($goodsCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($goodsCode)), __LINE__);
        }
        $this->GoodsCode = $goodsCode;
        return $this;
    }
    /**
     * Get Option1 value
     * @return string|null
     */
    public function getOption1()
    {
        return $this->Option1;
    }
    /**
     * Set Option1 value
     * @param string $option1
     * @return \DHLBook\StructType\TGBook
     */
    public function setOption1($option1 = null)
    {
        // validation for constraint: string
        if (!is_null($option1) && !is_string($option1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option1)), __LINE__);
        }
        $this->Option1 = $option1;
        return $this;
    }
    /**
     * Get Option2 value
     * @return string|null
     */
    public function getOption2()
    {
        return $this->Option2;
    }
    /**
     * Set Option2 value
     * @param string $option2
     * @return \DHLBook\StructType\TGBook
     */
    public function setOption2($option2 = null)
    {
        // validation for constraint: string
        if (!is_null($option2) && !is_string($option2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option2)), __LINE__);
        }
        $this->Option2 = $option2;
        return $this;
    }
    /**
     * Get Option3 value
     * @return string|null
     */
    public function getOption3()
    {
        return $this->Option3;
    }
    /**
     * Set Option3 value
     * @param string $option3
     * @return \DHLBook\StructType\TGBook
     */
    public function setOption3($option3 = null)
    {
        // validation for constraint: string
        if (!is_null($option3) && !is_string($option3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option3)), __LINE__);
        }
        $this->Option3 = $option3;
        return $this;
    }
    /**
     * Get Option4 value
     * @return string|null
     */
    public function getOption4()
    {
        return $this->Option4;
    }
    /**
     * Set Option4 value
     * @param string $option4
     * @return \DHLBook\StructType\TGBook
     */
    public function setOption4($option4 = null)
    {
        // validation for constraint: string
        if (!is_null($option4) && !is_string($option4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option4)), __LINE__);
        }
        $this->Option4 = $option4;
        return $this;
    }
    /**
     * Get Option5 value
     * @return string|null
     */
    public function getOption5()
    {
        return $this->Option5;
    }
    /**
     * Set Option5 value
     * @param string $option5
     * @return \DHLBook\StructType\TGBook
     */
    public function setOption5($option5 = null)
    {
        // validation for constraint: string
        if (!is_null($option5) && !is_string($option5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option5)), __LINE__);
        }
        $this->Option5 = $option5;
        return $this;
    }
    /**
     * Get Option6 value
     * @return string|null
     */
    public function getOption6()
    {
        return $this->Option6;
    }
    /**
     * Set Option6 value
     * @param string $option6
     * @return \DHLBook\StructType\TGBook
     */
    public function setOption6($option6 = null)
    {
        // validation for constraint: string
        if (!is_null($option6) && !is_string($option6)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option6)), __LINE__);
        }
        $this->Option6 = $option6;
        return $this;
    }
    /**
     * Get Option7 value
     * @return string|null
     */
    public function getOption7()
    {
        return $this->Option7;
    }
    /**
     * Set Option7 value
     * @param string $option7
     * @return \DHLBook\StructType\TGBook
     */
    public function setOption7($option7 = null)
    {
        // validation for constraint: string
        if (!is_null($option7) && !is_string($option7)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option7)), __LINE__);
        }
        $this->Option7 = $option7;
        return $this;
    }
    /**
     * Get Option8 value
     * @return string|null
     */
    public function getOption8()
    {
        return $this->Option8;
    }
    /**
     * Set Option8 value
     * @param string $option8
     * @return \DHLBook\StructType\TGBook
     */
    public function setOption8($option8 = null)
    {
        // validation for constraint: string
        if (!is_null($option8) && !is_string($option8)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option8)), __LINE__);
        }
        $this->Option8 = $option8;
        return $this;
    }
    /**
     * Get Option9 value
     * @return string|null
     */
    public function getOption9()
    {
        return $this->Option9;
    }
    /**
     * Set Option9 value
     * @param string $option9
     * @return \DHLBook\StructType\TGBook
     */
    public function setOption9($option9 = null)
    {
        // validation for constraint: string
        if (!is_null($option9) && !is_string($option9)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option9)), __LINE__);
        }
        $this->Option9 = $option9;
        return $this;
    }
    /**
     * Get Option10 value
     * @return string|null
     */
    public function getOption10()
    {
        return $this->Option10;
    }
    /**
     * Set Option10 value
     * @param string $option10
     * @return \DHLBook\StructType\TGBook
     */
    public function setOption10($option10 = null)
    {
        // validation for constraint: string
        if (!is_null($option10) && !is_string($option10)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option10)), __LINE__);
        }
        $this->Option10 = $option10;
        return $this;
    }
    /**
     * Get Option11 value
     * @return string|null
     */
    public function getOption11()
    {
        return $this->Option11;
    }
    /**
     * Set Option11 value
     * @param string $option11
     * @return \DHLBook\StructType\TGBook
     */
    public function setOption11($option11 = null)
    {
        // validation for constraint: string
        if (!is_null($option11) && !is_string($option11)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option11)), __LINE__);
        }
        $this->Option11 = $option11;
        return $this;
    }
    /**
     * Get Option12 value
     * @return string|null
     */
    public function getOption12()
    {
        return $this->Option12;
    }
    /**
     * Set Option12 value
     * @param string $option12
     * @return \DHLBook\StructType\TGBook
     */
    public function setOption12($option12 = null)
    {
        // validation for constraint: string
        if (!is_null($option12) && !is_string($option12)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option12)), __LINE__);
        }
        $this->Option12 = $option12;
        return $this;
    }
    /**
     * Get Option13 value
     * @return string|null
     */
    public function getOption13()
    {
        return $this->Option13;
    }
    /**
     * Set Option13 value
     * @param string $option13
     * @return \DHLBook\StructType\TGBook
     */
    public function setOption13($option13 = null)
    {
        // validation for constraint: string
        if (!is_null($option13) && !is_string($option13)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option13)), __LINE__);
        }
        $this->Option13 = $option13;
        return $this;
    }
    /**
     * Get Option14 value
     * @return string|null
     */
    public function getOption14()
    {
        return $this->Option14;
    }
    /**
     * Set Option14 value
     * @param string $option14
     * @return \DHLBook\StructType\TGBook
     */
    public function setOption14($option14 = null)
    {
        // validation for constraint: string
        if (!is_null($option14) && !is_string($option14)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option14)), __LINE__);
        }
        $this->Option14 = $option14;
        return $this;
    }
    /**
     * Get Option15 value
     * @return string|null
     */
    public function getOption15()
    {
        return $this->Option15;
    }
    /**
     * Set Option15 value
     * @param string $option15
     * @return \DHLBook\StructType\TGBook
     */
    public function setOption15($option15 = null)
    {
        // validation for constraint: string
        if (!is_null($option15) && !is_string($option15)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option15)), __LINE__);
        }
        $this->Option15 = $option15;
        return $this;
    }
    /**
     * Get ProductCode value
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }
    /**
     * Set ProductCode value
     * @param string $productCode
     * @return \DHLBook\StructType\TGBook
     */
    public function setProductCode($productCode = null)
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productCode)), __LINE__);
        }
        $this->ProductCode = $productCode;
        return $this;
    }
    /**
     * Get FreightPayer value
     * @return string|null
     */
    public function getFreightPayer()
    {
        return $this->FreightPayer;
    }
    /**
     * Set FreightPayer value
     * @param string $freightPayer
     * @return \DHLBook\StructType\TGBook
     */
    public function setFreightPayer($freightPayer = null)
    {
        // validation for constraint: string
        if (!is_null($freightPayer) && !is_string($freightPayer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freightPayer)), __LINE__);
        }
        $this->FreightPayer = $freightPayer;
        return $this;
    }
    /**
     * Get Pickup value
     * @return \DHLBook\StructType\TPickup|null
     */
    public function getPickup()
    {
        return $this->Pickup;
    }
    /**
     * Set Pickup value
     * @param \DHLBook\StructType\TPickup $pickup
     * @return \DHLBook\StructType\TGBook
     */
    public function setPickup(\DHLBook\StructType\TPickup $pickup = null)
    {
        $this->Pickup = $pickup;
        return $this;
    }
    /**
     * Get GDelivery value
     * @return \DHLBook\StructType\TGDelivery|null
     */
    public function getGDelivery()
    {
        return $this->GDelivery;
    }
    /**
     * Set GDelivery value
     * @param \DHLBook\StructType\TGDelivery $gDelivery
     * @return \DHLBook\StructType\TGBook
     */
    public function setGDelivery(\DHLBook\StructType\TGDelivery $gDelivery = null)
    {
        $this->GDelivery = $gDelivery;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLBook\StructType\TGBook
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
