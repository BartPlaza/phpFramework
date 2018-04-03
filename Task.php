<?php

use Carbon\Carbon;

class Task {
	
	protected $description;
	protected $status = false;
	protected $date;

	public function __construct($description, $status, $date)
	{
		$this->description = $description;
		$this->status = $status;
		$this->date = $date;
	} 

	public function getDescription()
	{
		return $this->description;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getDate()
    {
        $date = new Carbon($this->date);
        return $date->diffForHumans();
    }

	public function complete()
	{
		$this->status = true;
	}

}