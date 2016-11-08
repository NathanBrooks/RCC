<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getPacks() {
	$selectedPacks = array();
	$packCount = 10;


	if(isset($_GET["pack_count"])) {
		$packCount = $_GET["pack_count"];
	}

	if(file_exists("../data/CardList.json")) {

		$packList = json_decode(file_get_contents("../data/CardList.json"));	
	
		for($i=0; $i<$packCount; $i++) {
			array_push($selectedPacks, $packList[rand(0, count($packList)-1)]);
		}
	}

	print(json_encode($selectedPacks));
}

getPacks();
?>
