## License

```
This Code is released under the GNU LGPL

This library is free software; you can redistribute it and/or modify it 
under the terms of the GNU Lesser General Public License as published 
by the Free Software Foundation; either version 2 of the License, or 
(at your option) any later version.

This library is distributed in the hope that it will be useful, but 
WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY 
or FITNESS FOR A PARTICULAR PURPOSE.

See the GNU Lesser General Public License for more details.
```


## Description

This library is a PHP Oriented Object client for the DHL Book pickup - Web Service.
IT implements the DHL DHL Book pickup as described here http://www.dhldashboard.se/Services/Bookpickup/tabid/241/Default.aspx. An account is required to see this restricted web page.

## Setup

You can use composer to use this library.

```php
{
    "require": {
		"mladjom/dhlbook": "*"
    }
}
```
## Usage

This client does not rely or depend on any framework and it should be fairly easy to integrate with your own code.

The example.php contains examples on how to use the client and perform requests to DHL XML API, those are bock a pickup, get stations and get station details.

In order to have the samples working, you will need to create a DHL Freight account. You can do that by going to their URL : http://www.dhlfreight.se/Bokatransport/Inrikesv%C3%A4gtransport/tabid/262/ctl/Register/Default.aspx

## Example

### Request a shipment
```php
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
    print_r( $book->getResult() );
} else {
	print_r( $book->getLastError() );
}
```

### Security

The access to the web service is restricted using Basic Authentication. User and Password are sent as part of the HTTP request body.