<?php
//header("Content-Type:application/json");
//process client request
include("functions.php");

echo "hello there";

if( !empty($_GET['name']) )
{
	$name = $_GET['name'];
	$price = getPrice($name);
	if( empty($price) )
	{
		deliverResponse(200,"book not found",NULL);
	}
	else
	{
		//respond with book price


		deliverResponse(200,"book found",$price);
	}
	

}

else
{
	//throw invalid request
	deliverResponse(400,"invalid request",NULL);
}





/**/
?>