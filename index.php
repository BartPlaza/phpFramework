<?php 
	require_once 'helpers.php';
	

	
	$router = require_once 'routes.php';

	$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
	$requestType = $_SERVER['REQUEST_METHOD'];

	require $router->direct($uri, $requestType);

?>