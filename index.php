<?php 
	require_once 'helpers.php';
	require_once 'vendor/autoload.php';
	

	if(!isset($_COOKIE['visits'])){
		setcookie('visits', 1, time()+3600, '/');
		echo "Welcome on our Page!";
	} else {
		if($_SERVER['REQUEST_URI'] === '/'){
			setcookie('visits',$_COOKIE['visits'] += 1, time()+3600, '/'); 
			echo "Welcome back! It is your {$_COOKIE['visits']} visit";
		}
	}

	
	
	$router = require_once 'routes.php';

	$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
	$requestType = $_SERVER['REQUEST_METHOD'];

	require $router->direct($uri, $requestType);

?>