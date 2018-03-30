<?php

class Task {
	
	protected $description;
	protected $status = false;

	public function __construct($description, $status) 
	{
		$this->description = $description;
		$this->status = $status;
	} 

	public function getDescription()
	{
		return $this->description;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function complete()
	{
		$this->status = true;
	}

}