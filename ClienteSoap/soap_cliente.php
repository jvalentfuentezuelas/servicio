<?php
$client = new SoapClient('http://localhost/servicio/ServicioSoap/saludo.wsdl',array(
      'location' => "http://localhost/servicio/ServicioSoap/soap_server.php",
      'uri'      => "http://localhost/servicio/ServicioSoap/",
      'trace'    => 1
       ));
try {
	echo $return = $client->__soapCall("suma", ["a"=> 5,"b"=> 4 ] );
      echo "<br>";
      echo $return = $client->__soapCall("adios", ["name"=> "Manolo" ] );
      echo "<br>";
      echo $return = $client->__soapCall("saludo", ["name"=>"Manolo" ] );
} catch ( SOAPFault $e ) {
	echo $e->getMessage().PHP_EOL;
}