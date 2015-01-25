<?php
//call library 
require_once ('lib/nusoap.php'); 
//using soap_server to create server object 
$server = new soap_server; 

//register a function that works on server 
$server->register('get_message'); 
$server->register('get_edad');
$server->register('get_mayor');

// create the function 
function get_message($nombre, $apellido) 
{ 
$result = "Bienvenido a los web service =) ". $nombre. " ".$apellido; 
return $result; 
} 
function get_edad($n)
{
	$res = "Tu nombre es ".$n;
	return $res;
}

function get_mayor($n1, $n2)
{
	if ($n1>$n2) {
		$result = $n1." es mayor que ".$n2;
		return $result;
	}
	elseif ($n2>$n1) {
		$result = $n2." es mayor que ".$n1;
		return $result;
	}
	else{
		return "Datos incorrectos";
	}
}
// create HTTP listener 
$server->service($HTTP_RAW_POST_DATA); 
exit(); 
?>  