<?php

	$database = require_once 'database.php';

	$database->add('tasks', $_POST);

	header('Location: /');
