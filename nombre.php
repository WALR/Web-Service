<?php 
	include_once ('lib/nusoap.php');

	$cliente = new nusoap_client('http://localhost/WS/server.php');
	
	$ape = "Lemus";
	$nom = $cliente->call('get_message', array('nombre' => 'Wilfred', 'apellido' => $ape));
	$edad = $cliente->call('get_edad', array('n' => "Rachel"));

	echo $nom;
	echo "<br>";
	echo $edad;
	echo "<br>";
	
	$num1 = 6;
	$num2 = 10;
	$mayor = $cliente->call('get_mayor', array('n1' => $num1, 'n2'=> $num2 ));

	echo $mayor;
 ?>