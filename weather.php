<?php
if(isset($_GET['q']))
{
	$query = $_GET['q'];


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
		echo ( (int) ( $response['main']['temp']-273.15) );
		echo " C or ";
		echo $response['main']['temp']; 
		echo " K" ;


	}
	else if (  strpos($query,'humidity') !== false )
	{
		echo $response['main']['humidity'];
	}
	else if( strpos($query,'Rain') !== false)
	{
		$stemp = $response['weather'][0]['main'];
		$stemp2 = "Rain";
		if($stemp == $stemp2 )
			echo "Yes";
		else
		echo "No";
	}

	else if( strpos($query,'Clouds') !== false)
	{
		$stemp = $response['weather'][0]['main'];
		$stemp2 = "Clouds";
		if($stemp == $stemp2 )
			echo "Yes";
		else
		echo "No";

	}
	
	else if( strpos($query,'Clear') !== false)
	{$stemp = $response['weather'][0]['main'];
		$stemp2 = "Clear";
		if($stemp == $stemp2 )
			echo "Yes";
		else
		echo "No";

	}
	

}

?>