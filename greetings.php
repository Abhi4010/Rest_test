<?php
//header("Content-Type:application/json");
//process client request
include("functions.php");

if(!empty($_GET['q']))
{
	$s1 = $_GET['q'];

	if( (strpos($s1,'Hi!') !== false) ||
		(strpos($s1,'Hello!') !== false) ||
		(strpos($s1,'Good morning!') !== false)  ||
		(strpos($s1,'Good evening!') !== false) ||
		(strpos($s1,'Good night!') !== false)

		)
	{
		deliverGreetingsResponse();

	}

	else
	{
		deliverResponse(400,"invalid request",NULL);

	}


}



/**/
?>