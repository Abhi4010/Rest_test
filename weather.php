<?php
if(isset($_GET['q']))
{
	$query = $_GET['q'];
	$ans = "";


//Fetch cityname
	$cityname = substr($query, strpos($query,' in') + 4);
	$cityname = substr($cityname,0, strlen($cityname)-1);
	
	//resourse Address
	$url = "http://api.openweathermap.org/data/2.5/weather?q=$cityname";
	//send request to resourse


	$client = curl_init($url);
	curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
	//get response to resourse
	$response = curl_exec($client);





    // ...process $content now

	//$response = substr($response,5);
	$response = json_decode($response,true);

	if( strpos($query,'temperature') !== false)
	{
		$ans = strval( ( (int) ( $response['main']['temp']-273.15)) );
		$ans  = $ans." C or ";
		$ans  = $ans.$response['main']['temp']; 
		$ans  = $ans." K" ;


	}
	else if (  strpos($query,'humidity') !== false )
	{
		$ans += $response['main']['humidity'];
	}
	else if( strpos($query,'Rain') !== false)
	{
		$stemp = $response['weather'][0]['main'];
		$stemp2 = "Rain";
		if($stemp == $stemp2 )
			$ans = "Yes";
		else
		$ans = "No";
	}

	else if( strpos($query,'Clouds') !== false)
	{
		$stemp = $response['weather'][0]['main'];
		$stemp2 = "Clouds";
		if($stemp == $stemp2 )
			$ans = "Yes";
		else
		$ans = "No";

	}
	
	else if( strpos($query,'Clear') !== false)
	{$stemp = $response['weather'][0]['main'];
		$stemp2 = "Clear";
		if($stemp == $stemp2 )
			$ans = "Yes";
		else
		$ans = "No";

	}
	
	$responseans['answer'] = $ans;
	
	$responseans = json_encode($responseans);
	echo $responseans;

}

?>