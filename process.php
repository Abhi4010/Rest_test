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



    // ...process $content now

	$response = substr($response,5);
	echo $response;
	$response = json_decode($response,true);
	echo $response['status'];


/*
	$json = '{"countryId":"84","productId":"1","status":"0","opId":"134"}';

	echo $json;
$json = json_decode($json, true);
echo $json['countryId'];
echo $json['productId'];
echo $json['status'];
echo $json['opId'];
*/

}

?>