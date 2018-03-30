<?php

	require_once 'Task.php';
	$database = require_once 'database.php';

	$tasks = $database->fetchAll('tasks');

	$tasks = array_map(function($task){
		return new Task($task->description, $task->status);
	},$tasks);

	array_push($tasks, new Task('Go to bed', false));



	require_once 'views/index.view.php';

