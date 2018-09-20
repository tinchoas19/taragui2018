<?php
header('Access-Control-Allow-Origin: *'); 
header("Content-Type:application/json");
//include("controller/funciones.php");

	
	$ret[] = array('title' => 'nota 1', 'description' => 'desc 1');
	$ret[] = array('title' => 'nota 2', 'description' => 'desc 2');
	$ret[] = array('title' => 'nota 3', 'description' => 'desc 3');
	$ret[] = array('title' => 'nota 4', 'description' => 'desc 4');
	delivery_response(200, "event found", $ret);




function delivery_response($status, $status_message, $data)
{
	header("HTTP/1.1 $status $status_message");

	$response['status'] = $status;
	$response['status_message'] = $status_message;
	$response['data'] = $data;

	$json_response = json_encode($response);
	echo $json_response;
}


?>