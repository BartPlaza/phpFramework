<?php

class Connector {
	public static function make($config){
		try {
			return new PDO("{$config['db_connection']};dbname={$config['db_name']};charset={$config['db_charset']}",$config['db_user'],$config['db_password'],$config['db_options']);
		} catch (PDOException $e){
			die($e->getMessage());
		}
	}
}