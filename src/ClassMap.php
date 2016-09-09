<?php

namespace DHLBook;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'BookPickup' => '\\DHLBook\\StructType\\BookPickup',
            'BookPickupResponse' => '\\DHLBook\\StructType\\BookPickupResponse',
            'GetStationDetails' => '\\DHLBook\\StructType\\GetStationDetails',
            'GetStationDetailsResponse' => '\\DHLBook\\StructType\\GetStationDetailsResponse',
            'GetAllStations' => '\\DHLBook\\StructType\\GetAllStations',
            'GetAllStationsResponse' => '\\DHLBook\\StructType\\GetAllStationsResponse',
            'GetAllStationsResult' => '\\DHLBook\\StructType\\GetAllStationsResult',
            'Credentials' => '\\DHLBook\\StructType\\Credentials',
            'tBook' => '\\DHLBook\\StructType\\TBook',
            'RequestMessageHeader' => '\\DHLBook\\StructType\\RequestMessageHeader',
            'tGeneral' => '\\DHLBook\\StructType\\TGeneral',
            'tWeight' => '\\DHLBook\\StructType\\TWeight',
            'tVolume' => '\\DHLBook\\StructType\\TVolume',
            'tLoadingmeter' => '\\DHLBook\\StructType\\TLoadingmeter',
            'tPalletPlace' => '\\DHLBook\\StructType\\TPalletPlace',
            'tPickup' => '\\DHLBook\\StructType\\TPickup',
            'tAddressSE' => '\\DHLBook\\StructType\\TAddressSE',
            'tDelivery' => '\\DHLBook\\StructType\\TDelivery',
            'tAddressGeneric' => '\\DHLBook\\StructType\\TAddressGeneric',
            'tGBook' => '\\DHLBook\\StructType\\TGBook',
            'tGDelivery' => '\\DHLBook\\StructType\\TGDelivery',
            'BookPickupResult' => '\\DHLBook\\StructType\\BookPickupResult',
            'ResponseMessageHeader' => '\\DHLBook\\StructType\\ResponseMessageHeader',
            'GetStationDetailsResult' => '\\DHLBook\\StructType\\GetStationDetailsResult',
        );
    }
}
