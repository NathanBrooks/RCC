<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function generate() {

	$cardList = array();

	$ch = curl_init();

	// set the url
	curl_setopt($ch, CURLOPT_URL, "https://api.cardcastgame.com/v1/decks?limit=50&offset=0");

	//return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // execute curl function
    $response = json_decode(curl_exec($ch));

    // get number of pages of cards
    //$pageCount = ($response->results->count / 50) + 1;

    $pageCount = 948;
    for($i=1; $i<$pageCount; $i++) {
    	$offset = $i * 50;
    	curl_setopt($ch, CURLOPT_URL, "https://api.cardcastgame.com/v1/decks?limit=50&offset=$offset");

    	$response = json_decode(curl_exec($ch));

		foreach ($response->results->data as $pack) {
			array_push($cardList, $pack->code);
		}
	}

	// save to file
	file_put_contents("../data/CardList.json", json_encode($cardList));
}

generate();

?>