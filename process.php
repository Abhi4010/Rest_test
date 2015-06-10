<?php
if(isset($_POST['Submit']))
{
	$bookname = $_POST['bookname'];
	//resourse Address
	$url = "localhost/Rest_test/index.php?name=$bookname";

	//send request to resourse

	$client = curl_init($url);
	curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
	//get response to resourse
	$response = curl_exec($client);

	echo $response;

	echo $response;
	//decode
	$result = json_decode($response);
	//echo $result;

	echo $result->data;


}

?>