<?php

$server = $_SERVER['SERVER_NAME'];

$version = "0.115";

// Dev	
if($server == "dev.site.com") {
	
	$env = "dev";
	$lang = "en";
	$url = "http://" . $server;
	$translate_url = "http://" . $server . "?lang=es";

// Live (English)
} else if($server == "www.site.com" || $server == "site.com") {
	
	$env = "live";
	$lang = "en";
	$url = "http://" . $server;
	$translate_url = "http://www.site-es.com";

// Live (Spanish)
} else if($server == "site-es.com" || $server == "www.site-es.com") {
	
	$env = "live";
	$lang = "es";
	$url = "http://" . $server;
	$translate_url = "http://www.site.com";

// Local	
} else {
	
	$env = "local";
	$lang = "en";
	$url = "http://" . $server . ":8888/theQuiz";
	$translate_url = "http://" . $server . ":8888/theQuiz?lang=es";
	
}

?>