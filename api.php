<?php

	
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	// Will return the response, if false it print the response
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Set the url
	curl_setopt($ch, CURLOPT_URL,'http://dynamicdev.net/affirm');
	// Execute
	$result=curl_exec($ch);

	//close connection
	curl_close($ch);

	echo $result;
	
?>