<?php 
	
	require_once 'Router.php';

	$router = new Router;

	$router->get('', 'controllers/index.php');
	$router->get('home', 'controllers/index.php');
	$router->get('about', 'controllers/about.php');
	$router->get('tasks', 'controllers/tasks.php');
	$router->post('tasks', 'controllers/addTasks.php');

	return $router;