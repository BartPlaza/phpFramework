<?php

	require_once 'Task.php';
	$database = require_once 'database.php';

	$tasks = $database->fetchAll('tasks');

	$tasks = array_map(function($task){
		return new Task($task->description, $task->status, $task->date);
	},$tasks);

	array_push($tasks, new Task('Go to bed', false, date('Y-m-d')));



	require_once 'views/index.view.php';

