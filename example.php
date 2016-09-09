<?php
/**
 * This file aims to show you how to use this package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.dhltoolbox.se/DHLBookWS/Book.asmx?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
	\WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.dhltoolbox.se/DHLBookWS/Book.asmx?wsdl',
	\WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \DHLBook\ClassMap::get(),
	\WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_SOAP_VERSION => 'SOAP_1_2',
);

/**
 * Samples for Book ServiceType
 */
$book = new \DHLBook\ServiceType\Book( $options );

/**
 * Credentials for all operations/methods
 */
$credentials = new \DHLBook\StructType\Credentials();
$credentials->User = 'BookAppUser';
$credentials->Password = 'BA%Pwd07';
/**
 * Sample call for BookPickup operation/method
 */
$requestMessageHeader = new \DHLBook\StructType\RequestMessageHeader();
$requestMessageHeader->MessageId = sprintf( '%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand( 0, 65535 ), mt_rand( 0, 65535 ), mt_rand( 0, 65535 ), mt_rand( 16384, 20479 ), mt_rand( 32768, 49151 ), mt_rand( 0, 65535 ), mt_rand( 0, 65535 ), mt_rand( 0, 65535 ) );
$requestMessageHeader->TimeStamp = date( "Y-m-d" ) . 'T' . date( "H:i:s" );
$requestMessageHeader->Environment = 'Book';
$requestMessageHeader->RequestingSystem = 'TestApp';

$general = new \DHLBook\StructType\TGeneral();
$general->PickupDate = date( "Y-m-d" );
$general->CustomerID = 'your customer id';
$general->Note1 = 'Test utför ej';
$general->Note2 = '';
$general->FreightNo = '';

$general->Weight = new \DHLBook\StructType\TWeight();
$general->Weight->unit = 'kg';
$general->Weight->_ = '1';

$general->Volume = new \DHLBook\StructType\TVolume();
$general->Volume->unit = 'm3';
$general->Volume->_ = '';


$general->Loadingmeter = new \DHLBook\StructType\TLoadingmeter();
$general->Loadingmeter->unit = 'm';
$general->Loadingmeter->_ = '';

$general->NoItems = '';

$general->NoPallets = '2';

$general->PalletPlace = new \DHLBook\StructType\TPalletPlace();
$general->PalletPlace->unit = '';
$general->PalletPlace->_ = '';

/*
 * Values
 * 102 DHL PAKET
 * 103 DHL SERVICE POINT B2C
 * 104 DHL SERVICE POINT C2B
 * 105 DHL SERVICE POINT C2C
 * 210 DHL Pall
 * 211 DHL Stycke
 * 212 DHL Parti
 * 401 DHL HOME DELIVERY via DHL terminal
 * 402 DHL HOME DELIVERY RETURN via DHL terminal
 * 501 DHL HOME DELIVERY via external terminal
 * 502 DHL HOME DELIVERY RETURN via external terminal
*/
$general->ProductCode = '401';

$general->Pickup = new \DHLBook\StructType\TPickup();
$general->Pickup->Address = new \DHLBook\StructType\TAddressSE();
$general->Pickup->Address->Name = 'Gränsfors bruks AB';
$general->Pickup->Address->AddressLine = 'Stationsgatan';
$general->Pickup->Address->PostCode = '82077';
$general->Pickup->Address->City = 'Gnarp';
$general->Delivery = new \DHLBook\StructType\TDelivery();
$general->Delivery->Address = new \DHLBook\StructType\TAddressGeneric();
$general->Delivery->Address->Name = 'Testkund';
$general->Delivery->Address->AddressLine = 'Testgatan';
$general->Delivery->Address->PostCode = '56432';
$general->Delivery->Address->City = 'Bankeryd';

$tbook = new \DHLBook\StructType\TBook( $requestMessageHeader, $general, $gBook = null );

if ( $book->BookPickup( new \DHLBook\StructType\BookPickup( $credentials, $tbook ) ) !== false ) {
	echo '<pre>';
	print_r( $book->getResult() );
	echo '</pre>';
} else {
	echo '<pre>';
	print_r( $book->getLastError() );
	echo '</pre>';
}

/**
 * Samples for Get ServiceType
 */
$get = new \DHLBook\ServiceType\Get( $options );
/**
 * Sample call for GetStationDetails operation/method
 */
if ( $get->GetStationDetails( new \DHLBook\StructType\GetStationDetails( $credentials, '2410' ) ) !== false ) {
	echo '<pre>';
	print_r( $get->getResult() );
	echo '</pre>';
} else {
	echo '<pre>';
	print_r( $get->getLastError() );
	echo '</pre>';
}
/**
 * Sample call for GetAllStations operation/method
 */
if ( $get->GetAllStations( new \DHLBook\StructType\GetAllStations( $credentials ) ) !== false ) {
	echo '<pre>';
	print_r( $get->getResult() );
	echo '</pre>';
} else {
	echo '<pre>';
	print_r( $get->getLastError() );
	echo '</pre>';
}
