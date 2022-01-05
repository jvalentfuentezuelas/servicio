<?php
$client = new SoapClient('http://localhost/servicio/ServicioSoap/saludo.wsdl',array(
      'location' => "http://localhost/servicio/ServicioSoap/soap_server.php",
      'uri'      => "http://localhost/servicio/ServicioSoap/",
      'trace'    => 1
       ));
try {
	echo $return = $client->__soapCall("suma", ["a"=> 5,"b"=> 4 ] );
} catch ( SOAPFault $e ) {
	echo $e->getMessage().PHP_EOL;
}