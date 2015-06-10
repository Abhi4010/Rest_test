<?php

function getPrice($find)
{
	$books=array(
		"java" =>320,
		"c" => 420,
		"php" => 520

	);
	
	foreach( $books as $book=>$price)
	{
		//echo $book;
		//echo "</br>";
		if($book == $find)
		{
			return $price;
			break;
		}
	}
	/***/
}
function deliverResponse($status, $statusMessage, $data)
{
	header("HTTP/1.1 $status #statusMessage");

	$response['status'] = $status;
	$response['statusMessage'] = $statusMessage;
	$response['data'] = $data;

	$jsonResponse = json_encode($response);
	echo $jsonResponse;

}





?>