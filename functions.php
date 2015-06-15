<?php

function deliverResponse($status, $statusMessage, $data)
{
	header("HTTP/1.1 $status #statusMessage");

	$response['status'] = $status;
	$response['statusMessage'] = $statusMessage;
	$response['data'] = $data;

	$jsonResponse = json_encode($response);
	echo $jsonResponse;

}

function deliverGreetingsResponse()
{
	$response['answer'] = "Hello, Kitty! I am Ashikee Ghosh. Nice to meet you :)";
	$jsonResponse = json_encode($response);
	echo $jsonResponse;


}

?>