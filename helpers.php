<?php

function dd($item){
	echo "<pre>";
		die(print_r($item));
	echo "</pre>";
}

function connectToDb(){
	try {
		return new PDO('mysql:host=localhost;dbname=tpt;charset=utf8','root', '');
	} catch (PDOException $e){
		die($e->getMessage());
	}
}