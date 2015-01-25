<?php 
	require_once ('../../lib/nusoap.php');

	$wsdl = "http://localhost/WS/Ejemplos/simple/server.php?wsdl";
	$client = new nusoap_client($wsdl, 'wsdl');
	$param = array('valor' => '100');

	$respon = $client->call('get_calculoIVA', $param);

	echo "El iva de 100 es: ";
	print_r($respon);

 ?>