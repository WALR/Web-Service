<?php 
	require_once ('../lib/nusoap.php');
	require_once('/cust/search.php');

	$server = new soap_server;

	$server->register('get_usuario');

	function get_usuario($id)
	{
		
	}

 ?>