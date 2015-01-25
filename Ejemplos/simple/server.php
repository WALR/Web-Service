<?php 
	//Llamada a la libreria nusoap
	require_once ('../../lib/nusoap.php');

	$ns = "http://localhost/WS/Ejemplos/simple/";

	//se crea un server
	$server = new soap_server;

	$server->configureWSDL('CalculoIVA', $ns);
	$server->wsdl->schematargetNamespace = $ns;
	//se registra las funciones en el server
	$server->register('get_calculoIVA', array('valor' => 'xsd:string'), array('return' => 'xsd:string'), $ns);

	//crear funcion
	function get_calculoIVA($val)
	{
		$iva = $val*0.12;
		return new soapval('return', 'xsd:string', $iva);
	}

	$server->service($HTTP_RAW_POST_DATA);

 ?>