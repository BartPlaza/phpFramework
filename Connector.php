<?php

class Connector {
	public static function make($config){
		try {
			return new PDO("{$config['db_connection']};dbname={$config['db_name']};options={$config['db_charset_pg']}",$config['db_user'],$config['db_password'],$config['db_options']);
		} catch (PDOException $e){
			die($e->getMessage());
		}
	}
}