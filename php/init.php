<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set("America/Los_Angeles");

function initialize() {
	$results = new stdClass();

	$results->modified_time = date("m/d/y h:i:s", filemtime("../data/CardList.json"));

	print(json_encode($results));
}

initialize();
?>