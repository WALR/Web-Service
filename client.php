<?php 
 require_once('lib/nusoap.php');
//Give it value at parameter 
$param = array( 'your_name' => 'Monotosh Roy'); 
//Create object that referer a web services 
$client = new nusoap_client('http://localhost/WS/server.php'); 
//Call a function at server and send parameters too 
$response = $client->call('get_message',$param); 
//Process result 
if($client->fault) 
{ 
echo "FAULT: <p>Code: (".$client->faultcode."</p>"; 
echo "String: ".$client->faultstring; 
} 
else 
{ 
echo $response; 
} 
?> 